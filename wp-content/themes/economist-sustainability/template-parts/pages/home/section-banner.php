<?php
$banner_image = get_sub_field('banner_image');
$banner_heading = get_sub_field('banner_heading');
$banner_sub_heading = get_sub_field('banner_sub_heading');
$banner_sub_text = get_sub_field('banner_sub_text');
$learn_more = get_sub_field('learn_more');
?>

<!-- Banner section starts here -->
<section class="banner-section">
    <div class="wrapper">
        <ul class="banner-slider">
            <li class="active-slide">
                <figure>
                    <img src="<?php echo esc_url($banner_image['url']); ?>"
                        alt="<?php echo esc_attr($banner_image['alt']); ?>">
                </figure>
                <div class="banner-info">
                    <div class="banner-left-content">
                        <div class="banner-leftside-info">
                            <span class="banner-sub-heading">
                                <?php echo esc_html($banner_sub_heading); ?>
                            </span>
                            <p class="banner-para">
                                <?php echo esc_html($banner_sub_text); ?>
                            </p>
                        </div>
                        <a href="<?php echo esc_url($learn_more['url']); ?>" class="banner-link-dropdown">
                            <?php echo esc_html($learn_more['title']); ?>
                        </a>
                    </div>
                    <div class="banner-right-content">
                        <h2>
                            <?php echo esc_html($banner_heading); ?>
                        </h2>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- Banner section ends here -->