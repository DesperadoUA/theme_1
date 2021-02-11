<title><?= wp_title( $data['title']); ?></title>
<meta name="description"  content="<?= $data['description']; ?>" />
<script async src='https://cdn.ampproject.org/v0.js'></script>
<script async custom-element='amp-sidebar' src='https://cdn.ampproject.org/v0/amp-sidebar-0.1.js'></script>
<script async custom-element="amp-script" src="https://cdn.ampproject.org/v0/amp-script-0.1.js"></script>
<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
<?php
include THEME_ROOT.'/components/amp_style/index.php';
?>