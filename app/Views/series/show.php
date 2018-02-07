<!-- Contenu d'une série spécifique -->

<div id="bloc_content">
	
	<div class="row">
		<p class="col-xs-5 return"><a href="index.php"><i class="fa fa-reply" aria-hidden="true"></i>
				Retour</a></p>
	</div>
	
	<?php
	if (isset($_SESSION['auth'])) {
		if ($_SESSION['user']->flag == 1) {
			if ($isFavorite == 0) {
				?>
				<form method="post" action="#">
					<div id="follow_serie">
						<button type="submit" name="followSerie" id="follow_serie_btn">+</button>
						<p id="follow_serie_text">Suivre cette Série</p>
					</div>
				</form>
				<?php
			} else {
				?>
				<form method="post" action="?p=series.deleteFavorite" class="col-xs-12">
					<div id="stop_follow_serie" class="col-xs-12">
						<input type="hidden" name="serieId" value="<?= $serie->id ?>">
						<button type="submit" name="stopFollowSerie" id="stop_follow_serie_btn">X</button>
						<p id="stop_follow_serie_text">Ne plus suivre cette Série</p>
					</div>
				</form>
				<?php
			}
		}
	} else {
		?>
		<form method="post" action="#">
			<div id="follow_serie">
				<button type="submit" name="followSerie" id="follow_serie_btn" disabled>+</button>
				<p id="follow_serie_text">Pour suivre cette Série, veuillez vous connecter</p>
			</div>
		</form>
		<?php
	}
	?>
	
	<div id="serie" class="row">
		<div id="serie_image" class="col-md-5 col-xs-12">
			<img class="col-md-12 col-sm-8 col-xs-12 thumbnail" src="<?= $serie->image ?>" alt="<?= $serie->title ?>">
		</div>
		
		<div id="serie_details" class="col-md-7 col-xs-12">
			<p class="col-md-3"><?= $serie->seasons ?> saisons</p>
			<p class="col-md-3"><?= $serie->episodes ?> épisodes</p>
			<p class="col-md-3"><?= $serie->followers ?> followers</p>
			<p class="col-md-3">Statut : <?= $status ?></p>
		</div>
		
		<div id="serie_title" class="col-md-7 col-xs-12">
			<h2><?= $serie->title ?> (<?= $serie->year ?>)</h2>
		</div>
		
		<div id="serie_description" class="col-md-7 col-xs-12">
			<p><?= $serie->description ?></p>
		</div>
		
		<?php
		if (isset($_SESSION['auth'])) {
			if ($_SESSION['user']->flag == 1) {
				if ($isNoted == 0) {
					?>
					<form method="post" action="#" class="col-md-7 col-xs-12 rating">
						<h2>Noter cette série</h2>
						<?php
						for ($i = 5; $i > 0; $i--) {
							?>
							<input name="note" id="<?= $i ?>" value="<?= $i ?>" type="radio"
							       onchange='this.form.submit();'>
							<label for="<?= $i ?>">☆</label>
							<?php
						}
						?>
					</form>
					<?php
				} else {
					?>
					<div class="col-md-7 col-xs-12 rating">
						<?php foreach ($notes as $note): ?>
							<h2>Votre note : <?= $note->note ?>/5</h2>
						<?php endforeach; ?>
					</div>
					<?php
				}
			}
		} else {
			?>
			<form method="post" action="#" class="col-md-7 col-xs-12 rating">
				<h2>Pour noter cette série, veuillez vous connecter</h2>
				<?php
				for ($i = 5; $i > 0; $i--) {
					?>
					<input disabled name="note" id="<?= $i ?>" value="<?= $i ?>" type="radio"
					       onchange='this.form.submit();'>
					<label for="<?= $i ?>">☆</label>
					<?php
				}
				?>
			</form>
			<?php
		}
		?>
		
		<div id="actual_rating" class="col-md-7 col-xs-12">
			<?php foreach ($averageNotes as $averageNote): ?>
				<?php
				$averageNote = round($averageNote, 1) + 0;
				if ($averageNote == 0) {
					?>
					<h2>Cette série n'a pas encore été notée. Soyez le premier !</h2>
					<?php
				} else {
					?>
					<h2>Note globale : <?= $averageNote ?>/5</h2>
					<?php
				}
				?>
			<?php endforeach; ?>
		</div>
	</div>
	
	<hr>
	
	<div id="add-comment" class="row">
		<h3 class="col-xs-12">Laisser un commentaire relatif à la série <span>"<?= $serie->title ?>"</span>
		</h3></br></br>
		<?php
		if (isset($_SESSION['auth'])) {
			?>
			<div class="comments_rules row">
				<p class="col-xs-12">Avant de laisser un commentaire, merci de prendre connaissance des règles de bonne
					conduite.</p>
				<p class="col-xs-12">En cas de manquement, un administrateur pourrait vous contacter, et votre compte
					pourrait être suspendu.</p>
				<ol class="col-xs-12">
					<li>- Netflix'Addict ne permet pas la diffusion de séries en streaming</li>
					<li>- Il est interdit de diffuser des liens de partages illégaux</li>
					<li>- Courtoisie et respect entre membres sont indispensables</li>
					<li>- Eviter les SPOILERS... Pensez à ceux qui n'ont pas encore regardé la série</li>
					<li>- Signalez les commentaires inappropriés à l'aide du bouton prévu à cet effet</li>
				</ol>
			</div>
			<form class="col-xs-12 center-block" method="post">
				<input type="hidden" name="serie_id" value="<?= $serie->id ?>">
				<?= $form->input('comment', 'Votre commentaire : '); ?>
				<button class="btn">Publier</button>
				<?php if ($errors): ?>
					<div class="errors">
						Merci de renseigner votre commentaire.
					</div>
				<?php endif; ?>
			</form>
			<?php
		} else {
			?>
			<p class="col-xs-12">Envie de laisser un commentaire ?</p>
			<br>
			<div id="link_login_btns" class="col-xs-12">
				<div class="register_btn col-xs-6">
					<a href="index.php?p=users.register" class="btn not_logged"><i class="fa fa-user-plus"
					                                                               aria-hidden="true"></i>
						Inscrivez-vous</a>
				</div>
				<div class="login_btn col-xs-6">
					<a href="index.php?p=users.login" class="btn not_logged"><i class="fa fa-sign-in"
					                                                            aria-hidden="true"></i>
						Connectez-vous</a>
				</div>
			</div>
			<?php
		}
		?>
	</div>
	
	<hr>
	
	<div id="comments">
		<h3 class="col-xs-12">Tous les commentaires relatifs à la série <span>"<?= $serie->title ?>"</span></h3>
		
		<?php
		if (!empty($comments)) {
			?>
			<?php foreach ($comments as $comment): ?>
				<form method="post">
					<input type="hidden" name="id" value="<?= $comment->id ?>">
					<div id="full_comment" class="col-xs-12">
						<div id="comments_details" class="col-xs-12">
							<p class="col-sm-2 col-xs-4"><i class="fa fa-user"
							                                aria-hidden="true"></i> <?= $comment->author ?></p>
							<p class="col-md-3 col-sm-4 col-xs-7"><i class="fa fa-calendar" aria-hidden="true"></i>
								<?= $comment->date_comment ?></p>
							<?php
							if (isset($_SESSION['user'])) {
								if ($comment->is_signaled == 1) {
									?>
									<button type="submit" name="signal_comment" disabled
									        class="btn-signal col-md-3 col-sm-4 col-xs-4"><i
												class="fa fa-exclamation-triangle signal_icon" aria-hidden="true"></i>
										Commentaire signalé
									</button>
									<?php
								} else {
									?>
									<button type="submit" name="signal_comment" class="btn-signal col-sm-2 col-xs-2"><i
												class="fa fa-exclamation-triangle signal_icon" aria-hidden="true"></i>
										Signaler
									</button>
									<?php
								}
							} else {
								?>
								<button type="submit" name="signal_comment" disabled
								        class="btn-signal col-lg-5 col-md-6 col-xs-8"><i
											class="fa fa-exclamation-triangle signal_icon" aria-hidden="true"></i>
									Pour signaler ce commentaire, veuillez vous connecter
								</button>
								<?php
							}
							?>
						</div>
						<div id="comments_content" class="col-xs-12">
							<p class="col-xs-12"><?= $comment->comment ?></p>
						</div>
					</div>
				</form>
			<?php endforeach; ?>
			<?php
		} else {
			?>
			<p class="no_show col-xs-12">Aucun commentaire pour l'instant, soyez le premier ;-)</p>
			<?php
		}
		?>
	</div>
</div>