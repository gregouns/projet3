<footer class="content-info">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-sm-12 text-center">
				<?php dynamic_sidebar('sidebar-footer'); ?>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="row">
					<div class="col-md-4">
						<a class="bg-circle btn-info" href="https://twitter.com/ ">
							<i class="fa fa-2x fa-fw fa-twitter" aria-hidden="true "></i>
						</a>
					</div>
					<div class="col-md-8 description">
						<h4>Tweets</h4>
						Embed here?
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4">
		              	<a class="bg-circle btn-info" href="https://facebook.com/ ">
		                	<i class="fa fa-2x fa-fw fa-facebook" aria-hidden="true "></i>
		              	</a>
		            </div>
					<div class="col-md-8 description">
						<h4>Facebook</h4>
						join the community
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="row">
					<div class="col-md-4">
		              	<a class="bg-circle btn-info" href="https://pinterest.com/ ">
		                	<i class="fa fa-2x fa-fw fa-pinterest" aria-hidden="true "></i>
		             	</a>
		            </div>
					<div class="col-md-8 description">
						<h4>Pint it!</h4>
						join my on pinterest
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4 col-sm-6">
	             		<a class="bg-circle btn-info" href="<?php query_posts('page_id=24');
	              			while ( have_posts() ) : the_post();
	              	 			the_permalink();
	              	  		endwhile; ?>">
	                		<i class="fa fa-2x fa-fw fa-info" aria-hidden="true "></i>
	              		</a>
	            	</div>
	            	<div class="col-md-8 description">
	              	<h4>Info</h4>
	              		About us.
	            	</div>
	            </div>
            </div>
		</div>
	</div>
</footer>
