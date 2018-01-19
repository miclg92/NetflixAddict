<div id="bloc_content">
	<div id="reset-passwd" class="form row">
		<form method="post" action="">
			<a href="index.php?p=users.login" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
			<br>
			<h3>Réinitialiser mon mot de passe</h3>
			<p class="col-xs-12">Remplissez les deux champs puis validez</p>
			<br><br>
			<div class="form-group">
				<label for="password">Nouveau mot de passe</label>
				<input name="password" type="password">
			</div>
			<div class="form-group">
				<label for="password">Confirmez nouveau mot de passe</label>
				<input name="password_confirm" type="password">
			</div>
			<hr>
			<div class="text-center">
				<button id="reinit_passwd_btn" type="submit" class="btn btn-default" aria-hidden="true"><i class="fa fa-floppy-o" aria-hidden="true"></i> Réinitialiser</button>
				<a href="index.php?p=users.login" type="button" id="login_form_btn" class="btn" aria-hidden="true"><i class="fa fa-reply" aria-hidden="true"></i> Annuler</a>
			</div>
			
			<?php if($errors): ?>
				<div class="errors">
					Merci de vérifier votre mot de passe
				</div>
			<?php endif; ?>
		</form>
	</div>
</div>
