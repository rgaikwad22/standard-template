<?php
$interest_section_heading = get_sub_field('interest_section_heading');
$interest_sub_head = get_sub_field('interest_sub_head');
$contact_email = get_sub_field('contact_email');
$register_speaker = get_sub_field('register_speaker');
$speaker_landing_image = get_sub_field('speaker_landing_image');
?>
<!-- interest section starts here -->
<section class="interest-section">
    <div class="wrapper">
        <div class="become-speaker">
            <h3 class="section-heading attendeece-heading">
                <?php echo $interest_section_heading; ?>
            </h3>
            <p class="interest-section-para">
                <?php
                echo $interest_sub_head . " " . $contact_email;
                ?>
            </p>
            <a href="<?php echo $register_speaker['url'] ?>">
                <?php echo $register_speaker['title'] ?>
            </a>
        </div>
        <figure>
            <img src="<?php echo $speaker_landing_image['url'] ?>" alt="">
        </figure>
    </div>
</section>
<!-- interest section ends here -->