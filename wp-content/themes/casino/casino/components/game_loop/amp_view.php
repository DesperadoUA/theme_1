<div class="games-grid">
    <?php
        foreach ($data as $item) {
            echo '<div class="games-item">
                    <div class="games-item__img">
                        <amp-img width="150px" height="120" 
                              src="'.$item['src'].'" 
                              class="attachment-post-thumbnail size-post-thumbnail wp-post-image" 
                              alt="'.$item['post_title'].'"
                              ></amp-img>
                        <div class="games-item__cta">
                            <span class="games-item__cta-ttl">
                            <a href="'.$item['ref'].'">Играть</a></span>
                            <a href="'.$item['permalink'].PREFIX_AMP.'" class="btn-primary"><span>Демо</span></a>
                        </div>
                    </div>
            
                    <a href="'.$item['permalink'].PREFIX_AMP.'" class="games-item__ttl">'.$item['post_title'].'</a>
                </div>';
        }
    ?>
</div>
