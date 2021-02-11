<div class="payments">
    <?php
        foreach ($data['payments'] as $payment) {
            echo "<div class='payments__items'>
                    <img src='{$payment['src']}' 
                         alt='{$payment['alt']}'
                         title='{$payment['title']}'
                         ></div>";
        }
    ?>
</div>