<?php get_header(); ?>
<div id="primary" <?php astra_primary_class(); ?>>
	<div class="Sep_actu">
	      <span><h1 class="MainTitle_actu">L'actualité de Simpl Vintage</h1><span>
    </div>
	<div class="all_actu">	
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); ?>

            

					<div class="bloc_actu">
                         
						<?php the_post_thumbnail('medium');?>
						<span class="content_actu">
							<h3 class="title_actu"><?php the_title(); ?></h3>
							<p id="date_actu">Le <?php the_date(); ?><p>							
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>">
								<center><button class="btn_actu">Lire l'article</button>
							</a>
						</span>
					</div>


				<?php } 
			} 
		?>
	</div>
	<?php astra_pagination(); ?>
</div>
<?php get_footer(); ?>