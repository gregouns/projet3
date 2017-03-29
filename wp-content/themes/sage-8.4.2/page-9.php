<!--appel de la page principale cours particulier-->

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
		<!--appel de la page cours college-->
			<?php query_posts('page_id=89');
			while ( have_posts() ) : the_post();?>
			<!--appel du tire de la page-->
				<h1><?php the_title();?></h1>
				<?php if ( has_post_thumbnail() ) {
					// appel de l' image de la page
					the_post_thumbnail(array(250,250), array('class' => 'img-responsive'));
				} 
				the_content();
			endwhile;
			?>
		</div>
		<div class="col-md-4">
			<!--appel de la page cours lycée-->
			<?php query_posts('page_id=93');
			while ( have_posts() ) : the_post();?>
			<!--appel du tire de la page-->
				<h1><?php the_title();?></h1>
				<?php
				// appel de l' image de la page
				if ( has_post_thumbnail() ) {
					the_post_thumbnail(array(250,250), array('class' => 'img-responsive'));
				}
				the_content();
			endwhile;
			?>
		</div>
		<div class="col-md-4">
		<!--appel de la page cours adulte-->
			<?php query_posts('page_id=101');
			while ( have_posts() ) : the_post();?>
			<!--appel du tire de la page-->
				<h1><?php the_title();?></h1>
				<?php
				// appel de l' image de la page
				if ( has_post_thumbnail() ) {
					the_post_thumbnail(array(250,250), array('class' => 'img-responsive'));
				}
				the_content();
			endwhile;
			?>
		</div>
	</div>
</div>

