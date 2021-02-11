<div class="winner">
    <span class="winner__ttl">сейчас выигрывают</span>
    <a href="<?= $data['link']; ?>" class="user_wrapper">
        <div class="winner__block">
            <div class="winner__ava">
                <amp-img
                    src="<?= $data['src']; ?>"
                    width="62px"
                    height="45px"
                    class="custom-logo"
                    alt="vulkan">
                </amp-img>
            </div>
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