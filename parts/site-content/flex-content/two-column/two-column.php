<?php
/**
 * Template part for displaying two column layouts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

?>

<section class="two-column">
    <div class="column">
        <?php the_sub_field( 'column_1' ); ?>
    </div>
    <div class="column">
        <?php the_sub_field( 'column_2' ); ?>
    </div>
</section>
