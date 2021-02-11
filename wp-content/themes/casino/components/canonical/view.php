<?php
    $link = '';
    if(IS_AMP) $link = get_site_url().str_replace('/'.PREFIX_AMP, '', URL);
    else $link = get_site_url().URL.'amp/';

    if(IS_AMP) echo "<link rel='canonical' href='{$link}'>";
    else echo '<link rel="amphtml" href="'.$link.'">';
