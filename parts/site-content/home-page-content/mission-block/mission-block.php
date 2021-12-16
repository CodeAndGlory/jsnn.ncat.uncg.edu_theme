<?php
/**
 * Template part for displaying mission statement blocks.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

?>

<?php
    $style = "";

    if( get_sub_field('background_image') ) {
        $style .= "background: url(" .  get_sub_field('background_image') . ")";
        $style = 'style="'.$style.'"';
    }
?>

<section class="mission-block" <?php echo $style; ?>>
    <?php
        the_sub_field( 'content' );
    ?>
</section>
