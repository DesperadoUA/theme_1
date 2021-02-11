<div class="games-grid">
    <?php
        foreach ($data as $item) {
            echo "<div class='games-item'>
                    <div class='games-item__img'>
                        <img width='223' height='162' 
                              src='{$item['src']}' 
                              class='attachment-post-thumbnail size-post-thumbnail wp-post-image' 
                              alt='{$item['post_title']}' 
                              loading='lazy'
                              >
                        <div class='games-item__cta'>
                            <span class='games-item__cta-ttl'>
                            <a href='{$item['ref']}'>Играть</a></span>
                            <a href='{$item['permalink']}' class='btn-primary'><span>Демо</span></a>
                        </div>
                    </div>
            
                    <a href='{$item['permalink']}' class='games-item__ttl'>{$item['post_title']}</a>
                </div>";
        }
    ?>
</div>
