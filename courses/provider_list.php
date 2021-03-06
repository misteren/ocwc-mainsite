<?php
/*
	Template name: Page Courses - Providers List
*/

	$providers = get_api_results("/providers/");
?>
<?php get_header(); ?>
<div class="row main-wrapper">
	<?php get_template_part('partials/header_image', get_post_type()); ?>
	<div class="large-3 columns">
		<?php dynamic_sidebar('sidebar-courses'); ?>
	</div>
	<?php if ( have_posts() ) : ?>	
		<div class="large-9 columns">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('partials/content', get_post_format()); ?>
			<?php endwhile; ?>

			<ul>
			<?php foreach ($providers as $provider) : ?>
				<li><a href="/providers/<?php echo $provider->id; ?>/"><?php echo $provider->name; ?></a></li>
			<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>
</div>	
<?php get_footer(); ?>
