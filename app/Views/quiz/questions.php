<div id="bloc_content" class="quiz">
	<div id="quizz" class="form row">
		<img src="img/netflix_quiz.jpg" alt="Logo Netflix avec photos de séries'">
		<hr>
		<?php
		if (isset($_SESSION['auth'])) {
			?>
			<?php foreach ($quizQuestions as $quizQuestion): ?>
				<div id="countdown"></div>
				<h2 class="question_nb">Question <?= $quizQuestion->question_number; ?>/<?= $nb; ?></h2>
				<h2><?= $quizQuestion->question; ?></h2>
				<form id="quiz" name="quiz" method="post" action="#menu">
					<ul class="answers">
						<?php foreach ($quizAnswers as $quizAnswer): ?>
							<li class="answer">
								<label for"<?= $quizAnswer->id ?>">
								<input name="answer" type="radio" checked
								       id="<?= $quizAnswer->id ?>"
								       value="<?= $quizAnswer->answer; ?>"/><?= $quizAnswer->answer; ?>
								<input name="question_id" type="hidden" value="<?= $quizAnswer->question_number; ?>"/>
							</li>
						<?php endforeach; ?>
					</ul>
					<button id="login_form_btn" type="submit" name="submit_quiz" class="btn btn-default"
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

<script>
	var total = 2;
	var seconds = parseInt(total % 60);
	
	function CheckTime() {
		document.getElementById("countdown").innerHTML
			= '<i class="far fa-clock"></i> ' + ' Temps restant : ' + '<span>' + seconds + '</span>';
		if (total <= 0) {
			alert("Temps ecoulé. Question suivante!");
			var form = getElementById("quiz");
			setTimeout(form.submit(), 1);
		} else {
			total = total - 1;
			seconds = parseInt(total % 60);
			setTimeout('CheckTime()', 1000);
		}
	}
	
	setTimeout('CheckTime()', 1000);
</script>