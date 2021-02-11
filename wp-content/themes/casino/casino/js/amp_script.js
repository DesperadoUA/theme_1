const main = document.querySelector('.main-content')
let activate = false
main.addEventListener('click', function () {
    if(activate === false) {
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
        activate = true
    }
})
const close = document.querySelector('.close')
if(close) {
    const stickyButtons = document.querySelector('.sticky_buttons')
    close.addEventListener('click', function () {
        stickyButtons.classList.add('hide')
    })
}