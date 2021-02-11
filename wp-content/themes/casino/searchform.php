<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>search/">
    <input type="hidden" value="post" name="post_type">

    <label class="search-form__label">
        <span class="sr-only"><?php echo _x('Search for:', 'label'); ?> '</span>
        <svg class="icon icon-search"><use xlink:href="#icon-search"></use></svg>
        <input type="search" class="search-form__control form-control" placeholder="Поиск игры"
           value="<?php echo get_search_query(); ?>" id="s" name="s" required>
    </label>
</form>
