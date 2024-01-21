<?php
// Template Name: Speaker List
?>

<?php
get_header();
?>
<section class="about-banner-section">
    <div class="wrapper">
        <?php
        $speaker_banner_image = get_field('speaker_banner_image');
        if (!empty($speaker_banner_image)) { ?>
            <figure class="banner">
                <img src="<?php echo $speaker_banner_image['url'] ?>"
                    alt="<?php echo esc_attr($speaker_banner_image['alt']); ?>">
            </figure>
        <?php } ?>
        <h2>
            <?php the_title() ?>
        </h2>
        <?php
        $speaker_description = get_field('speaker_description');
        if ($speaker_description) { ?>
            <p>
                <?php echo $speaker_description; ?>
            </p>
        <?php }
        ?>
    </div>
</section>

<?php
$speaker_section_heading = get_field('speaker_section_heading');
$speakers = get_field('speakers');
?>
<section class="featured-speakers-section">
    <div class="wrapper">
        <h3 class="section-heading">
            <?php echo $speaker_section_heading ?>
        </h3>
        <?php if ($speakers): ?>
            <ul class="featured-speaker-list">
                <?php foreach ($speakers as $speaker_post):
                    $speaker_thumbnail = get_field('speaker_image', $speaker_post->ID);
                    $title = get_the_title($speaker_post->ID);
                    $spaker_company_logo = get_field('speaker_company_image', $speaker_post->ID);
                    $speakers_info = get_field('speaker_information', $speaker_post->ID);
                    ?>
                    <li>
                        <div class="speakers-profile">
                            <?php if ($speaker_thumbnail) { ?>
                                <figure class="speakers-image">
                                    <img src="<?php echo $speaker_thumbnail['url'] ?>"
                                        alt="<?php echo $speaker_thumbnail['alt'] ?>">
                                </figure>
                            <?php } ?>
                            <?php if ($spaker_company_logo) { ?>
                                <figure class="speakers-company-logo">
                                    <img src="<?php echo $spaker_company_logo['url'] ?>"
                                        alt="<?php echo $spaker_company_logo['alt'] ?>">
                                </figure>
                            <?php } ?>

                        </div>
                        <?php if ($speaker_post) { ?>
                            <h4>
                                <a href="<?php echo $speaker_post->guid ?>" class="topics-section-head">
                                    <?php echo $title; ?>
                                </a>
                            </h4>
                        <?php } ?>
                        <?php if ($speakers_info) { ?>
                            <p>
                                <?php echo $speakers_info ?>
                            </p>
                        <?php } ?>

                    </li>
                    <?php
                endforeach;
                ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
?>