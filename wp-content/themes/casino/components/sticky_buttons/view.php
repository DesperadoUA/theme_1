<section class="sticky_buttons">
    <div class="close">X</div>
    <div class="sticky_buttons_container">
        <?php
            if(!$sticky_buttons_hide_1) {
                echo "<a href='{$sticky_buttons_link_1}' class='sticky_buttons_first'>
                        {$sticky_buttons_text_1}
                    </a>";
            }

        if(!$sticky_buttons_hide_2) {
            echo "<a href='{$sticky_buttons_link_2}' class='sticky_buttons_second'>
                        {$sticky_buttons_text_2}
                    </a>";
        }
        ?>
    </div>
</section>