
<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
		<?php 
			query_posts('page_id=41');
			while ( have_posts() ) : the_post();?>
				<!--appel du titre de la page-->
				<h1><?php the_title();?></h1>
				<?php if ( has_post_thumbnail() ) {
					// appel de l' image de la page
					the_post_thumbnail('full', array('class' => 'img-responsive'));
				} 
				the_content();
			endwhile;
		?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 jumbotron">
			<h3>Elève</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ullamcorper, dui et ornare sollicitudin, justo eros condimentum lectus, quis ultricies urna tortor sed mauris. Nullam sodales, </p>
		</div>
		<div class="col-md-6 jumbotron">
			<h3>Particulier</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ullamcorper, dui et ornare sollicitudin, justo eros condimentum lectus, quis ultricies urna tortor sed mauris. Nullam sodales, </p>
		</div>
	</div>	
</div>