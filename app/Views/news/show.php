<!-- Contenu de actu demandée -->

<div id="bloc_content">
	
	<div class="row">
		<p class="col-xs-5 return"><a href="index.php?p=news.index"><i class="fa fa-reply" aria-hidden="true"></i>
				Toutes les actus</a></p>
	</div>
	
	<div class="row news_content">
		<div class="col-xs-12">
			<img class="thumbnail col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6" src="<?= $new->image ?>" alt="<?= $new->image_name ?>">
		</div>
		<h2 class="new_title"><?= $new->title;?></h2>
		<span class="col-xs-offset-1 col-xs-10"><em>Publiée le <?= $new->publish_date_fr; ?></em></span>
		<p class="col-xs-offset-1 col-xs-10"><?= $new->content; ?></p>
	</div>
	
<!--	--><?php
//	if(isset($_SESSION['auth'])){
//		?>
<!--		<div id="add-comment">-->
<!--			<form method="post">-->
<!--				<h3>Commenter cet épisode</h3></br></br>-->
<!--				<input type= "hidden" name="id" value="--><?//= $post->id ?><!--">-->
<!--				--><?//= $form->input('comment', 'Commentaire : ');?>
<!--				<button class="btn_post">Publier</button>-->
<!--				--><?php //if($errors): ?>
<!--					<div class="errors">-->
<!--						Merci de renseigner votre commentaire.-->
<!--					</div>-->
<!--				--><?php //endif; ?>
<!--			</form>-->
<!--		</div>-->
<!--		--><?php
//	} else {
//		?>
<!--		<div id="add-comment">-->
<!--			<form method="post">-->
<!--				<h3>Commenter cet épisode</h3></br></br>-->
<!--				<p class="no_show">Envie de laisser un commentaire ?-->
<!--					<br>-->
<!--					<a href="index.php?p=users.login"> Connectez-vous </a> ou <a href="index.php?p=users.register"> Créez un compte </a> ;-)</p>-->
<!--			</form>-->
<!--		</div>-->
<!--		--><?php
//	}
//	?>
<!--	-->
<!--	--><?php
//	if(!empty($comments)){
//		?>
<!--		<div class="comments">-->
<!--			<h3>Commentaires liés à cet épisode</h3>-->
<!--			--><?php //foreach($comments as $comment): ?>
<!--				<form method="post">-->
<!--					<input type= "hidden" name="id" value="--><?//= $comment->id ?><!--">-->
<!--					<p class="comment_author">Commentaire de --><?//= $comment->author;?><!--<span><em>, le --><?//= $comment->date_comment; ?><!--</span></em></p>-->
<!--					--><?php
//					if(isset($_SESSION['user'])) {
//						if ($_SESSION['user']->flag == 1) {
//							?>
<!--							<form action="" method="post" style="display: inline;">-->
<!--								<p class="comment_text"><em>--><?//= $comment->comment; ?><!--</em>-->
<!--									<input type="hidden" name="id" value="--><?//= $comment->id; ?><!--">-->
<!--									--><?php
//									if($comment->is_signaled == 1){
//										?>
<!--										<button type="button" name="signal_comment" disabled class="btn-disabled">Commentaire signalé. En cours de traitement...</button>-->
<!--										--><?php
//									} else{
//										?>
<!--										<button type="submit" name="signal_comment" class="btn-signal">Signaler ce commentaire</button>-->
<!--										--><?php
//									}
//									?>
<!--							</form>-->
<!--							--><?php
//						} elseif ($_SESSION['user']->flag == 2) {
//							?>
<!--							<p class="comment_text"><em>--><?//= $comment->comment; ?><!--</p>-->
<!--							--><?php
//						}
//					}	else {
//						?>
<!--						<form action="" method="post" style="display: inline;">-->
<!--							<p class="comment_text"><em>--><?//= $comment->comment; ?><!--</em>-->
<!--								<input type="hidden" name="id" value="--><?//= $comment->id; ?><!--">-->
<!--								--><?php
//								if($comment->is_signaled == 1){
//									?>
<!--									<button type="button" name="signal_comment" disabled class="btn-disabled">Commentaire signalé. En cours de traitement...</button>-->
<!--									--><?php
//								} else{
//									?>
<!--									<button type="submit" name="signal_comment" class="btn-signal">Signaler ce commentaire</button>-->
<!--									--><?php
//								}
//								?>
<!--						</form>-->
<!--						--><?php
//					}
//					?>
<!--				</form>-->
<!--			--><?php //endforeach; ?>
<!--		</div>-->
<!--		--><?php
//	} else{
//		?>
<!--		<div class="comments">-->
<!--			<h3>Commentaires liés à cet épisode</h3>-->
<!--			<p class="no_show">Aucun commentaire pour l'instant, soyez le premier ;-)</p>-->
<!--		</div>-->
<!--		--><?php
//	}
//	?>
<!--	<button class="btn_all_episodes"><a href="index.php?p=posts.allEpisodes"><i class="fa fa-book" aria-hidden="true"></i>Tous les épisodes</a></button>-->
