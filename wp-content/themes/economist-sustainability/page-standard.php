<?php
// Template Name: Standard
?>
<?php
get_header();
?>

<main>
    <?php
    get_template_part('template-parts/pages/standard/content', 'banner');
    ?>
    <?php
    if (have_rows('main_content')):
        while (have_rows('main_content')):
            the_row();

            switch (get_row_layout()) {
                case 'content_section':
                    // Banner Section
                    get_template_part('template-parts/pages/standard/content', 'content');
                    break;

                case 'speakers_section':
                    // Participant Section
                    get_template_part('template-parts/pages/standard/content', 'speaker');
                    break;

                case 'picture_section':
                    get_template_part('template-parts/pages/standard/content', 'picture');
                    break;

                case 'media_section':
                    get_template_part('template-parts/pages/standard/content', 'media');
                    break;

                case 'connections_section':
                    get_template_part('template-parts/pages/standard/content', 'connections');
                    break;

                case 'map':
                    get_template_part('template-parts/pages/standard/content', 'map');
                    break;

                case 'event_questions_section':
                    get_template_part('template-parts/pages/standard/content', 'event-questions');
                    break;

                case 'learn_more_section':
                    get_template_part('template-parts/pages/standard/content', 'learn-more');
                    break;
            }
            ?>
        <?php endwhile ?>
    <?php endif ?>
</main>

<?php
get_footer();
?>