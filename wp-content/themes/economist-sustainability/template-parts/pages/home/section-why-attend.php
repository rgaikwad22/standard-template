<?php
$attend_section_heading = get_sub_field('attend_section_heading');
?>
<!-- why attend section starts here -->
<section class="why-attend-section">
    <div class="wrapper">
        <h3 class="section-heading">
            <?php echo $attend_section_heading ?>
        </h3>
        <?php if (have_rows('attend_reason_list')): ?>
            <ul>
                <?php while (have_rows('attend_reason_list')):
                    the_row();
                    $attend_post_image = get_sub_field('attend_post_image');
                    $attend_post_heading = get_sub_field('attend_post_heading');
                    $attend_post_para = get_sub_field('attend_post_para');
                    $learn_more = get_sub_field('learn_more');
                    ?>
                    <li>
                        <figure>
                            <img src="<?php echo $attend_post_image['url'] ?>" alt="">
                        </figure>
                        <h4 class="topics-section-head">
                            <?php echo $attend_post_heading ?>
                        </h4>
                        <p class="attend-post-para">
                            <?php echo $attend_post_para ?>
                        </p>
                        <a href="<?php echo $learn_more['url'] ?>">
                            <?php echo $learn_more['title'] ?>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
<!-- why attend section ends here -->