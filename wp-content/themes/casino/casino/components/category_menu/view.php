<div class="games-filter">
    <?php
    foreach ($data as $item) {
        echo "<a href='{$item['url']}' 
                 class='games-filter__item'>
                 {$item['menu_title']}
              </a>";
    }
    ?>
</div>