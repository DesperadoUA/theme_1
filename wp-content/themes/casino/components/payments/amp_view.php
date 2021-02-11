<div class="payments">
    <?php
        foreach ($data['payments'] as $payment) {
            echo "<div class='payments__items'>
                    <amp-img src='{$payment['src']}' 
                         alt='{$payment['alt']}'
                         title='{$payment['title']}'
                         width='{$payment['width']}'
                         height='{$payment['height']}'
                         ></amp-img>
                  </div>";
        }
    ?>
</div>