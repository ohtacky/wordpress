<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package Amalie
 * @since Amalie 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( '' != get_the_post_thumbnail() ) : ?>
    <?php $image_id = get_post_thumbnail_id(); ?>
    <?php $image_url = wp_get_attachment_image_src($image_id,'small');   ?>
    <div class="cd-fixed-bg cd-bg-1" style="background-image:url(<?php echo esc_attr( $image_url[0] ); ?>);"></div>
    
    <div class="content-quote">
        <div class="entry-content">
            <?php
                /* translators: %s: Name of current post */
                the_content( sprintf(
                    __( 'Continue reading %s', 'amalie' ),
                    the_title( '<span class="screen-reader-text">', '</span>', false )
                ) );
    
                wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'amalie' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'amalie' ) . ' </span>%',
                    'separator'   => '<span class="screen-reader-text">, </span>',
                ) );
            ?>
        </div><!-- .entry-content -->
    
        <?php
            // Author bio.
            if ( is_single() && get_the_author_meta( 'description' ) ) :
                get_template_part( 'author-bio' );
            endif;
        ?>
    </div><!-- .content-quote -->
    
    <?php else: ?>
    
    <div class="entry-content">
            <?php
                /* translators: %s: Name of current post */
                the_content( sprintf(
                    __( 'Continue reading %s', 'amalie' ),
                    the_title( '<span class="screen-reader-text">', '</span>', false )
                ) );
    
                wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'amalie' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'amalie' ) . ' </span>%',
                    'separator'   => '<span class="screen-reader-text">, </span>',
                ) );
            ?>
        </div><!-- .entry-content -->
    
        <?php
            // Author bio.
            if ( is_single() && get_the_author_meta( 'description' ) ) :
                get_template_part( 'author-bio' );
            endif;
        ?>
    
    <?php endif; ?>
    
    <footer class="entry-footer">
		<?php amalie_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'amalie' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
    
</article><!-- #post-## -->