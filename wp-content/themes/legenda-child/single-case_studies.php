<?php 
	get_header();
?>

<?php 
	extract(etheme_get_page_sidebar());
	$blog_slider = etheme_get_option('blog_slider');
	$postspage_id = get_option('page_for_posts');
?>





<div class="container">
	<div class="page-content sidebar-position-<?php echo $position; ?> responsive-sidebar-<?php echo $responsive; ?>">
		<div class="row-fluid">
			<?php if($position == 'left' || ($responsive == 'top' && $position == 'right')): ?>
				<div class="<?php echo $sidebar_span; ?> sidebar sidebar-left">
					<?php etheme_get_sidebar($sidebarname); ?>
				</div>
			<?php endif; ?>

			<div class="content <?php echo $content_span; ?>">
				<?php if(have_posts()): while(have_posts()) : the_post(); ?>
					
					<article <?php post_class('blog-post post-single'); ?> id="post-<?php the_ID(); ?>">

					<?php $images = etheme_get_images(1000,1000,false); ?>

					<?php if (count($images)>0 && has_post_thumbnail()): ?>
						<div class="post-images nav-type-small<?php if (count($images)>1): ?> images-slider<?php endif; ?>">
							<ul class="slides">
								<?php if(!$blog_slider): ?>
									<li><img src="<?php echo $images[0]; ?>"></li>
								<?php else: ?>
									<?php foreach ($images as $key => $value): ?>
										<li><img src="<?php echo $value; ?>"></li>
									<?php endforeach ?>
								<?php endif; ?>
							</ul>
						</div>
						<?php if($blog_slider): ?>
							<script type="text/javascript">
								jQuery(document).ready(function(){
									jQuery('.post-images').flexslider({
										animation: "slide",
										slideshow: false,
										animationLoop: false,
										controlNav: false,
										smoothHeight: true
									});
								});
							</script>	
						<?php endif; ?>
					<?php endif ?>
						
						<h1 class="post-title"><?php the_title(); ?></h1>

						<?php the_content(); ?>

						<div class="clear"></div>

					</article>

				<?php endwhile; else: ?>

					<h1><?php _e('No posts were found!', ETHEME_DOMAIN) ?></h1>

				<?php endif; ?>
				
				<?php comments_template('', true); ?>

			</div>

			<?php if($position == 'right' || ($responsive == 'bottom' && $position == 'left')): ?>
				<div class="<?php echo $sidebar_span; ?> sidebar sidebar-right">
					<?php etheme_get_sidebar($sidebarname); ?>
				</div>
			<?php endif; ?>

		</div>

	</div>
</div>
	
<?php
	get_footer();
?>