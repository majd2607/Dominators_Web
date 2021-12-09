<?php
include '../config.php';
include_once '../Model/Produit.php';

class ProduitC {

    function recupererproduit($id_produit){
        $sql="SELECT * from produit where id_produit=$id_produit";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $produit=$query->fetch();
            return $produit;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficherProduits(){
        $sql="SELECT * FROM produit";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMessage());
        }
    }
   
    function ajouterProduit($produit){
        $sql="INSERT INTO produit (id_produit, description_produit, prix_produit, nom_produit, quantite_dispo_produit, date_ajout_produit) 
        VALUES (:id_produit,:description_produit,:prix_produit, :nom_produit,:quantite_dispo_produit, :date_ajout_produit)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
                'id_produit' => $produit->getIdproduit(),
                'description_produit' => $produit->getDescription(),
                'prix_produit' => $produit ->getPrix(),
                'nom_produit' => $produit->getNom(),
                'quantite_dispo_produit' => $produit->getQuantite(),
                'date_ajout_produit' => $produit->getDateajout()
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }
    function modifierproduit($produit, $id_produit){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE produit SET 
                    description_produit= :description_produit, 
                    prix_produit= :prix_produit, 
                    nom_produit= :nom_produit, 
                    quantite_dispo_produit= :quantite_dispo_produit
                    date_ajout_produit= :date_ajout_produit

                WHERE id_produit= :id_produit'
            );
            $query->execute([
                
                'description_produit' => $produit->getDescription(),
                'prix_produit' => $produit->getPrix(),
                'nom_produit' => $produit->getNom(),
                'quantite_dispo_produit' => $produit->getQuantite(),
                'date_ajout_produit' => $produit->getDateajout(),
                'id_produit' => $id_produit
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function supprimerproduit($id_produit){
        $sql="DELETE FROM produit WHERE id_produit=:id_produit";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_produit', $id_produit);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMessage());
        }
    }
}



?>