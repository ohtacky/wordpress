<?php
/**
 * The template used for displaying front page content
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
    <div class="overlay"></div>
    
    <div class="content-quote front">
        <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->
    
        <div class="entry-content">
            <?php the_content(); ?>
            <?php
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
    </div><!-- .content-quote -->
    
    <?php else: ?>
    
    <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
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
    <?php endif; ?>
    
</article><!-- #post-## -->