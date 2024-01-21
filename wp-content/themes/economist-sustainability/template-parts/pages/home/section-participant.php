<?php
$participents_tabs = get_sub_field('participents_tabs');
?>
<!-- Participants section starts here -->
<section class="participants-section">
    <div class="wrapper">
        <?php if (have_rows('participents_tabs')): ?>
            <ul class="participants-tab-list">
                <?php while (have_rows('participents_tabs')):
                    the_row();
                    $city_icon = get_sub_field('city_icon');
                    $london_attendees = get_sub_field('london_attendees');
                    $participants_number = get_sub_field('participants_number');
                    $special_character = get_sub_field('special_character');
                    ?>
                    <li>
                        <figure class="attenees-tab-icon">
                            <img src="<?php echo $city_icon['url'] ?>" alt="">
                        </figure>
                        <span class="tab-head">
                            <?php echo $london_attendees; ?>
                        </span>
                        <span class="tab-particepents-number">
                            <?php echo $participants_number . $special_character; ?>
                        </span>
                    </li>
                    <?php
                endwhile; ?>
            </ul>
            <?php
        endif;
        $participent_section_heading = get_sub_field('participent_section_heading');
        $participent_section_para = get_sub_field('participent_section_para');
        $go_to_next_section = get_sub_field('go_to_next_section');
        $participent_section_sub_heading = get_sub_field('participent_section_sub_heading');
        $register_btn = get_sub_field('register_btn');
        $participent_descriptive_image = get_sub_field('participent_descriptive_image');
        ?>
        <div class="participents-container">
            <div class="particepents-details">
                <h3 class="section-heading">
                    <?php echo $participent_section_heading ?>
                </h3>
                <p class="participents-section-para">
                    <?php echo $participent_section_para ?>
                </p>
                <a href="<?php echo $go_to_next_section['url'] ?>">
                    <?php echo $go_to_next_section['title'] ?>
                </a>
                <h4>
                    <?php echo $participent_section_sub_heading; ?>
                </h4>
                <a href="<?php echo $register_btn['url'] ?>">
                    <?php echo $register_btn['title'] ?>
                </a>
            </div>
            <figure>
                <img src="<?php echo $participent_descriptive_image['url'] ?>" alt="">
            </figure>
        </div>
    </div>
</section>
<!-- Participants section ends here -->