<?php
/**
 * A custom template for the high school workshops page
 * Displays the content of the page plus a list of stories from past workshops
 */

get_header(); ?>

		<div id="content" class="stories span8" role="main">

			<?php if ( have_posts() ) { ?>

			<header class="entry-header">
				<h1 class="page-title"><?php single_cat_title(); ?></h1>
			</header>

			<?php
				$page_id = 1227;
				$page = get_page( $page_id );
				if ($page->post_status == 'publish') {
					echo '<div class="entry-content" style="margin-bottom: 24px">';
					echo apply_filters('the_content', $page->post_content);
					echo '</div>';
				}
			?>

			<h3 class="recent-posts clearfix" style="clear:both;"><?php _e('Stories From Our School Workshops', 'largo'); ?><a class="rss-link" href="<?php echo esc_url( get_category_feed_link( get_queried_object_id() ) ); ?>"><i class="icon-rss"></i></a></h3>

				<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'partials/content', 'category' );
					endwhile;
					largo_content_nav( 'nav-below' );

				} else {
					get_template_part( 'partials/content', 'not-found' );
				}
				?>

		</div>
		<!--#content -->

<?php get_sidebar('topic'); ?>

<?php get_footer(); ?>
