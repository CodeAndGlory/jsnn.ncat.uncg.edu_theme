<?php
/**
 * Template part for displaying resources.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

?>

<section class="resources-content-block">
    <div class="resources-wrapper">

        <?php if( have_rows('column_1') ): ?>
            <div class="resources-column">
                <?php while ( have_rows('column_1') ) : the_row(); ?>

                    <div class="resource-item icon-<?php the_sub_field('icon'); ?>">
                        <h3 class="resource-heading"><?php the_sub_field('heading'); ?></h3>

                        <div class="resource-text">
                            <?php the_sub_field('text'); ?>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php if( have_rows('column_2') ): ?>
            <div class="resources-column">
                <?php while ( have_rows('column_2') ) : the_row(); ?>

                    <div class="resource-item icon-<?php the_sub_field('icon'); ?>">
                        <h3 class="resource-heading"><?php the_sub_field('heading'); ?></h3>

                        <div class="resource-text">
                            <?php the_sub_field('text'); ?>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php if( have_rows('column_3') ): ?>
            <div class="resources-column">
                <?php while ( have_rows('column_3') ) : the_row(); ?>

                    <div class="resource-item icon-<?php the_sub_field('icon'); ?>">
                        <h3 class="resource-heading"><?php the_sub_field('heading'); ?></h3>

                        <div class="resource-text">
                            <?php the_sub_field('text'); ?>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </div> <!-- .resources-wrapper -->

</section>
