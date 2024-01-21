<?php
$sustainability_section_heading = get_sub_field('sustainability_section_heading');
?>
<!-- picture section starts here -->
<section class="picture-section">
    <div class="wrapper">
        <?php if ($sustainability_section_heading) { ?>
            <h3 class="section-heading">
                <?php echo $sustainability_section_heading; ?>
            </h3>
        <?php } ?>
        <?php if (have_rows('sustainability_event_pictures')) { ?>
            <ul class="questions-type-list">
                <?php while (have_rows('sustainability_event_pictures')) {
                    the_row();
                    $sustainability_images = get_sub_field('sustainability_images');
                    ?>
                    <?php if ($sustainability_images) { ?>
                        <li>
                            <img src="<?php echo $sustainability_images['url'] ?>"
                                alt="<?php echo $sustainability_images['url'] ?>">
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
</section>
<!-- picture section ends here -->