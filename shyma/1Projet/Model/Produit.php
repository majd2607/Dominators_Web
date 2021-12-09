<?php
	class Produit{
		private $id_produit=null;
		private $description_produit=null;
		private $prix_produit=null;
		private $nom_produit=null;
		private $quantite_dispo_produit=null;
		private $date_ajout_produit;
		
		private $password=null;
		function __construct($id_produit, $description_produit, $prix_produit, $nom_produit, $quantite_dispo_produit, $date_ajout_produit){
			$this->id_produit=$id_produit;
			$this->description_produit=$description_produit;
			$this->prix_produit=$prix_produit;
			$this->nom_produit=$nom_produit;
			$this->quantite_dispo_produit=$quantite_dispo_produit;
			$this->date_ajout_produit=$date_ajout_produit;
		}
		function getIdproduit(){
			return $this->id_produit;
		}
		function getDescription(){
			return $this->description_produit;
		}
		function getPrix(){
			return $this->prix_produit;
		}
		function getNom(){
			return $this->nom_produit;
		}
		function getQuantite(){
			return $this->quantite_dispo_produit;
		}
		function getDateajout(){
			return $this->date_ajout_produit;
		}

		function setDescription(string $description_produit){
			$this->description_produit=$description_produit;
		}
		function setPrix(int $prix_produit){
			$this->prix_produit=$prix_produit;
		}
		function setNom(string $nom_produit){
			$this->nom_produit=$nom_produit;
		}
		function setQuantite(int $quantite_dispo_produit){
			$this->quantite_dispo_produit=$quantite_dispo_produit;
		}
		function setdateajout(string $date_ajout_produit){/////////////////////////date ou string????
			$this->date_ajout_produit=$date_ajout_produit;
		}
		
	}


?>