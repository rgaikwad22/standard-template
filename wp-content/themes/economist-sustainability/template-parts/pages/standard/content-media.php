<?php
$media_section_heading = get_sub_field('media_section_heading');
$meda_select = get_sub_field('meda_select');
$add_video = get_sub_field('add_video');
$add_image = get_sub_field('add_image');
?>
<!-- content section starts here -->
<section class="content-section">
    <div class="wrapper">
        <?php if ($media_section_heading) { ?>
            <h3 class="section-heading attendeece-heading">
                <?php echo $media_section_heading; ?>
            </h3>
        <?php } ?>
        <?php if ($add_video) { ?>
            <div class="Medea-video">
                <video autoplay loop muted>
                    <source src="<?php echo $add_video['link'] ?>" type="<?php echo $add_video['type'] ?>/<?php echo $add_video['subtype'] ?>">
                    Your browser does not support the video.
                </video>
            </div>
        <?php } ?>
        <?php if ($add_image) { ?>
            <figure>
                <img src="<?php echo $add_image['url'] ?>" alt="<?php echo $add_image['alt'] ?>">
            </figure>
        <?php } ?>
    </div>
</section>
<!-- content section ends here -->