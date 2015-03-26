<?php 
/* Template Name: Home Page Template */
?>
<?php get_header();?>

<div class="container">
	<div class="content_part">
		<div class="row">
			<div class="col-sm-8">
				<div class="left_content_part">	
					<div class="content">
						<?php
							if (have_posts()) : while (have_posts()) : the_post();
							the_content();
							endwhile; endif;
						?>
					</div>
				</div>
			</div>
		
			<div class="col-sm-4">
				<div class="right_content_part">
					<?php get_sidebar('right'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>