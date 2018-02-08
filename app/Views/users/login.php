<div id="bloc_content">
	<div id="login" class="form">
		<form method="post" action="#">
			<a href="index.php" type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">X</span></a>
			<h3>CONNEXION</h3>
			<hr>
			<h4>Indiquez votre pseudo et votre mot de passe</h4>
			<?= $form->input('username', 'Pseudo'); ?>
			<?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
			<?= $form->checkbox('remember', 'Se souvenir de moi', '1'); ?>
			<hr>
			<div class="text-center">
				<a href="index.php?p=users.forget">Mot de passe oublié</a>
			</div>
			<div class="text-center">
				<button id="login_form_btn" type="submit" class="btn btn-default" aria-hidden="true"><i
							class="fas fa-sign-in-alt" aria-hidden="true"></i> Connexion
				</button>
				<a href="index.php" type="button" id="login_form_btn" class="btn" aria-hidden="true"><i
							class="fas fa-reply" aria-hidden="true"></i> Annuler</a>
			</div>
			
			
			<?php if ($errors): ?>
				<div class="errors">
					Identifiant ou mot de passe incorrect
				</div>
			<?php endif; ?>
		</form>
	</div>
</div>