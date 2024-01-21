<?php
$attendeece = get_sub_field('attendeece');
?>
<!-- attendeece section starts here -->
<section class="attendeece-section">
    <div class="wrapper">
        <h3 class="section-heading attendeece-heading">
            <?php echo $attendeece; ?>
        </h3>
        <?php if (have_rows('attendeece_comments')): ?>
            <ul class="attendeece-list">
                <?php while (have_rows('attendeece_comments')):
                    the_row();
                    $comment_head = get_sub_field('comment_head');
                    $comment_para = get_sub_field('comment_para');
                    ?>
                    <li>
                        <h5 class="comment-head">
                            <?php echo $comment_head ?>
                        </h5>
                        <p class="comment-para">
                            <?php echo $comment_para ?>
                        </p>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
<!-- attendeece section ends here -->