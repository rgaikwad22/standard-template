<?php
get_header();
?>
<main>
    <section class="search-section">
        <div class="wrapper">
            <form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
                <label for="s" class="screen-reader-text">
                    <?php _e('Search for:', 'economist-sustainability'); ?>
                </label>
                <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s"
                    placeholder="<?php esc_attr_e('Search...', 'economist-sustainability'); ?>" />
                <button type="submit" id="searchsubmit">
                    <?php esc_attr_e('Search', 'economist-sustainability'); ?>
                </button>
            </form>

            <div class="search-results">
                <?php
                $search_query = get_search_query();
                $args = array(
                    's' => $search_query,
                    // 'meta_query' => array(
                    //     'relation' => 'OR',
                    //     array(
                    //         'key' => 'banner_paragraph', 
                    //         'value' => $search_query,
                    //         'compare' => 'LIKE',
                    //     )
                    // )
                );

                $search_query = new WP_Query($args);

                if ($search_query->have_posts()) {
                    while ($search_query->have_posts()) {
                        $search_query->the_post(); ?>
                        <div <?php post_class(); ?>>
                            <h2 class="entry-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <?php the_content(); ?>
                            <div class="entry-summary">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    <?php }
                } else {
                    echo '<p>No results found.</p>';
                }

                // Restore original post data
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>