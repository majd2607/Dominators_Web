<?php
    include_once '../Model/Produit.php';
    include_once '../Controller/ProduitC.php';

    $error = "";

    // create produit
    $produit = null;

    // create an instance of the controller

    $produitC = new ProduitC();
    if (
        isset($_POST["id_produit"]) &&
		isset($_POST["description_produit"]) &&		
        isset($_POST["prix_produit"]) &&
		isset($_POST["nom_produit"]) && 
        isset($_POST["quantite_dispo_produit"]) && 
        isset($_POST["date_ajout_produit"])
    ) {
        if (
            !empty($_POST["id_produit"]) && 
			!empty($_POST['description_produit']) &&
            !empty($_POST["prix_produit"]) && 
			!empty($_POST["nom_produit"]) && 
            !empty($_POST["quantite_dispo_produit"]) && 
            !empty($_POST["date_ajout_produit"])
        ) {
            $produit = new Produit(
                $_POST['id_produit'],
				$_POST['description_produit'],
                $_POST['prix_produit'], 
				$_POST['nom_produit'],
                $_POST['quantite_dispo_produit'],
                $_POST['date_ajout_produit']
            );
            $produitC->ajouterProduit($produit);
            header('Location:afficherListeProduits.php');
        }
        else
            $error = "Missing information";
    }
?>

    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherListeProduits.php">Retour à la liste des produits</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id_produit">Identifiant :
                        </label>
                    </td>
                    <td><input type="text" name="id_produit" id="id_produit" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="description_produit">Description :
                        </label>
                    </td>
                    <td><input type="text" name="description_produit" id="description_produit" maxlength="200"></td>
                </tr>
                <tr>
                    <td>

                        <label for="prix_produit">Prix:
                        </label>
                    </td>
                    <td><input type="int" name="prix_produit" id="prix_produit" ></td>
                </tr>
                <tr>
                    <td>
                        <label for="nom_produit">Nom :
                        </label>
                    </td>
                    <td>
                        <input type="text" name="nom_produit" id="nom_produit">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="quantite_dispo_produit">Quantite disponible:
                        </label>
                    </td>
                    <td>
                        <input type="int" name="quantite_dispo_produit" id="quantite_dispo_produit">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="date_ajout_produit">Date d'ajout:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="date_ajout_produit" id="date_ajout_produit" >
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
