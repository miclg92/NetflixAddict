<div id="bloc_content">
	<form method="post" action="#" class="form">
		<h3>CONNEXION</h3>
		<hr>
		<h4>Indiquez votre pseudo et votre mot de passe</h4>
			<?= $form->input('username', 'Pseudo : ');?>
			<?= $form->input('password', 'Mot de passe : ', ['type' => 'password']); ?>
			<?= $form->checkbox('remember', 'Se souvenir de moi', '1'); ?>
		<hr>
		<div class="text-center">
			<a href="index.php?p=users.forget">Mot de passe oublié</a>
		</div>
		<div class="text-center">
			<button id="login_form_btn" type="submit" class="btn btn-default" aria-hidden="true"><i class="fa fa-sign-in" aria-hidden="true"></i> Connexion</button>
		</div>
		
		
		<?php if($errors): ?>
			<div class="errors">
				Identifiant ou mot de passe incorrect
			</div>
		<?php endif; ?>
	</form>
</div>