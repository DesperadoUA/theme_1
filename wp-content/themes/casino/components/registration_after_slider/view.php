<div class="registration">
    <a href="<?= $data['button_register_after_banner_link']; ?>"
        class="btn-primary btn-block btn_register_after_slider">
        <span
            <?php
            if(!empty($data['button_register_after_banner_color_text'])) echo " style='color: {$data['button_register_after_banner_color_text']}'";
            ?>>
            <?= $data['button_register_after_banner_text']; ?>
        </span>
    </a>
</div>
