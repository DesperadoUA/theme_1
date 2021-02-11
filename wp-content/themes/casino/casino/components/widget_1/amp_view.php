<?php
echo "<div class='side-block side-block--banner'>
          <div class='side-block__heading'>
              <h4 class='side-block__ttl'>{$data['title']}</h4>
          </div>
          <a href='{$data['link_button']}'>
            <amp-img 
                src='{$data['src']}' 
                alt='' 
                width='325' 
                height='307' 
                class='banner_img'>
            </amp-img>
          </a>
          <a href='{$data['link_button']}' 
             class='side-block__cta widget_1 btn-primary'>
             <span>
               {$data['text_button']}
             </span>
          </a>
      </div>";
