<?php
if (isset($_SESSION['auth'])) {
	?>
	<div id="bloc_content" class="compte">
		<div id="edit-passwd" class="form">
			<form method="post" action="?p=users.askPasswdBeforeDelete">
				<a href="index.php?p=users.account" type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">X</span></a>
				<br>
				<h2>Pour supprimer définitivement votre compte, veuillez indiquer votre mot de passe actuel</h2>
				<h3>Cette action est sans retour possible</h3>
				<div class="form-group">
					<label for="check_password">Mot de passe actuel</label>
					<input name="check_password" type="password">
				</div>
				<hr>
				<div id="ask-passwd" class="text-center">
					<input type="hidden" name="id" value="<?= $_SESSION['auth']; ?>">
					<button id="delete_account_btn" type="submit" aria-hidden="true"><i class="fas fa-trash-alt"
					                                                                    aria-hidden="true"></i>
						Supprimer mon compte
					</button>
					<a href="index.php?p=users.account" type="button" id="login_form_btn" class="btn"
					   aria-hidden="true"><i class="fas fa-reply" aria-hidden="true"></i> Annuler</a>
				</div>
				<?php if (!empty($errors)): ?>
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
