<?php
$global_ref = carbon_get_theme_option( 'global_ref' );
if(empty($global_ref)) $global_ref = '/go/';
define(GLOBAL_REF, $global_ref);
?>
<!DOCTYPE html>
<html dir="ltr" <?php if(IS_AMP) echo 'amp'; ?> lang="ru">
<head>
    <?php include 'components/head_script/dal-top.php'; ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <?php
    if(!IS_AMP) wp_head();
    else include 'components/amp_meta/dal.php';
    if(!IS_AMP){
        echo "<style>";
        include 'css/main.css';
        include 'webpack_dist/bundle.css';
        echo "</style>";
    }
    ?>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> -->
    <?php
    include 'components/canonical/view.php';
    include 'components/custom_style/dal.php';
    include 'components/head_script/dal.php'
    ?>
</head>
<body>
<?php include get_template_directory() . '/icons.php'; ?>
<?php if(IS_AMP) include 'components/header_menu/dal.php'; ?>
<header class="header">
  <div class="header__container container--md">
      <?php include 'components/logo/dal.php'; ?>
    <div class="mobile-menu ">
        <?php include 'components/buttons/dal.php'; ?>
        <?php if(!IS_AMP) include 'components/header_menu/dal.php'; ?>
    </div>
      <?php
      if(!IS_AMP) {
          echo '<div class="navbar__btn js--menu-trigger" aria-expanded="false" aria-label="Menu Button" role="button">
                    <span class="bar"></span>
                  </div>';
      }
      ?>
  </div>
</header>
<?php
if(IS_AMP) {
    echo '<amp-script layout="container" src="'.get_template_directory_uri().'/js/amp_script.js'.'" >';
}
?>

