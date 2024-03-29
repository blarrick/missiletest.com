<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_excerpt(); ?>

	<?php /* twentysixteen_post_thumbnail(); commented out so feature image doesn't show on posts */ ?>

	<footer class="entry-footer">
		<?php twentysixteen_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
	
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
			
			$tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'twentysixteen' ) );
			
			if(in_category('empty-balcony')) {
				if ( $tags_list ) {
					printf( '<span class="tags-links"><span class="tags-flicks">Genres and stuff:<br></span><span class="screen-reader-text">%1$s </span>%2$s</span>',
						_x( 'Tags', 'Used before tag names.', 'twentysixteen' ),
						$tags_list
					);
				}
			} else {
				if ( $tags_list ) {
					printf( '<span class="tags-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
						_x( 'Tags', 'Used before tag names.', 'twentysixteen' ),
						$tags_list
					);
				}
			}
			
			$people_list = get_the_term_list( $post->ID, 'people', '<span class="tags-links"><span class="tags-flicks">Some of those responsible:<br></span>', ', ', '' );
			if ($people_list) {
				echo $people_list . '</span>';
			}

		?>
		
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->
