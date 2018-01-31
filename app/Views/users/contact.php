<div id="bloc_content">
	<div id="contact" class="form">
		<form method="post" action="#">
			<a href="index.php" type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">X</span></a>
			<h3>CONTACT</h3>
			<hr>
			<h4>Complétez tous les champs pour nous contacter</h4>
			<div class="form-group">
				<label for="pseudo">Pseudo</label>
				<input type="text" name="pseudo" id="pseudo" value="<?= $_SESSION['user']->username; ?>"
				       class="form-control"
				       disabled>
			</div>
			<div class="form-group">
				<label for="mail">Email</label>
				<input type="text" name="mail" id="mail" value="<?= $_SESSION['user']->email; ?>" class="form-control"
				       disabled>
			</div>
			<?= $form->input('sujet', 'Sujet'); ?>
			<?= $form->input('message', 'Message', ['type' => 'textarea']); ?>
			<hr>
			<div class="text-center">
				<button id="register_form_btn" type="submit" class="btn btn-default" aria-hidden="true"><i class="fa
					fa-envelope-o" aria-hidden="true"></i> Envoyer
				</button>
				<a href="index.php" type="button" id="login_form_btn" class="btn" aria-hidden="true"><i
							class="fa fa-reply" aria-hidden="true"></i> Annuler</a>
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