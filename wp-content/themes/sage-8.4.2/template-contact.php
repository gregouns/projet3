<?php
/**
 * Template Name: contact Template
 */
?>




<?php
$message = '';
$title = '';
if (isset($_POST['title'])) {
	$title = $_POST['title'];
	$title = addslashes(strip_tags(trim($title)));
}
$email = '';
if (isset($_POST['email'])) {
	$email = $_POST['email'];
	$email = addslashes(strip_tags(trim($email)));
	$email = is_email( $email );
}
$phone = '';
if (isset($_POST['phone'])) {
	$phone = $_POST['phone'];
	$phone = addslashes(strip_tags(trim($phone)));
}
$description = '';
if (isset($_POST['description'])) {
	$description = $_POST['description'];
	$description = addslashes(strip_tags(trim($description)));
}
$niveau = '';
if (isset($_POST['niveau'])) {
	$niveau = $_POST['niveau'];
}
if ( $_POST ) {
	$_error = false;
	if ( isset($_POST['title']) && strlen($_POST['title']) == 0 ) {
		$_error  = true;
		$msgError['title'] = 'Merci de renseigner le titre';
	}
	if ( isset($_POST['email']) && strlen($_POST['email']) == 0 ) {
		$_error  = true;
		$msgError['email'] = 'Merci de renseigner l\' email';
	}
	if ( isset($_POST['phone']) && strlen($_POST['phone']) == 0 ) {
		$_error  = true;
		$msgError['phone'] = 'Merci de renseigner le numero de telephone';
	}
	if ( isset($_POST['description']) && strlen($_POST['description']) == 0 ) {
		$_error  = true;
		$msgError['description'] = 'Merci de renseigner la description';
	}
	if ( isset($_POST['niveau'])  == -1 ) {
		$_error  = true;
		$msgError['niveau'] = 'Merci de renseigner votre niveau';
	}

	if ( $_error == false ) {
		$title = $_POST['title'];
		$email = $_POST['email'];
		$description = $_POST['description'];
		$phone = $_POST['phone'];
		$niveau = $_POST['niveau'];
		$info = 'Email : ' . $email . '<br/><br/> Description : ' . $description . '<br/><br/> Téléphone : ' . $phone . '<br/><br/> Niveau : ' . $niveau;
		wp_mail('greglelay@gmail.com',$title,$info,"Content-type: text/html");
	}
	else {
		$message = '<div class="alert alert-danger">Veuillez remplir tous les champs : <ul>';
		foreach ($msgError as $key => $value) {
			$message .= '<li>'.$value.'</li>';
		}
		$message .= '</ul></div>';
	}
}

?>
<?php echo $message ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6" style="text-align: center;">
			<h3>Adresse</h3>
			<p>48 rue de la fête<br/>
				1er étage<br/>
				84759 fillou<br/>
				tél: 08 45 69 21 78
			</p>
		</div>
		<div class="col-md-6" style="text-align: center;">
			<h3>Horaires</h3>
			<p>Le mercredi de 14h à 18h<br/>
				Le vendredi de 17h à 21h<br/>
				Le samedi de 9h à 17h</p>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-6">
			<h3>Demande de renseignement</h3>
			<form method="post" action="/contact">
				<div class="form-group <?php if($msgError['title']) {echo 'has-error'; }?>">
					<label for="title">nom</label>

					<input id="title" class="form-control" name="title" type="text" value="<?php if (isset($_POST['title'])) {echo $_POST['title'];}?>" />
				</div>
				<div class="form-group <?php if($msgError['email']) {echo 'has-error'; }?>">
					<label for="email">email</label>
					<input id="email" class="form-control" name="email" type="email" value="<?php if (isset($_POST['email'])) {echo $_POST['email'];}?>" />
				</div>
				<div class="form-group <?php if($msgError['phone']) {echo 'has-error'; }?>">
					<label for="phone">telephone</label>
					<input id="phone" class="form-control" name="phone" type="text" value="<?php if (isset($_POST['phone'])) {echo $_POST['phone'];}?>" />
				</div>
				<div class="form-group <?php if($msgError['phone']) {echo 'has-error'; }?>">
					<label for="niveau">Niveau</label>
					<select name="niveau">
						<option value="-1">Sélectionnez un niveau</option>
						<option value="6eme">6éme</option>
						<option value="5eme">5éme</option>
						<option value="4eme">4éme</option>
						<option value="3eme">3éme</option>
						<option value="seconde">seconde</option>
						<option value="première">première</option>
						<option value="terminale">terminale</option>
					</select>
				</div>
				<div class="form-group <?php if($msgError['description']) {echo 'has-error'; }?>">
					<label for="description">description</label>
					<textarea id="description" class="form-control" name="description"><?php if (isset($_POST['description'])) {echo $_POST['description'];}?></textarea>
				</div>
				<button type="submit" name="submit" id="button" value="submit"  class="btn btn-primary">
					submit
				</button>
			</form>
		</div>
		<div class="col-md-6">
			<h3>Lieu</h3>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20966.283543457874!2d2.925729941484722!3d48.93852831485739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e8a3937d289add%3A0x40b82c3688c59d0!2s77470+Fublaines!5e0!3m2!1sfr!2sfr!4v1490619463724" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>