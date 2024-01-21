<?php
$banner_section = get_field('banner_section');
if ($banner_section) { ?>
    <!-- banner section starts here -->
    <section class="standard-banner-section">
        <div class="wrapper">
            <?php if ($banner_section['banner_heading']) { ?>
                <h2 class="section-heading">
                    <?php echo $banner_section['banner_heading'] ?>
                </h2>
            <?php } ?>
            <?php if ($banner_section['banner_paragraph']) { ?>
                <p class="section-para">
                    <?php echo $banner_section['banner_paragraph'] ?>
                </p>
            <?php } ?>
        </div>
    </section>
    <!-- banner section ends here -->
<?php } ?>