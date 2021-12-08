<?php
require_once "C:/xampp/htdocs/gestiondesevennements/config.php";

    class commentairesC{
        public function afficherCom() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                     ' SELECT * FROM commentaires'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
          function ajouterCom($commentaires){
                $sql='INSERT INTO commentaires( text, date_commentaire)
                VALUES (:text,:date_commentaire)';
                $pdo= getConnexion();
                try{
                    $query = $pdo->prepare($sql);
                    $query->execute([
                        'text' => $commentaires->getText(),
                        'date_commentaire' => $commentaires->getDate()
                        
                    ]);			
                }
                catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
                }			
            }
            function recupereCom($idCom){
                $sql=" SELECT * FROM commentaires WHERE idCom ='$idCom'";
                $db= getConnexion();
                try{
                    $query=$db->prepare($sql);
                    $query->execute();
    
                    $commentaires=$query->fetch();
                    return $commentaires;
                }
                catch (Exception $e){
                    die('Erreur: '.$e->getMessage());
                }
            }
            
           
    
                function modifierCom($commentaires,$idCom){
                    try {
                        $pdo =getConnexion();
                        $query = $pdo->prepare(
                            'UPDATE commentaires SET 
                                text= :text, 
                                date_commentaire= :date_commentaire
                               
                            WHERE idCom= :idCom'
                        );
                        $query->execute([
                            'text' => $commentaires->getText(),
                            'date_commentaire' => $commentaires->getDate(),
                            'idCom' => $idCom
                        ]);
                        echo $query->rowCount() . " records UPDATED successfully <br>";
                    } catch (PDOException $e) {
                        $e->getMessage();
                    }
                }
            
                 function DeleteC($idCom) {
                    try {
                        $pdo = getConnexion();
                        $query = $pdo->prepare(
                            " DELETE FROM `commentaires` WHERE idCom = ' $idCom' " 
                        );
                        $query->execute([
                            'idCom' => $idCom
                        ]);
                    } catch (PDOException $e) {
                        $e->getMessage();
                    }
                
                }
            public  function getComById($idCom) {
                    try {
                        $pdo = getConnexion();
                        $query = $pdo->prepare(
                            'SELECT * FROM `commentaires` WHERE idCom = :idCom'
                        );
                        $query->execute([
                            'idCom' => $idCom
                        ]);
                        return $query->fetchAll();
                    } catch (PDOException $e) {
                        $e->getMessage();
                    }
                }
            
              public function RechercheComt($date_commentaire) {            
                    $sql = "SELECT * from `commentaires` where date_commentaire=:date_commentaire"; 
                    $db = config::getConnexion();
                    try {
                        $query = $db->prepare($sql);
                        $query->execute([
                            'date_commentaires' => $Art->getDate(),
                        ]); 
                        $result = $query->fetchAll(); 
                        return $result;
                    }
                    catch (PDOException $e) {
                        $e->getMessage();
                    }
                }
               
               
               
                public function TriCom(){
                    try{
                        $pdo=getConnexion();
                        $query=$pdo->prepare("SELECT * FROM commentaires ORDER BY date_commentaire desc");
                        $query->execute();
                        return $query->fetchAll();
                    }
                    catch (PDOException $e) {
                        $e->getMessage();
                    }
                }
    } 
            