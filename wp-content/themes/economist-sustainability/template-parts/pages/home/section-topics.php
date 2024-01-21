<?php
$topics_section_heading = get_sub_field('topics_section_heading');
?>
<!-- topics section starts here -->
<section class="topics-section">
    <div class="wrapper">
        <h3 class="section-heading">
            <?php echo $topics_section_heading ?>
        </h3>
        <?php if (have_rows('topics_list')): ?>
            <ul class="topics-tab-list">
                <?php while (have_rows('topics_list')):
                    the_row();
                    $topic_post_image = get_sub_field('topic_post_image');
                    $topic_post_heading = get_sub_field('topic_post_heading');
                    $learn_more = get_sub_field('learn_more');
                    ?>
                    <li>
                        <figure>
                            <img src="<?php echo $topic_post_image['url'] ?>" alt="">
                        </figure>
                        <h4 class="topics-section-head">
                            <?php echo $topic_post_heading ?>
                        </h4>
                        <a href="<?php echo $learn_more['url'] ?>">
                            <?php echo $learn_more['title'] ?>
                        </a>
                    </li>
                    <?php
                endwhile;
                ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
<!-- topics section ends here -->