<div id="bloc_content" class="quiz">
	<div id="quizz" class="form row">
		<img src="img/netflix_quiz.jpg" alt="Logo Netflix avec photos de séries'">
		<?php
		if (isset($_SESSION['auth'])) {
			if ($quiz_score != NULL) {
				?>
				<?php foreach ($quizQuestions as $question): ?>
					<div class="correction">
						<h2 class="question_nb"> Question <?= $question->question_number; ?></h2>
						<h2 class="question"><?= $question->question; ?></h2>
						<ul class="answers">
							<li class="answer">La bonne réponse est : <span><?= $question->answer; ?></span></li>
						</ul>
					</div>
					<hr>
				<?php endforeach; ?>
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