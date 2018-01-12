<div id="bloc_content">
	<form method="post" action="#" class="form">
		<h3>INSCRIPTION</h3>
		<hr>
		<h4>Complétez tous les champs pour vous inscrire</h4>
			<?= $form->input('username', 'Pseudo : ');?>
			<?= $form->input('email', 'Email : ', ['type' => 'email']); ?>
			<?= $form->input('password', 'Mot de passe : ', ['type' => 'password']); ?>
			<?= $form->input('password_confirm', 'Confirmez votre mot de passe : ', ['type' => 'password']); ?>
		<hr>
		<div class="text-center">
			<button id="register_form_btn" type="submit" class="btn btn-default" aria-hidden="true"><i class="fa fa-user-plus" aria-hidden="true"></i> M'inscrire</button>
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