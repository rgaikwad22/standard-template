<?php
$learn_section_heading = get_sub_field('learn_section_heading');
$learn_section_para = get_sub_field('learn_section_para');
$download_link = get_sub_field('download_link');
$learn_section_image = get_sub_field('learn_section_image');
?>
<!-- learn-more section starts here -->
<section class="learn-more-section">
    <div class="wrapper">
        <div class="left-container">
            <?php if ($learn_section_heading) { ?>
                <h3 class="section-heading">
                    <?php echo $learn_section_heading; ?>
                </h3>
            <?php } ?>
            <?php if ($learn_section_para) { ?>
                <div class="section-para <?php echo $theme == 1 ? 'section-para-light' : 'section-para-dark' ?>">
                    <?php echo $learn_section_para ?>
                </div>
            <?php } ?>
            <?php if ($download_link) { ?>
                <div class="download-link">
                    <a href="<?php echo $download_link['url'] ?>" title="<?php echo $download_link['title'] ?>"
                        class="light-btn">
                        <?php echo $download_link['title'] ?>
                    </a>
                </div>
            <?php } ?>
        </div>
        <?php if ($learn_section_image) { ?>
            <figure>
                <img src="<?php echo $learn_section_image['url'] ?>" alt="<?php echo $learn_section_image['alt'] ?>">
            </figure>
        <?php } ?>
    </div>
</section>
<!-- connections section ends here -->