<?php 
	get_header();
?>
<?php 
	extract(etheme_get_blog_sidebar());
	$postspage_id = get_option('page_for_posts');
?>

<?php
$args = array(
	'show_option_all'    => 'All',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => 1,
	'title_li'           => '',
	'show_option_none'   => __( '' ),
	'number'             => null,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'case_studies_category',
	'walker'             => null
    );
?>
<?php dynamic_sidebar('case-studies-header');?>

<div class="container">
	<?php 
	wp_nav_menu(array(
		'theme_location' => 'case_studies_menu'
	)); 
	?>
	<div class="page-content sidebar-position-<?php echo $position; ?> responsive-sidebar-<?php echo $responsive; ?>">
		<div class="row">
			<div class="content span12">
					<div class="row-fluid">
						<?php if(have_posts()): $k=0; while(have_posts()) : the_post(); ?>
							<?php get_template_part('content-case_studies', $blog_layout); ?>
							<?php if (++$k % 3 == 0) echo '</div><div class="row-fluid">';?>
						<?php endwhile; ?>
					</div>

				<?php else: ?>

					<h1><?php _e('No posts were found!', ETHEME_DOMAIN) ?></h1>

				<?php endif; ?>

				<div class="articles-nav">
					<div class="left"><?php next_posts_link(__('&larr; Older Posts', ETHEME_DOMAIN)); ?></div>
					<div class="right"><?php previous_posts_link(__('Newer Posts &rarr;', ETHEME_DOMAIN)); ?></div>
					<div class="clear"></div>
				</div>

			</div>
		</div>
	</div>
</div>

<?php dynamic_sidebar('case-studies-gray-block');?>
	
<?php
	get_footer();
?>