<?php
$participents_tabs = get_sub_field('speakers_section_heading');
$speakers_description = get_sub_field('speakers_description');
$all_speakers_list = get_sub_field('all_speakers_list');
?>
<!-- featured speakers section starts here -->
<section class="featured-speakers-section">
    <div class="wrapper">
        <h3 class="section-heading">
            <?php echo $participents_tabs ?>
        </h3>
        <?php if ($speakers_description): ?>
            <ul class="featured-speaker-list">
                <?php foreach ($speakers_description as $speaker_post):
                    $speaker_thumbnail = get_field('speakers_profile_image', $speaker_post->ID);
                    $title = get_the_title($speaker_post->ID);
                    $spaker_company_logo = get_field('spaker_company_logo', $speaker_post->ID);
                    $speakers_info = get_field('speakers_info', $speaker_post->ID);
                    ?>
                    <li>
                        <div class="speakers-profile">
                            <figure class="speakers-image">
                                <img src="<?php echo $speaker_thumbnail['url'] ?>" alt="">
                            </figure>
                            <figure class="speakers-company-logo">
                                <img src="<?php echo $spaker_company_logo['url'] ?>" alt="">
                            </figure>
                        </div>
                        <a href="<?php echo $speaker_post->guid ?>" class="topics-section-head">
                            <?php echo $title; ?>
                        </a>
                        <p class="speakers-info-para">
                            <?php echo $speakers_info ?>
                        </p>
                    </li>
                    <?php
                endforeach;
                ?>
            </ul>
        <?php endif; ?>
        <a href="<?php echo $all_speakers_list['url'] ?>">
            <?php echo $all_speakers_list['title'] ?>
        </a>
    </div>
</section>
<!-- featured speakers section ends here -->