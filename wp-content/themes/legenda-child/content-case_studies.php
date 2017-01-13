<?php 
$postId = get_the_ID();

$categories = wp_get_post_terms($postId, 'case_studies_category');
$catsClass = '';
foreach($categories as $category) {
	$catsClass .= ' sort-'.$category->slug;
}
	
	$width = etheme_get_option('portfolio_image_width');
	$height = etheme_get_option('portfolio_image_height');
	$crop = etheme_get_option('portfolio_image_cropping');

?>
<div class="span4">
	<?php if (has_post_thumbnail( $postId ) ): ?>
		<?php show_category_image($postId); ?>
		<div class="portfolio-image">
				<?php $imgSrc = etheme_get_image(get_post_thumbnail_id($postId)); ?>
				<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgSrc; ?>" alt="<?php the_title(); ?>"></a>
	    </div>
	<?php endif; ?>
	<div class="portfolio-descr">
    	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>
    </div>    
</div>
