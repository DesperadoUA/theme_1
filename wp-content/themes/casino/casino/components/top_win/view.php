<div class="side-block">
    <div class="side-block__heading">
        <h4 class="side-block__ttl"><?= $data['title']; ?></h4>
    </div>
    <ol class="win-list">
        <?php
            foreach ($data['top_players'] as $player) {
                echo "<li>
                        <span class='win-list__name'>{$player['top_player_name']}</span>
                        <span class='win-list__prize'>{$player['top_player_win']}</span>
                     </li>";
            }
        ?>
    </ol>
    <a href="<?= $data['link']; ?>" class="side-block__cta top_win btn-primary">
        <span>
            <?= $data['button_text']; ?>
        </span>
    </a>
</div>
