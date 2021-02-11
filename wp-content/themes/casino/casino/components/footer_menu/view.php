<nav class="navbar">
    <ul class="footer_navbar__list">
        <?php
           foreach ($data as $item) {
              echo "<li><a href='{$item['url']}'>{$item['menu_title']}</a></li>";
           }
          ?>
    </ul>
</nav>