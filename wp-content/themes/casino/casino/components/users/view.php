<div class="winner">
        <span class="winner__ttl">сейчас выигрывают</span>
        <a href="<?= $data['link']; ?>" class="user_wrapper">
        <div class="winner__block">
            <div class="winner__ava">
                <img
                        src="<?= $data['src']; ?>" alt=""></div>
            <div class="winner__player">
                <span class="winner__name">
                    <?= $data['name']; ?>
                </span>
                <span class="winner-prize">
                    <?= $data['win_value']; ?> <span class="winner__currency">₽</span>
                </span>
            </div>
        </div>
        </a>
</div>