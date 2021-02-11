<div class="breadcrumbs">
    <ul itemscope itemtype="http://schema.org/BreadcrumbList">
        <li  itemprop="itemListElement" itemscope
             itemtype="http://schema.org/ListItem" class="breadcrumbs_item">
           <a
                itemprop='item'
                href='<?= $data['main_page_link']; ?>'>
            <span itemprop='name'>Главная</span>
            <meta itemprop='position' content='1' />
            </a>
        </li>
        <li  itemprop="itemListElement" itemscope
             itemtype="http://schema.org/ListItem" class="breadcrumbs_item">
                <span itemprop='name'><?= $data['title']; ?></span>
                <meta itemprop='position' content='2' />
        </li>
    </ul>

</div>