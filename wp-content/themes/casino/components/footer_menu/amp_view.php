<nav class="navbar">
    <ul class="footer_navbar__list">
        <?php
           foreach ($data as $item) {
              echo "<li><a href='{$item['url']}".PREFIX_AMP."'>{$item['menu_title']}</a></li>";
           }
          ?>
    </ul>
</nav>