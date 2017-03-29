<?php
/**
 * Template Name: tarifs Template
 */
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Tarifs pour collège,lycée et adulte</h3>
			<table class="table table-bordered">
				<tr class="info">
  					<th>Nbre d'heure</th>
  					<th>tarifs</th>
  					<th>réduction</th>
  				</tr>
  				<tr class="success">
  					<td>1h</td>
  					<td>20€</td>
  					<td>pas de réduction</td>
  				</tr>
  				<tr class="warning">
  					<td>5h</td>
  					<td>18€</td>
  					<td>-10%</td>
  				</tr>
  				<tr class="danger">
  					<td>10h</td>
  					<td>20€</td>
  					<td>-20%</td>
  				</tr>
			</table>
		</div>
	</div>
	<div class="row">
		<?php query_posts('page_id=44');
		while ( have_posts() ) : the_post();
			the_content();
		endwhile; ?>
	</div>
</div>