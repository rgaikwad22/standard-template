<?php
$event_questions_heading = get_sub_field('event_questions_heading');
$show_all = get_sub_field('show_all');
?>
<!-- event-questions section starts here -->
<section class="event-questions-section">
    <div class="wrapper">
        <?php if ($event_questions_heading) { ?>
            <h3 class="section-heading">
                <?php echo $event_questions_heading; ?>
            </h3>
        <?php } ?>
        <?php if ($show_all) { ?>
            <div class="show-all-questions">
                <a href="<?php echo $show_all['url'] ?>" title="<?php echo $show_all['title'] ?>">
                    <?php echo $show_all['title'] ?>
                </a>
            </div>
        <?php } ?>
        <?php if (have_rows('question_type')) { ?>
            <ul class="questions-type-list">
                <?php while (have_rows('question_type')) {
                    the_row();
                    $question_type_heading = get_sub_field('question_type_heading');
                    $actual_question_answer = get_sub_field('actual_question_answer');
                    ?>
                    <li>
                        <?php if ($question_type_heading) { ?>
                            <h5 class="question-type-headong">
                                <?php echo $question_type_heading; ?>
                            </h5>
                        <?php } ?>
                        <?php if ($actual_question_answer) { ?>
                            <p class="questions-answers-para">
                                <?php echo $actual_question_answer; ?>
                            </p>
                        <?php } ?>

                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
</section>
<!-- event-questions section ends here -->