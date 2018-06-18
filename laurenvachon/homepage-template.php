<?php
/**
 * Template name: Homepage Template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<?php get_header(); ?>

	<article class="col-xs-12 col-md-4 blogPost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( has_post_thumbnail() ) { ?>
	       <div class="post-blogs-container-thumbnails">
	         <?php } else { ?>
	         <div class="post-blogs-container">
	           <?php } ?>

	           <?php if ( empty($steady_blogging_full_posts) ) : ?>


	           <?php if ( has_post_thumbnail() ) { ?>

						 <!-- regular image -->
						 <div class="featured-thumbnail-container">
	            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" id="featured-thumbnail">
	              <?php the_post_thumbnail('large-feature'); ?>
	           </a>
	         	</div>

						 <!-- end of regular image -->
	         <div class="thumbnail-post-content">
	          <?php } else { ?>
	          <div class="nothumbnail-post-content">
	            <?php } ?>

							<?php echo esc_attr(get_the_date()); ?>
	            <h2 class="title">
	              <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
	            </h2>

	            <span class="entry-meta">

	              <?php
	              if ( is_sticky() && is_home() && ! is_paged() ) {
	                printf( ' / <span class="sticky-text">%s</span>', esc_html( 'Sticky', 'steady-blogging' ) );
	              } ?>
	            </span>
	            <!-- <div class="post-content"> -->
	              <?php /* echo esc_html(get_the_excerpt()); */ ?>
	            <!-- </div> -->
	          <?php else : ?>
	        </div>
	      </div>
	    <?php endif; ?>












		<div class="entry-meta">
			<?php $show_sep = false; ?>
			<?php if ( is_object_in_taxonomy( get_post_type(), 'category' ) ) : // Hide category text when not supported ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );
			if ( $categories_list ) :
			?>

			<?php endif; // End if categories ?>
			<?php endif; // End if is_object_in_taxonomy( get_post_type(), 'category' ) ?>
			<?php if ( is_object_in_taxonomy( get_post_type(), 'post_tag' ) ) : // Hide tag text when not supported ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'twentyeleven' ) );
			if ( $tags_list ) :
				if ( $show_sep ) :
				?>
			<span class="sep"> | </span>
				<?php endif; // End if $show_sep ?>
			<span class="tag-links">
				<?php
				printf( __( '<span class="%1$s"></span> %2$s', 'twentyeleven' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list );
				$show_sep = true;
				?>
			</span>
			<?php endif; // End if $tags_list ?>
			<?php endif; // End if is_object_in_taxonomy( get_post_type(), 'post_tag' ) ?>



			<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->

	<?php get_footer(); ?>
