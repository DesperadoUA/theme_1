<div class="main-banner js-slider-banner">
    <?php
        foreach ($sliders as $slide) {
            echo "<div class='slide'>
                    <div class='main-banner__txt-holder'>
                        <span class='main-banner__ttl'>{$slide['slider_text_1']}</span>
                        <span class='main-banner__txt'>{$slide['slider_text_2']}</span>
                        <a href='{$slide['slider_link']}' 
                            class='main-banner__cta btn-block btn-primary' 
                            style='color: {$slide['slider_button_color']}'>
                            <span>{$slide['slider_button_text']}</span>
                        </a>
                    </div>
                    <a href='{$slide['slider_link']}'>
                        <img src='{$slide['slider_img']}?v=1' alt='' >
                    </a>
                </div>";
        }
    ?>
</div>
