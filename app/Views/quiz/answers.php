<div id="bloc_content">
	<div id="quizz" class="form row">
		<img src="img/netflix_quiz.jpg" alt="Logo Netflix avec photos de séries'">
		<hr>
		<?php
		if (isset($_SESSION['auth'])) {
			?>
			<?php foreach ($quizQuestions as $question): ?>
				<h2 class="question_nb"> Question <?= $question->question_number; ?></h2>
				<form method="post" action="#menu">
					<ul class="answers">
						<li class="answer">
							<input name="answer" type="radio"/><?= $question->answer; ?>
						</li>
					</ul>
				</form>
				
				<!--				<form method="post" action="#menu">-->
				<!--					<ul class="answers">-->
				<!--						--><?php //foreach ($question->answer as $answer): ?>
				<!--							<li class="answer">-->
				<!--								<input name="answer" type="radio"/>--><?//= $answer; ?>
				<!--							</li>-->
				<!--						--><?php //endforeach; ?>
				<!--					</ul>-->
				<!--				</form>-->
				
				<?php
			endforeach; ?>
			
			<?php
			
		}
		?>
	</div>
</div>