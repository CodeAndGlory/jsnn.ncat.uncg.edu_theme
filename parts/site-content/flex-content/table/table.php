<?php
/**
 * Template part for displaying content sections.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

if ( get_sub_field( 'table_css_class' ) ) {
    $class = get_sub_field( 'table_css_class' );
} else {
    $class = '';
}

$rows_have_headers = get_sub_field( 'rows_have_headers' );

?>
<section class="table-wrapper table-responsive">
    <table class="table table-striped <?php echo $class; ?>">
        <?php if ( get_sub_field( 'table_caption' ) ): ?>
            <caption><?php the_sub_field( 'table_caption' ) ?></caption><?php endif; ?>
        <?php

        $column_headings = array();
        $table_rows = array();
        $row = 0;

        // set up column headers, if present
        if ( have_rows( 'repeater_column_header' ) ) :
            $has_column_headings = true;
            ?>
            <thead>
            <tr>
                <?php
                // loop through the rows of data
                while ( have_rows( 'repeater_column_header' ) ) : the_row(); ?>
                    <th scope="col"><?php the_sub_field( 'sub_column_header' ); ?></th>
                <?php endwhile; ?>
            </tr>
            </thead>
        <?php endif; ?>

        <?php if ( have_rows( 'repeater_table_row' ) ): ?>
            <tbody>
            <?php while ( have_rows( 'repeater_table_row' ) ) : the_row(); ?>
                <tr>
                    <?php
                    if ( have_rows( 'repeater_table_cell' ) ):
                        $iter = 0;
                        while ( have_rows( 'repeater_table_cell' ) ) : the_row(); ?>
                            <?php if ( $iter == 0 && $rows_have_headers == true ): ?>
                                <th scope="row"><?php the_sub_field( 'sub_cell' ); ?></th>
                            <?php else: ?>

                                <td>
                                    <?php if( !get_sub_field( 'link' ) ): ?>
                                    <?php the_sub_field( 'sub_cell' ); ?>
                                    <?php else: ?>

                                        <?php
                                        $link = get_sub_field( 'cell_link' );
                                        if( $link ):
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
                                            <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                        <?php endif; ?>

                                    <?php endif; ?>
                                </td>

                            <?php endif; ?>
                            <?php $iter++; endwhile; endif; ?>
                </tr>
            <?php endwhile; ?>
            </tbody>
        <?php endif; ?>
    </table>
</section>