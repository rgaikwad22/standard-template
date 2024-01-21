<?php
$content_section_heading = get_sub_field('content_section_heading');
$content_section_para = get_sub_field('content_section_para');
$form_link = get_sub_field('form_link');
?>
<!-- content section starts here -->
<section class="content-section">
    <div class="wrapper">
        <?php if ($content_section_heading) { ?>
            <h3 class="section-heading attendeece-heading">
                <?php echo $content_section_heading; ?>
            </h3>
        <?php } ?>
        <?php if ($content_section_para) { ?>
            <div class="section-para">
                <?php echo $content_section_para; ?>
            </div>
        <?php } ?>
        <?php if ($form_link) { ?>
            <div class="section-para">
                <a href="<?php echo $form_link['url']; ?>" title="<?php echo $form_link['title']; ?>">
                    <?php echo $form_link['title']; ?>
                </a>
            </div>
        <?php } ?>
    </div>
</section>
<!-- content section ends here -->