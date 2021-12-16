<?php
/**
 * Template part for displaying regular text blocks.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

?>

<section class="accordion-content">
    <?php

    $accordion_iter = 0;
    $first_card_open = get_sub_field('first_card_open');
    $keep_cards_open = get_sub_field('keep_cards_open');

    // check if the repeater field has rows of data
    if( have_rows('repeater_cards') ): ?>
    <div id="accordion_<?php echo $content_iter; ?>">
        <?php
        // loop through the rows of data
        while ( have_rows('repeater_cards') ) : the_row(); ?>

            <div class="accordion-card">
                <div id="heading_<?php echo $content_iter; ?>_<?php echo $accordion_iter; ?>">
                    <h4>
                        <button
                                class="accordion-btn"
                                data-toggle="collapse"
                                data-target="#collapse_<?php echo $content_iter; ?>_<?php echo $accordion_iter; ?>"
                                aria-expanded="<?php echo ($accordion_iter === 0 && $first_card_open) ? "true" : "false"; ?>"
                                aria-controls="collapse_<?php echo $content_iter; ?>_<?php echo $accordion_iter; ?>"
                        >
                            <?php include( __DIR__ . '/icons/plus-icon.svg' ); ?>
                            <?php the_sub_field('card_header'); ?>
                        </button>
                    </h4>
                </div>

                <div
                        id="collapse_<?php echo $content_iter; ?>_<?php echo $accordion_iter; ?>"
                        class="collapse <?php if($accordion_iter === 0 && $first_card_open) echo "show"; ?>"
                        aria-labelledby="heading_<?php echo $content_iter; ?>_<?php echo $accordion_iter; ?>"
                        <?php if(!$keep_cards_open): ?>
                        data-parent="#accordion_<?php echo $content_iter; ?>"
                        <?php endif; ?>
                >
                    <div class="accordion-card-body">
                        <?php the_sub_field('card_body'); ?>
                    </div>
                </div>
            </div>
        <?php
            $accordion_iter++;
        endwhile;
        ?>
    </div>
    <?php endif; ?>
</section>
