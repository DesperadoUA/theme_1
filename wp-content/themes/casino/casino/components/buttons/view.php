<div class="header-top">
    <?php
        if(!empty($data['button_register_header'])) {
            echo "<a href='{$data['button_register_link']}' 
                     class='btn-primary btn-reg'>
                     <span>{$data['button_register_header']}</span>
                   </a>";
        }

        if(!empty($data['button_enter_header'])) {
            echo "<a href='{$data['button_enter_link']}' 
                     class='btn-primary btn_header_enter'>
                     <span>{$data['button_enter_header']}</span>
                  </a>";
        }
    ?>
  <span class="header-top__or">или</span>
  <ul class="social-links">
      <?php
        foreach($data['social'] as $key => $value) {
          if(!$value) {
            echo "<li id='menu-item-15' 
                    class='{$key} menu-item menu-item-type-custom menu-item-object-custom menu-item-15'>
                    <a href='{$data['social_link']}'></a>
                  </li>";
          }
        }
        ?>
  </ul>
</div>
