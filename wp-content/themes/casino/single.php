<?php get_header(); ?>
    <div class="main-container container single">
        <main class="main-wrapper">
            <div class="main">
                <div class="main-content">
                    <div class="single-post">
                        <?php include 'components/breadcrumbs/dal.php'; ?>
                        <h1><?php the_title(); ?></h1>

                        <?php while( have_posts() ) : the_post();?>
                            <?php include 'components/banner-game/dal.php'; ?>
                            <?php include 'components/content/dal.php'; ?>
                        <?php endwhile; ?>
                    </div>
                </div>

                <?php include get_template_directory() . '/sidebar.php'; ?>
            </div>
            <footer class="footer">
                <?php include 'components/payments/dal.php'; ?>
                <?php include 'components/footer_text/dal.php'; ?>
            </footer>
        </main>
    </div>
<?php get_footer(); ?>