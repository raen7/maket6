<?php
/*
Template Name: Коллективы

*/
?>

<?php get_header() ?>
<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
<div class="wrapper_about">
	<div class="container">
		<div class="news about_container">
			<h2>Название коллектива</h2>
			<div class="about_info">
				<div class="about_img">
					<?php the_post_thumbnail('about_thumb'); ?>
				</div>
				<div class="about_content">               
                <?php the_content() ?>           
            	</div>
			</div>	
		</div>	
	</div>
	</div>
	<?php get_footer() ?>
	</div>
<?php endwhile; ?>
		<?php endif; ?>
