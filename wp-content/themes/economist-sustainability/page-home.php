<?php
// Template Name: Home
?>
<?php
get_header();
?>
<main>
    <?php
    if (have_rows('home_page')):
        while (have_rows('home_page')):
            the_row();

            switch (get_row_layout()) {
                case 'banner_section':
                    // Banner Section
                    get_template_part('template-parts/section', 'banner');
                    break;

                case 'participent_section':
                    // Participant Section
                    get_template_part('template-parts/section', 'participant');
                    break;

                case 'featured_speakers_section':
                    get_template_part('template-parts/section', 'speaker');
                    break;

                case 'topics_section':
                    get_template_part('template-parts/section', 'topics');
                    break;

                case 'event_section':
                    get_template_part('template-parts/section', 'event');
                    break;

                case 'why_attend_section':
                    get_template_part('template-parts/section', 'why-attend');
                    break;

                case 'attendeece_section':
                    get_template_part('template-parts/section', 'attendeece');
                    break;

                case 'interest_section':
                    get_template_part('template-parts/section', 'interest');
                    break;
            }
            ?>
        <?php endwhile ?>
    <?php endif ?>
</main>

<?php
get_footer();
?>