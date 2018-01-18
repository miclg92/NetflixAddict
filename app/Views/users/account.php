<?php
if(isset($_SESSION['auth'])){
?>
	<div id="bloc_content">
		<div id="account" class="form">
			<?php
			if($_SESSION['user']->flag == 1){
			?>
				<a href="index.php" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
				<h3><?= $_SESSION['user']->username;?> - Mon compte</h3>
				</br>
				<table class="table">
					<thead>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					</thead>
					
					<tbody>
					<tr>
						<td class="param">Mon Pseudo : </td>
						<td class="param_value"><?= $_SESSION['user']->username; ?></td>
						<td><a class="btn" href="?p=users.editName&id=<?= $_SESSION['auth']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Modifier</a></td>
					</tr>
					<tr>
						<td class="param">Mon Email : </td>
						<td class="param_value"><?= $_SESSION['user']->email; ?></td>
						<td><a class="btn" href="?p=users.editMail&id=<?= $_SESSION['auth']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Modifier</a></td>
					</tr>
					<tr>
						<td class="param">Mon mot de passe : </td>
						<td class="param_value">********</td>
						<td><a class="btn" href="?p=users.changePasswd&id=<?= $_SESSION['auth']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Modifier</a></td>
					</tr>
					<tr>
						<td class="param">Mes séries favorites : </td>
						<td class="param_value"></td>
						<td><a class="btn" href="?p=series.favorites"><i class="fa fa-pencil" aria-hidden="true"></i> Gérer</a></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					
					</tbody>
				</table>
			<?php
			} elseif($_SESSION['user']->flag == 2) {
			?>
				<a href="index.php" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></a>
				<h3><?= $_SESSION['user']->username;?> - Mon compte</h3>
				</br>
				<table class="table">
					<caption>Gestion de mon compte</caption>
					<thead>
						<tr>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</thead>
					
					<tbody id="admin_account">
						<tr>
							<td class="param">Mon Pseudo : </td>
							<td class="param_value"><?= $_SESSION['user']->username; ?></td>
							<td><a class="btn" href="?p=users.editName&id=<?= $_SESSION['auth']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Modifier</a></td>
						</tr>
						<tr>
							<td class="param">Mon Email : </td>
							<td class="param_value"><?= $_SESSION['user']->email; ?></td>
							<td><a class="btn" href="?p=users.editMail&id=<?= $_SESSION['auth']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Modifier</a></td>
						</tr>
						<tr>
							<td class="param">Mon mot de passe : </td>
							<td class="param_value">********</td>
							<td><a class="btn" href="?p=users.changePasswd&id=<?= $_SESSION['auth']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Modifier</a></td>
						</tr>
					</tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
						</tr>
				</table>
				
				<table class="table">
					<caption>Administration du site</caption>
					<thead>
						<tr>
							<td></td>
							<td></td>
						</tr>
					</thead>
					
					<tbody id="admin_site">
						<tr>
							<td class="param">Actualités publiés : </td>
							<td><a class="btn" href="?p=admin.news.index"><i class="fa fa-pencil" aria-hidden="true"></i> Gérer</a></td>
						</tr>
						<tr>
							<td class="param">Commentaires publiés : </td>
							<td><a class="btn" href="?p=admin.comments.index"><i class="fa fa-pencil" aria-hidden="true"></i> Gérer</a></td>
						</tr>
						<tr>
							<td class="param">Catégories d'actus : </td>
							<td><a class="btn" href="?p=admin.newsCategories.index"><i class="fa fa-pencil" aria-hidden="true"></i> Gérer</a></td>
						</tr>
						<tr>
							<td class="param">Séries disponibles : </td>
							<td><a class="btn" href="?p=admin.series.index"><i class="fa fa-spinner" aria-hidden="true"></i> Actualiser</a></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			<?php
			}
			?>
			
			<form method="post" action="?p=users.delete" class="form row">
				<div class="text-center col-xs-12">
					<input type="hidden" name="id" value="<?= $_SESSION['auth']; ?>">
					<button id="delete_account_btn" type="submit" class="col-xs-12" aria-hidden="true"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer mon compte</button>
					<a href="index.php" type="button" id="login_form_btn" class="btn" aria-hidden="true"><i class="fa fa-reply" aria-hidden="true"></i> Annuler</a>
				</div>
			</form>
		</div>
	</div>
<?php
} else {
	$_SESSION['flash']['danger'] = "Vous ne pouvez pas afficher cette page. Veuillez vous connecter ou créer un compte utilisateur";
}
?>