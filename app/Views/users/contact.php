<div id="bloc_content" class="contact">
	<div id="contact" class="form">
		<form method="post" action="#">
			<a href="index.php" type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">X</span></a>
			<h3>CONTACT</h3>
			<hr>
			<h4>Complétez tous les champs pour nous contacter</h4>
			<?php if (isset($_SESSION['user']->username)) {
				?>
				<div class="form-group">
					
					<label for="pseudo">Pseudo</label>
					<input type="text" name="pseudo" id="pseudo" value="<?= $_SESSION['user']->username; ?>"
					       class="form-control" disabled>
				</div>
				<?php
			}
			?>
			<div class="form-group">
				<label for="mail">Email</label>
				<input type="text" name="mail" id="mail" value="<?= $_SESSION['user']->email; ?>"
				       class="form-control"
					<?php if (isset($_SESSION['user']->email)) {
						?>
						disabled
						<?php
					} ?> >
			</div>
			<?= $form->input('sujet', 'Sujet'); ?>
			<?= $form->input('message', 'Message', ['type' => 'textarea']); ?>
			<hr>
			<div align="center" class="g-recaptcha" data-sitekey="6Lce-kMUAAAAAJVp5ZiEXgTcChhDrPsu0_W4dUhm"></div>
			<hr>
			<div class="text-center">
				<button id="register_form_btn" type="submit" class="btn btn-default" aria-hidden="true"><i class="fas
					fa-envelope" aria-hidden="true"></i> Envoyer
				</button>
				<a href="index.php" type="button" id="login_form_btn" class="btn" aria-hidden="true"><i
							class="fas fa-reply" aria-hidden="true"></i> Annuler</a>
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