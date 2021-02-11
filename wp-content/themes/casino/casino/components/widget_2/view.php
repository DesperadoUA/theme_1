<?php
echo "<div class='side-block side-block--banner'>
          <div class='side-block__heading'>
              <h4 class='side-block__ttl'>{$data['title']}</h4>
          </div>
          <a href='{$data['link_button']}'>
            <img src='{$data['src']}' alt='' class='banner_img'>
          </a>
          <a href='{$data['link_button']}' 
             class='side-block__cta widget_2 btn-primary'>
              <span>
               {$data['text_button']}
              </span>
          </a>
      </div>";