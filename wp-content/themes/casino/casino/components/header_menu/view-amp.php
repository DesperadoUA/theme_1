<button class="hamburger navbar__btn" on='tap:sidebar1.toggle'>
    <span class="bar"></span>
</button>
<amp-sidebar id="sidebar1" layout="nodisplay" side="right">
    <ul class="nav_menu">
        <?php
        foreach ($data as $item) {
            echo "<li><a href='{$item['url']}".PREFIX_AMP."'>{$item['menu_title']}</a></li>";
        }
        ?>
    </ul>
</amp-sidebar>