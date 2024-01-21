<?php
$connections_section_heading = get_sub_field('connections_section_heading');
$connection_section_image = get_sub_field('connection_section_image');
$connection_section_para = get_sub_field('connection_section_para');
$download_media_pack = get_sub_field('download_media_pack');
$theme = get_sub_field('theme');
var_dump($theme);
?>
<!-- connections section starts here -->
<section class="connections-section <?php echo $theme ? 'dark-bg' : 'light-bg'; ?>">
    <div class="wrapper">
        <?php if ($connections_section_heading) { ?>
            <h3 class="section-heading ">
                <?php echo $connections_section_heading; ?>
            </h3>
        <?php } ?>
        <div class="right-container">
            <?php if ($connection_section_image) { ?>
                <figure>
                    <img src="<?php echo $connection_section_image['url'] ?>" alt="<?php echo $connection_section_image['alt'] ?>">
                </figure>
            <?php } ?>
            <?php if ($connection_section_para) { ?>
                <div class="section-para <?php echo $theme == 1 ? 'section-para-light' : 'section-para-dark' ?>">
                    <?php echo $connection_section_para ?>
                </div>
            <?php } ?>
            <?php if ($download_media_pack) { ?>
                <div class="Medea-video">
                    <a href="<?php echo $download_media_pack['url'] ?>" title="<?php echo $download_media_pack['title'] ?>" class="<?php echo $theme == 1 ? 'light-btn' : 'dark-btn'; ?>"><?php echo $download_media_pack['title'] ?></a>
                </div>
            <?php } ?>
        </div>

    </div>
</section>
<!-- connections section ends here -->