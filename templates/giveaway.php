<?php /* Template Name: Giveaway */
get_header(); ?>
<div class="giveaway">
    <div class="giveaway__wrapper">
        <div class="giveaway__header">
            <div class="giveaway__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php include(get_template_directory() . '/images/inline/logo.svg'); ?>
                </a>
            </div>
        </div>
        <div class="giveaway__content-wrap">
            <div class="giveaway__content">
                <h1 class="giveaway__content-heading"><?php echo get_field('giveaway_heading'); ?></h1>
                <p class="giveaway__content-description"><?php echo get_field('giveaway_description'); ?></p>
            </div>
            <div class="giveaway__background">
                <picture>
                    <source media="(min-width:1140px)"
                            srcset="<?php echo get_field('giveaway_background_image')['sizes']['giveaway-lg']; ?>">
                    <source media="(min-width:768px)"
                            srcset="<?php echo get_field('giveaway_background_image')['sizes']['giveaway-md']; ?>">
                    <img src="<?php echo get_field('giveaway_background_image')['sizes']['giveaway-sm']; ?>"
                         alt="<?php echo get_field('giveaway_background_image')['alt']; ?>"
                         class="giveaway__background-image">
                </picture>
            </div>
        </div>
        <div class="giveaway__bar">
            <div class="giveaway__bar-row">
                <div class="giveaway__bar-column">
                    <a href="<?php echo get_field('giveaway_cta_url'); ?>" class="giveaway__bar-cta">
                        <?php echo get_field('giveaway_cta_text'); ?>
                    </a>
                </div>
                <div class="giveaway__bar-column">
                    <h2 class="giveaway__bar-heading"><?php echo get_field('giveaway_instagram_column_heading'); ?></h2>
                    <span class="giveaway__bar-value">
                        <a href="https://instagram.com/<?php echo get_field('giveaway_instagram'); ?>" class="giveaway__bar-instagram">
                            @<?php echo get_field('giveaway_instagram'); ?>
                        </a>
                    </span>
                </div>
                <div class="giveaway__bar-column">
                    <h2 class="giveaway__bar-heading"><?php echo get_field('giveaway_timer_column_heading'); ?></h2>
                    <span class="giveaway__bar-value">
                        <span class="giveaway__timer">
                            <span class="giveaway__timer-column">
                                <span class="giveaway__timer-value" data-timer="days">00</span>
                                <span class="giveaway__timer-title">Days</span>
                            </span>
                            <span class="giveaway__timer-column">
                                <span class="giveaway__timer-value" data-timer="hours">00</span>
                                <span class="giveaway__timer-title">Hours</span>
                            </span>
                            <span class="giveaway__timer-column">
                                <span class="giveaway__timer-value" data-timer="mins">00</span>
                                <span class="giveaway__timer-title">Mins</span>
                            </span>
                            <span class="giveaway__timer-column">
                                <span class="giveaway__timer-value" data-timer="secs">00</span>
                                <span class="giveaway__timer-title">Secs</span>
                            </span>
                        </span>
                    </span>
                </div>
                <div class="giveaway__bar-column">
                    <h2 class="giveaway__bar-heading"><?php echo get_field('giveaway_date_column_heading'); ?></h2>
                    <span class="giveaway__bar-value">
                        <?php echo date_format(date_create(get_field('giveaway_time')),"M d, Y"); ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="giveaway__footer">
            <p class="giveaway__disclaimer">
                <?php echo sprintf(
                        get_field('giveaway_disclaimer'),
                    '<a href="' . get_field('giveaway_terms_link_url') . '">' . get_field('giveaway_terms_link_text') . '</a>'
                ); ?>
            </p>
        </div>
    </div>
</div>


<?
get_footer();