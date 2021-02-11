<div class="container form_container">
    <div class="form_title">Оставить отзыв</div>
    <div class="comment_form_ajax" id="comment_form_ajax">
        <div class="comment_form_info">
            <div class="comment_form_input_wrapper">
                <input id="author" name="author" type="text" value=""
                       class="comment_form_name input_name"
                       required="required"
                       autocomplete="off"
                       placeholder="Имя"
                       data-type="review"
                >
            </div>
            <div class="comment_form_input_wrapper">
                <input id="email" name="email" type="text" value=""
                       class="comment_form_email input_email"
                       required="required"
                       autocomplete="off"
                       placeholder="Email"
                       data-type="review"
                >
            </div>
        </div>
        <div class="comment_form_comment">
						<textarea
                            id="comment"
                            name="comment"
                            placeholder="Комментарий"
                            class="comment_form_text textarea_comment"
                            required="required"
                            data-type="review"
                        ></textarea>
        </div>
        <div class="form_submit">
            <input type="submit" name="submit" id="submit" class="submit_ajax_comment"
                   data-postid="<?= $settings['post_id']; ?>"
                   value="Отправить"
                   data-type="review"
            >
        </div>
        <div class="error" data-type="review"></div>
    </div>
</div>