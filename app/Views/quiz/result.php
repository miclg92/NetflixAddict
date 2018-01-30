<div id="bloc_content">
	<div id="quizz" class="form row">
		<img src="img/netflix_quiz.jpg" alt="Logo Netflix avec photos de séries'">
		<?php
		if (isset($_SESSION['auth'])) {
			if ($quiz_score != NULL) {
				?>
				<h2 class="col-xs-12">Bravo, tu as terminé le quiz !</h2>
				<h2 class="col-xs-12">Voici tes résultats</h2>
				<hr>
				<div class="quiz_results">
					<h3>Nombre de question : <span><?= $nb; ?></span></h3>
					<h3>Bonnes réponses : <span><?= $quiz_correct; ?></span></h3>
					<h3>Réussite : <span><?= $quiz_score; ?>%</span></h3>
					<h3>Statut membre : <span><?= $quiz_level; ?></span></h3>
				</div>
				<form method="post" action="#menu">
					<a class="startQuiz btn" name="starQuiz" href="?p=quiz.answers" type="submit" id="login_form_btn"
					   aria-hidden="true">Voir les réponses</a>
				</form>
				<?php
			} else {
				?>
				<h2 class="col-xs-12">Pour faire ce quiz, cliquez <a href="?p=quiz.start">ici</a></h2>
				<?php
			}
		} else {
			?>
			<h2 class="col-xs-12">Pour faire ce quiz, cliquez <a href="?p=quiz.start">ici</a></h2>
			<?php
		}
		?>
	</div>
</div>