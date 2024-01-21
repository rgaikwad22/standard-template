<?php
// Template Name: About
?>
<?php
get_header();
?>
<main>
    <section class="about-banner-section">
        <div class="wrapper">
            <?php
            $image = get_field('about_banner');
            if (!empty($image)) { ?>
                <figure class="banner">
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                </figure>
            <?php } ?>
            <h1>
                <?php the_title() ?>
            </h1>
            <?php
            $confirm = get_field('descrption');
            if ($confirm) { ?>
                <p>
                    <?php echo $confirm; ?>
                </p>
            <?php }
            $about_image = get_field('about_image');
            if (!empty($about_image)) { ?>
                <figure class="banner-slider">
                    <img src="<?php echo $about_image['url'] ?>" alt="<?php echo esc_attr($about_image['alt']); ?>">
                </figure>
            <?php } ?>
        </div>
    </section>

    <section class="second-layout">
        <div class="wrapper">
            <?php
            $switch_content = get_field('switch_content');
            if (have_rows('second_layout')):
                while (have_rows('second_layout')):
                    the_row();

                    $content = get_sub_field('content');
                    $content_image = get_sub_field('content_image');
                    ?>
                    <div class="layout-container <?php echo $switch_content == 1 ? 'flex-right' : 'flex-left' ?>">
                        <P class="about-layout-para">
                            <?php echo $content; ?>
                        </P>
                        <figure class="about-layout-fig">
                            <img src="<?php echo $content_image['url'] ?>" alt="<?php echo $content_image['alt'] ?>">
                        </figure>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </section>
</main>

<?php
get_footer();
?>