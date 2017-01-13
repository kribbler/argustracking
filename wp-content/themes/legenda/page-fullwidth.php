<?php
/*
Template Name: FullWidth Page
*/
	get_header();
?>

<?php if(have_posts()): while(have_posts()) : the_post(); ?>

		<?php the_content(); ?>

<?php endwhile; endif;?>

<script type="text/javascript">
	jQuery(document).ready(function($){
		
	});

</script>
<?php
	get_footer();
?>