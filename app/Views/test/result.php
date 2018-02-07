<div id="bloc_content">
	<div id="personality" class="form row">
		<img src="img/stranger_things_groupe.jpg"
		     alt="Photo des 5 enfants principaux de la série Netflix 'Stranger things'">
		<?php
		if (isset($_SESSION['auth'])) {
			if ($_SESSION['user']->personality != NULL) {
				?>
				<h2 class="col-xs-12">Bravo, tu as terminé le test !</h2>
				<hr>
				<div class="quiz_results">
					<h3>Tu es...... <span><?= $personality_name; ?></span></h3>
					<p><?= $personality_desc; ?></p>
					<img class="img-responsive center-block" src="<?= $personality_img; ?>"
					     alt="<?= $personality_img; ?>">
				</div>
				<?php
			} else {
				?>
				<h2 class="col-xs-12">Pour faire ce test, cliquez <a href="?p=quiz.start">ici</a></h2>
				<?php
			}
		} else {
			?>
			<h2 class="col-xs-12">Pour faire ce test, cliquez <a href="?p=quiz.start">ici</a></h2>
			<?php
		}
		?>
	</div>
</div>