<?php get_header(); ?>
    <div class="main-container container">
        <?php include 'components/slider/dal.php'; ?>
        <main class="main-wrapper">
            <div class="top-cta">
                <?php  include 'components/jackpot/dal.php'; ?>
                <?php  include 'components/users/dal.php'; ?>
                <?php  include 'components/registration_after_slider/dal.php'; ?>
            </div>
            <?php include 'components/category_menu/dal.php'; ?>
            <div class="main">
                <div class="main-content">
                    <div class="intro">
                        <?php  include 'components/h1/dal.php'; ?>
                        <?php  include 'components/content/dal.php'; ?>
                    </div>
                    <?php  include 'components/game_loop/dal.php'; ?>
                    <div class="main__txt-content">
                        <?php  include 'components/content_2/dal.php'; ?>
                        <?php include 'components/review_2/dal.php'; ?>
                    </div>
                </div>
                <?php include 'sidebar.php'; ?>
            </div>
            <footer class="footer">
                <?php  include 'components/payments/dal.php'; ?>
                <?php  include 'components/footer_text/dal.php'; ?>
                <?php  include 'components/footer_menu/dal.php'; ?>
            </footer>
        </main>
    </div>
<?php get_footer(); ?>

