<?php
if(isset($_SESSION['auth']) && isset($_SESSION['user']) && $_SESSION['user']->flag == 2){
	?>
	<div id="bloc_content">
		<div id="update" class="row form">
			<a href="?p=users.account" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
			<h3>Mise à jour des séries disponibles</h3>
			<form method="post" action="?p=admin.series.updateSeries">
				<div >
					<button id="animer" type="submit" class="col-xs-12" aria-hidden="true"><i class="fa fa-spinner" aria-hidden="true"></i> Actualiser</button>
					<a href="?p=users.account" type="button" id="login_form_btn" class="btn" aria-hidden="true"><i class="fa fa-reply" aria-hidden="true"></i> Annuler</a>
				</div>
			</form>
			
			<div class="progress progress-striped active">
				<div class="progress-bar progress-bar-danger"></div>
			</div>
		</div>
	</div>
	<?php
} else {
	$_SESSION['flash']['danger'] = "Vous ne pouvez pas afficher cette page. Veuillez vous connecter en tant qu'administrateur";
}
?>


<!-- Barre de progression -->
<script>
	function timer(n) {
		$(".progress-bar").css("width", n + "%");
		$("#pourcentage").text(n + "%");
		if(n < 100) {
			setTimeout(function() {
				timer(n + 10);
			}, 200);
		}
	}
	$(function (){
		$("#animer").click(function() {
			timer(0);
		});
	});
</script>
