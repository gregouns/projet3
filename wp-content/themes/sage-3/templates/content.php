<article <?php post_class(); ?>>
	<header>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<div class="row myarticle">
		<div class="image col-md-4">
			<?php the_post_thumbnail('thumbnail'); ?>
		</div>
		<div class="entry-summary col-md-8">
			<?php the_excerpt(); ?>
		</div>
	</div>
</article>
