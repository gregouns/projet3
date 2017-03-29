
<div class="container">
	<div class="row">
		<div class="col-md-6">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget pretium urna, ac mattis purus. Nam dui enim, posuere at massa quis, aliquam suscipit dolor. Nulla at nunc libero. Nam nisi lorem, egestas vel tincidunt in, imperdiet ac dolor. Nam ac elit interdum, consequat sapien ac, efficitur lacus. Quisque varius tellus eget eleifend rutrum. Maecenas mattis feugiat lorem, a iaculis ipsum consequat id.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget pretium urna, ac mattis purus. Nam dui enim, posuere at massa quis, aliquam suscipit dolor. Nulla at nunc libero. Nam nisi lorem, egestas vel tincidunt in, imperdiet ac dolor. Nam ac elit interdum, consequat sapien ac, efficitur lacus. Quisque varius tellus eget eleifend rutrum. Maecenas mattis feugiat lorem, a iaculis ipsum consequat id. 
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget pretium urna, ac mattis purus. Nam dui enim, posuere at massa quis, aliquam suscipit dolor. Nulla at nunc libero. Nam nisi lorem, egestas vel tincidunt in, imperdiet ac dolor. Nam ac elit interdum, consequat sapien ac, efficitur lacus. Quisque varius tellus eget eleifend rutrum. Maecenas mattis feugiat lorem, a iaculis ipsum consequat id. 
		</div>
		<div class="col-md-6">
			<?php 
			query_posts('page_id=41');
			while ( have_posts() ) : the_post();?>
				<?php if ( has_post_thumbnail() ) {
					// appel de l' image de la page
					the_post_thumbnail('full', array('class' => 'img-responsive'));
				} 
				the_content();
			endwhile;
			?>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-5 bg-warning">
			<div class="row">
				<div class="col-md-6 aligncenter" style="text-align: center;">
					<?php 
					query_posts('page_id=9');
					while ( have_posts() ) : the_post();?>
						<h3><a href="<?php the_permalink() ?>">Elève</a></h3>
					<?php
					endwhile;
					?>
				</div>
				<div class="col-md-6">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=150%C3%97150&w=150&h=150" alt="eleve" class="img-responsive img-circle">
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ullamcorper, dui et ornare sollicitudin, justo eros condimentum lectus, quis ultricies urna tortor sed mauris. Nullam sodales, </p>
			</div>
		</div>
		<div class="col-md-offset-2 col-md-5 bg-warning">
			<div class="row">
				<div class="col-md-6 aligncenter" style="text-align: center;">
					<?php 
					query_posts('page_id=9');
					while ( have_posts() ) : the_post();?>
						<h3><a href="<?php the_permalink() ?>">particulier</a></h3>
					<?php
					endwhile;
					?>
				</div>
				<div class="col-md-6">
					<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=150%C3%97150&w=150&h=150" alt="eleve" class="img-responsive img-circle ">
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ullamcorper, dui et ornare sollicitudin, justo eros condimentum lectus, quis ultricies urna tortor sed mauris. Nullam sodales, </p>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-5 bg-warning">
				<div class="col-md-6 aligncenter" style="text-align: center;">
					<?php 
					query_posts('page_id=44');
					while ( have_posts() ) : the_post();?>
						<h3><a href="<?php the_permalink() ?>"><?php the_title()?></a></h3>
					<?php
					endwhile;
					?>
				</div>
				<p>suivant le nombre heures choisis vous bénificiez de réductions<br/>
					à partir de 15€</p>
		</div>
		<div class="col-md-offset-2 col-md-5 bg-warning">
			<div class="col-md-6 aligncenter" style="text-align: center;">
				<?php 
				query_posts('p=117');
				while ( have_posts() ) : the_post();?>
					<h3><a href="<?php the_permalink() ?>"><?php the_title()?></a></h3>
				<?php
				endwhile;
				?>
			</div>
		</div>
	</div>
	<hr>	
</div>