<?php
if(isset($_SESSION['auth'])){
?>
	<div id="bloc_content">
		<div id="edit_name" class="form">
			<form method="post" action="">
				<a href="index.php?p=users.account" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
				<br>
				<h3>Modifier mon pseudo</h3>
				<?= $form->input('username', 'Mon nouveau pseudo : ');?>
				<div class="text-center">
					<button id="edit_name_btn" type="submit" class="btn btn-default" aria-hidden="true"><i class="fa fa-floppy-o" aria-hidden="true"></i> Enregistrer</button>
					<a href="index.php?p=users.account" type="button" id="login_form_btn" class="btn" aria-hidden="true"><i class="fa fa-reply" aria-hidden="true"></i> Annuler</a>
				</div>
				
				<?php if(!empty($errors)): ?>
					<div class="errors">
						<ul>
							<?php foreach ($errors as $error): ?>
								<li><?= $error; ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>
			</form>
		</div>
	</div>
<?php
} else {
	$_SESSION['flash']['danger'] = "Vous ne pouvez pas afficher cette page. Veuillez vous connecter ou créer un compte utilisateur";
}
?>