<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php twentyfourteen_post_thumbnail(); ?>
	<p><?php the_post_thumbnail_caption(); ?></p>
	<p><?php the_post_thumbnail_title(); ?></p>

	<header class="entry-header">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
		<div class="entry-meta">
			<span class="cat-links">
			  <?php $args = array(
          // 'show_option_all'    => '',
          // 'orderby'            => 'name',
          // 'order'              => 'ASC',
          'style'              => 'none',
          // 'show_count'         => 0,
          // 'hide_empty'         => 1,
          // 'use_desc_for_title' => 1,
        	'child_of'           => 5,
          // 'feed'               => '',
          // 'feed_type'          => '',
          // 'feed_image'         => '',
          // 'exclude'            => '',
          // 'exclude_tree'       => '',
          // 'include'            => '',
          // 'hierarchical'       => 1,
          // 'title_li'           => __( 'Categories' ),
          // 'show_option_none'   => __('No categories'),
          // 'number'             => null,
          // 'echo'               => 1,
          // 'depth'              => 0,
          // 'current_category'   => 0,
          // 'pad_counts'         => 0,
          // 'taxonomy'           => 'category',
          // 'walker'             => null
        );
        
        wp_list_categories( $args ); ?> 
			</span>
		</div>
		<?php
			endif;

			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;
		?>
		
		<?php echo get_post_meta( get_the_ID(), 'Subtitle', true ); ?>

		<div class="entry-meta">
			<?php
				if ( 'post' == get_post_type() )
					twentyfourteen_posted_on();

				if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>
			<?php
				endif;

				edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php
			the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) );
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
		
		<?php $args = array(
      // 'show_option_all'    => '',
      // 'orderby'            => 'name',
      // 'order'              => 'ASC',
      // 'style'              => '',
      // 'show_count'         => 0,
      // 'hide_empty'         => 1,
      // 'use_desc_for_title' => 1,
    	'child_of'           => 7,
      // 'feed'               => '',
      // 'feed_type'          => '',
      // 'feed_image'         => '',
      // 'exclude'            => '',
      // 'exclude_tree'       => '',
      // 'include'            => '',
      // 'hierarchical'       => 1,
      // 'title_li'           => __( 'Categories' ),
      // 'show_option_none'   => __('No categories'),
      // 'number'             => null,
      // 'echo'               => 1,
      // 'depth'              => 0,
      // 'current_category'   => 0,
      // 'pad_counts'         => 0,
      // 'taxonomy'           => 'category',
      // 'walker'             => null
    );
    
    wp_list_categories( $args ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->
