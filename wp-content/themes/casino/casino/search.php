<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Energy_Focus
 */

get_header(); ?>

    <section class="search-page">
        <div class="container">
          <div class="search_result">
            <h1 class="h2 product-title"><?php printf(esc_html__('Search Results for: %s', 'energyfocus'), '<strong>' . get_search_query() . '</strong>'); ?></h1>
              <?php include 'components/game_loop/dal_search.php'; ?>
            </div>
        </div>
    </section><!-- #primary -->

<?php
get_footer();
