<div id="bloc_content">
	<div id="quizz" class="form row">
		<img src="img/netflix_quiz.jpg" alt="Logo Netflix avec photos de séries'">
		<?php
		if (isset($_SESSION['auth'])) {
			if ($quiz_score != NULL) {
				?>
				<h2 class="col-xs-12">Tu as déjà terminé le quiz !</h2>
				<hr>
				<form method="post" action="#menu">
					<a class="startQuiz btn" name="starQuiz" href="?p=quiz.result" type="submit" id="login_form_btn"
					   aria-hidden="true">Voir les résultats</a>
				</form>
				<?php
			} else {
				?>
				<h2 class="col-xs-12">Connais-tu vraiment l'univers Netflix ?</h2>
				<h2 class="col-xs-12">Prêt à tenter ta chance ?</h2>
				<hr>
				
				<div class="quiz_details">
					<p>Ce quiz comporte <?= $nb; ?> questions</p>
					<p>Durée approximative : <?= $nb * .5; ?> minutes</p> <!-- Nb de questions * (30 sec/Question) -->
				</div>
				<form method="post" action="#menu">
					<a class="startQuiz btn" name="starQuiz" href="?p=quiz.questions&q=1" type="submit"
					   id="login_form_btn"
					   aria-hidden="true">Commencer</a>
				</form>
				<?php
			}
		} else {
			?>
			<div id="link_login_btns" class="col-xs-12">
				<h2 class="col-xs-12">Connais-tu vraiment l'univers Netflix ?</h2>
				<h2 class="col-xs-12">Prêt à tenter ta chance ?</h2>
				<hr>
				<div class="text-center">
					<a href="index.php?p=users.register" type="button" id="login_form_btn" class="btn"
					   aria-hidden="true"><i
								class="fas fa-user-plus" aria-hidden="true"></i> Inscription</a>
					<a href="index.php?p=users.login" type="button" id="login_form_btn" class="btn"
					   aria-hidden="true"><i
								class="fas fa-sign-in-alt" aria-hidden="true"></i> Connexion</a>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</div>