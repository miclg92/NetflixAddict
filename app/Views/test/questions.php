<div id="bloc_content" class="quiEsTu">
	<div id="personality" class="form row">
		<img id="ancre_img" src="img/stranger_things_groupe.jpg"
		     alt="Photo des 5 enfants principaux de la série Netflix 'Stranger things'">
		<hr>
		<?php
		if (isset($_SESSION['auth'])) {
			?>
			<?php foreach ($testQuestions as $testQuestion): ?>
				<h2 class="question_nb">Question <?= $testQuestion->question_number; ?>/<?= $nb; ?></h2>
				<img class="question_img img-responsive center-block" src="<?= $testQuestion->picture; ?>"
				     alt="<?= $testQuestion->picture; ?>">
				<h2><?= $testQuestion->question; ?></h2>
				<form method="post" action="#ancre_img">
					<ul class="answers">
						<?php foreach ($testAnswers as $testAnswer): ?>
							<li class="answer">
								<label for"<?= $testAnswer->id ?>">
								<input name="answer" type="radio"
								       id="<?= $testAnswer->id ?>"
								       value="<?= $testAnswer->answer_index; ?>"/><?= $testAnswer->answer; ?>
								<input name="question_id" type="hidden" value="<?= $testAnswer->question_number; ?>"/>
							</li>
						<?php endforeach; ?>
					</ul>
					<button id=" login_form_btn" type="submit" name="submit_quiz" class="btn btn-default"
					        aria-hidden="true">
						<i class="fas fa-check" aria-hidden="true"></i> Valider
					</button>
					<?php if ($errors): ?>
						<div class="errors">
							Aucune réponse sélectionnée !!!
						</div>
					<?php endif; ?>
				</form>
			<?php endforeach; ?>
			<?php
		} else {
			?>
			<div id="link_login_btns" class="col-xs-12">
				<div class="register_btn col-xs-6">
					<a href="index.php?p=users.register" class="btn not_logged"><i class="fas fa-user-plus"
					                                                               aria-hidden="true"></i>
						Inscrivez-vous</a>
				</div>
				<div class="login_btn col-xs-6">
					<a href="index.php?p=users.login" class="btn not_logged"><i class="fas fa-sign-in-alt"
					                                                            aria-hidden="true"></i>
						Connectez-vous</a>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</div>