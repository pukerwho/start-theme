<?php get_header(); ?>
<section class="entry-section">
<i class="fas fa-map-marker-alt">
	<div class="container-fluid">
	  <div class="row">
		<?php
		
		if( have_posts() ):
			// Start the loop
			while( have_posts() ): the_post();
				// Load loop content block template
				get_template_part( 'blocks/default/loop', 'default' );
			// End the loop
			endwhile;
		else:
			_e('No content found', 'minimal-blank-theme');
		endif;
		?>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php 
					if (  $wp_query->max_num_pages > 1 )
					echo '<div class="text-center"><div class="loadmore btn btn-light btn-lg">LOAD MORE</div></div>';
				?>
			</div>
		</div>
 </div>
</section>
<?php get_footer(); ?> 