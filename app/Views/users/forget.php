<div id="bloc_content">
	<div id="forget_password" class="form row">
		<form method="post">
			<a href="index.php?p=users.login" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
			<br>
			<h3>Mot de passe oublié</h3>
			<p class="col-xs-12">Veuillez indiquez votre adresse mail afin de pouvoir modifier votre mot de passe</p>
			</br>
			</br>
			<?= $form->input('email', 'Email : ', ['type' => 'email']); ?>
			<div class="text-center">
				<button id="forget_passwd_btn" type="submit" class="btn btn-default" aria-hidden="true"><i class="fa fa-floppy-o" aria-hidden="true"></i> Envoyer</button>
				<a href="index.php?p=users.login" type="button" id="login_form_btn" class="btn" aria-hidden="true"><i class="fa fa-reply" aria-hidden="true"></i> Annuler</a>
			</div>
			
			<?php if($errors): ?>
				<div class="errors">
					Aucun compte ne correspond à cet email.
				</div>
			<?php endif; ?>
		</form>
	</div>
</div>
