<?php
$speakers_section_heading = get_sub_field('speakers_section_heading');
$available_speakers = get_sub_field('available_speakers');
$speakers_list = get_sub_field('speakers_list');
?>
<!-- featured speakers section starts here -->
<section class="featured-speakers-section">
    <div class="wrapper">
        <?php if ($speakers_section_heading) { ?>
            <h3 class="section-heading">
                <?php echo $speakers_section_heading ?>
            </h3>
        <?php } ?>
        <?php if ($available_speakers): ?>
            <ul class="featured-speaker-list">
                <?php foreach ($available_speakers as $speaker_post):
                    $speaker_thumbnail = get_field('speaker_image', $speaker_post->ID);
                    $title = get_the_title($speaker_post->ID);
                    $spaker_company_logo = get_field('speaker_company_image', $speaker_post->ID);
                    $speakers_info = get_field('speaker_information', $speaker_post->ID);
                    ?>
                    <li>
                        <div class="speakers-profile">
                            <?php if ($speaker_thumbnail) { ?>
                                <figure class="speakers-image">
                                    <img src="<?php echo $speaker_thumbnail['url'] ?>" alt="">
                                </figure>
                            <?php } ?>
                            <?php if ($spaker_company_logo) { ?>
                                <figure class="speakers-company-logo">
                                    <img src="<?php echo $spaker_company_logo['url'] ?>" alt="">
                                </figure>
                            <?php } ?>
                        </div>
                        <?php if ($title) { ?>
                            <h4>
                                <a href="<?php echo $speaker_post->guid ?>" class="speakers-name-head"
                                    title="<?php echo $title; ?>">
                                    <?php echo $title; ?>
                                </a>
                            </h4>
                        <?php } ?>
                        <?php if ($speakers_info) { ?>
                            <p class="speakers-info-para">
                                <?php echo $speakers_info ?>
                            </p>
                        <?php } ?>
                    </li>
                    <?php
                endforeach;
                ?>
            </ul>
        <?php endif; ?>
        <?php if ($speakers_list) { ?>
            <a href="<?php echo $speakers_list['url'] ?>">
                <?php echo $speakers_list['title'] ?>
            </a>
        <?php } ?>
    </div>
</section>
<!-- featured speakers section ends here -->