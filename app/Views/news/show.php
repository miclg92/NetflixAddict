<!-- Contenu de actu demandée -->

<div id="bloc_content" class="actus">
	
	<div class="row">
		<p class="col-xs-5 return"><a href="index.php?p=news.index"><i class="fas fa-reply" aria-hidden="true"></i>
				Toutes les actus</a></p>
	</div>
	
	<div class="row news_content">
		<div class="col-xs-12">
			<img class="thumbnail col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8" src="<?= $new->image ?>"
			     alt="<?= $new->image_name ?>">
		</div>
		<h2 class="new_title col-xs-12"><?= $new->title; ?></h2>
		<span class="col-xs-12"><em>Publiée le <?= $new->publish_date_fr; ?></em></span>
		<p class="col-xs-12"><?= $new->content; ?></p>
	</div>
	
	<hr>
	
	<div id="add-comment" class="row">
		<h3 class="col-xs-12">Laisser un commentaire relatif à <span>cette actu</span></h3></br></br>
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
				<input type="hidden" name="news_id" value="<?= $new->id ?>">
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
	
	<hr>
	
	<div id="comments">
		<h3 class="col-xs-12">Tous les commentaires relatifs à <span>cette actu</span></h3>
		
		<?php
		if (!empty($comments)) {
			?>
			<?php foreach ($comments as $comment): ?>
				<form method="post">
					<input type="hidden" name="id" value="<?= $comment->id ?>">
					<div id="full_comment" class="col-xs-12">
						<div id="comments_details" class="col-xs-12">
							<p class="col-sm-2 col-xs-4"><i class="fas fa-user"
							                                aria-hidden="true"></i> <?= $comment->author ?></p>
							<p class="col-md-3 col-sm-4 col-xs-7"><i class="far fa-calendar-alt" aria-hidden="true"></i>
								<?= $comment->date_comment ?></p>
							<?php
							if (isset($_SESSION['user'])) {
								if ($comment->is_signaled == 1) {
									?>
									<button type="submit" name="signal_comment" disabled
									        class="btn-signal col-md-3 col-sm-4 col-xs-4"><i
												class="fas fa-exclamation-triangle signal_icon" aria-hidden="true"></i>
										Commentaire signalé
									</button>
									<?php
								} else {
									?>
									<button type="submit" name="signal_comment" class="btn-signal col-sm-2 col-xs-2"><i
												class="fas fa-exclamation-triangle signal_icon" aria-hidden="true"></i>
										Signaler
									</button>
									<?php
								}
							} else {
								?>
								<button type="submit" name="signal_comment" disabled
								        class="btn-signal col-lg-5 col-md-6 col-xs-8"><i
											class="fas fa-exclamation-triangle signal_icon" aria-hidden="true"></i>
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