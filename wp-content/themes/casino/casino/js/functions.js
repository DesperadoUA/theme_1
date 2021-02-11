"use strict";

const $body = document.body;
let mobileMenuTrigger = document.querySelector('.js--menu-trigger');

/* Mobile nav  */
mobileMenuTrigger.addEventListener('click', function (e) {
    e.preventDefault();

    if ($body.classList.contains('is-menu-open')) {
        $body.classList.remove('is-menu-open');
    } else {
        $body.classList.add('is-menu-open');
    }
});

(function($){
    $('.js-slider-banner').slick({
        infinite: true,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000
    });
})(jQuery);
const main = document.querySelector('.main-content')
const navMenuItem = main.querySelectorAll('.nav_menu_item')
if(navMenuItem.length !== 0) {
    const arrTitle = []
    navMenuItem.forEach(item => {
        arrTitle.push({
            title: item.innerHTML,
            key: item.getAttribute('href').slice(1)
        })
    })
    const arrH = []
    const h2 = main.querySelectorAll('h2')
    h2.forEach(item => {
        arrH.push(item)
    })
    const h3 = main.querySelectorAll('h3')
    h3.forEach(item => {
        arrH.push(item)
    })
    const h4 = main.querySelectorAll('h4')
    h4.forEach(item => {
        arrH.push(item)
    })
    const h5 = main.querySelectorAll('h5')
    h5.forEach(item => {
        arrH.push(item)
    })
    const h6 = main.querySelectorAll('h6')
    h6.forEach(item => {
        arrH.push(item)
    })
    for(let i=0; i<arrTitle.length; i++) {
        for(let j=0; j<arrH.length; j++) {
            if(arrH[j].innerHTML === arrTitle[i].title) {
                arrH[j].setAttribute('id', arrTitle[i].key)
            }
        }
    }
}

const close = document.querySelector('.close')
if(close) {
    console.log('THis')
    const stickyButtons = document.querySelector('.sticky_buttons')
    close.addEventListener('click', function () {
        stickyButtons.classList.add('hide')
    })
}


/* Send comment */

function sendComment() {
    let parentIdComment = 0
    const parentLinkComment = document.querySelectorAll('.parent_link_comment')
    if(parentLinkComment) {
        parentLinkComment.forEach(item => {
            item.addEventListener('click', function () {
                parentIdComment = this.getAttribute('data-parentid')
            })
        })
    }
    const submitComment = document.querySelector('.submit_ajax_comment')
    if(submitComment) {
        submitComment.addEventListener('click', function () {
            const commentFormName = document.querySelector('.comment_form_name')
            const commentFormEmail = document.querySelector('.comment_form_email')
            const commentFormText = document.querySelector('.comment_form_text')
            const sendResult = document.querySelector('.error')
            const postId = submitComment.getAttribute('data-postid')
            const API_URL = '/wp-content/themes/casino/components/review_2/ajax.php'
            const error = []
            const DAL = {
                sendComment(){
                    const name = commentFormName.value
                    const email = commentFormEmail.value
                    const text = commentFormText.value
                    return fetch(API_URL, {
                            method: 'POST',
                            body: JSON.stringify({name,
                                email,
                                text,
                                parentIdComment,
                                postId
                            })
                        }
                    )
                        .then(response => response.json())
                        .then( data => data )
                }
            }

            if(commentFormName.value === '') error.push('Ошибка заполнения формы')
            if(commentFormEmail.value === '' && error.length === 0) error.push('Ошибка заполнения формы')
            if(!commentFormEmail.value.includes('@') && error.length === 0) error.push('Ошибка заполнения формы')
            if(commentFormText.value === '' && error.length === 0) error.push('Ошибка заполнения формы')

            if(error.length === 0) {
                (async () => {
                    const data = await DAL.sendComment()
                    if(data.result === true) sendResult.innerHTML = 'Комментарий отправлен на модерацию'
                })();
            }
            else sendResult.innerHTML = 'Ошибка заполнения формы'
        })
    }
}
sendComment()

/* Send comment end */