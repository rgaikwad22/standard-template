<?php
$event_section_heading = get_sub_field('event_section_heading');
?>
<!-- event section starts here -->
<section class="event-section">
    <div class="wrapper">
        <h3 class="section-heading">
            <?php echo $event_section_heading ?>
        </h3>
        <?php if (have_rows('event_detail')): ?>
            <ul class="events-list">
                <?php while (have_rows('event_detail')):
                    the_row();
                    $event_image = get_sub_field('event_image');
                    $event_date = get_sub_field('event_date');
                    $event_mode = get_sub_field('event_mode');
                    ?>
                    <li>
                        <figure>
                            <img src="<?php echo $event_image['url'] ?>" alt="">
                        </figure>
                        <span class="event-date">
                            <?php echo $event_date ?>
                        </span>
                        <span class="event-mode">
                            <?php echo $event_mode ?>
                        </span>
                    </li>
                <?php endwhile; ?>
            </ul>
            <ul>
                <?php while (have_rows('event_info')):
                    the_row();
                    $mode_of_event = get_sub_field('mode_of_event');
                    $event_address = get_sub_field('address');
                    $event_link = get_sub_field('event_link');
                    ?>
                    <li>
                        <span class="event-mode-info">
                            <?php echo $mode_of_event ?>
                        </span>
                        <address class="event-venue-address">
                            <?php echo $event_address ?>
                        </address>
                        <a href="<?php echo $event_link['url'] ?>">
                            <?php echo $event_link['title'] ?>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
<!-- event section ends here -->