<?php
	include '../Controller/ProduitC.php';
	$produitC=new ProduitC();
	$listeProduits=$produitC->afficherProduits(); 
?>

<html>
	<head></head>
	<body>
	    <button><a href="ajouterProduit.php">Ajouter un Produit</a></button>
		<center><h1>Liste des Produits</h1></center>
		<table border="1" align="center">
			<tr>

				<th>id_produit</th>
				<th>description_produit</th>
				<th>prix_produit</th>
				<th>nom_produit</th>
				<th>quantite_dispo_produit</th>
				<th>date_ajout_produit</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listeProduits as $produit){
			?>
			<tr>
				<td><?php echo $produit['id_produit']; ?></td>
				<td><?php echo $produit['description_produit']; ?></td>
				<td><?php echo $produit['prix_produit']; ?></td>
				<td><?php echo $produit['nom_produit']; ?></td>
				<td><?php echo $produit['quantite_dispo_produit']; ?></td>
				<td><?php echo $produit['date_ajout_produit']; ?></td>
				<td>
					<form method="POST" action="modifierproduit.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $produit['id_produit']; ?> name="id_produit">
					</form>
				</td>
				<td>
                <button><a href="supprimerproduit.php?id_produit=<?php echo $produit['id_produit']; ?>">Supprimer</a></button>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>