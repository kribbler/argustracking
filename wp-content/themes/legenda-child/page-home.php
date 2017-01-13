<?php
/*
Template Name: Home Page
*/


	get_header();
?>

<?php 
	extract(etheme_get_page_sidebar());
?>
<?php /*
<?php if ($page_heading != 'disable' && ($page_slider == 'no_slider' || $page_slider == '')): ?>
	<div class="page-heading bc-type-<?php etheme_option('breadcrumb_type'); ?>">
		<div class="container">
			<div class="row-fluid">
				<div class="span12 a-center">
					<!--<h1 class="title"><span><?php the_title(); ?></span></h1>-->
					<?php etheme_breadcrumbs(); ?>
				</div>
			</div>
		</div>
	</div>
<?php endif ?>
*/?>

<?php if($page_slider != 'no_slider' && $page_slider != ''): ?>
	
	<?php echo do_shortcode('[rev_slider_vc alias="'.$page_slider.'"]'); ?>

<?php endif; ?>

<?php echo do_shortcode( '[rev_slider homepage]' ); ?>

<div id="home_block01" class="">
	<div class="container">
		<?php
			if ($_SERVER['REMOTE_ADDR'] == '::1') {
				echo do_shortcode('[content_block id=33 ]');
			}
			else 
				echo do_shortcode('[content_block id=24 ]'); 
		?>
	</div>
</div>

<div id="home_block02" class="">
	<div class="container">
		<?php
			if ($_SERVER['REMOTE_ADDR'] == '::1') 
				echo do_shortcode('[content_block id=35 ]');
			else 
				echo do_shortcode('[content_block id=26 ]'); 
		?>
	</div>
</div>

<div id="home_block03" class="">
	<div class="container">
		<?php
			if ($_SERVER['REMOTE_ADDR'] == '::1') 
				echo do_shortcode('[content_block id=37 ]');
			else 
				echo do_shortcode('[content_block id=28 ]'); 
		?>
	</div>
</div>

<div id="home_block04" class="">
	<div class="container">
		<?php
			if ($_SERVER['REMOTE_ADDR'] == '::1') 
				echo do_shortcode('[content_block id=39 ]');
			else 
				echo do_shortcode('[content_block id=30 ]'); 
		?>
	</div>
</div>

<div id="home_block05" class="">
	<div class="container">
		<?php
			if ($_SERVER['REMOTE_ADDR'] == '::1') {
				echo do_shortcode('[content_block id=41 ]');
			}
			else 
				echo do_shortcode('[content_block id=32 ]'); 
		?>
	</div>
</div>

<div id="home_block06" class="">
	<div class="container">
		<?php
			if ($_SERVER['REMOTE_ADDR'] == '::1') {
				echo do_shortcode('[content_block id=43 ]');
			}
			else 
				echo do_shortcode('[content_block id=34 ]'); 
		?>
	</div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function($){
		
	});

</script>
<?php
	get_footer();
?>