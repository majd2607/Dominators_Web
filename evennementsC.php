<?php
require_once "C:/xampp/htdocs/gestiondesevennements/config.php";

    class eventC{
        public function afficherEvent() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                     ' SELECT * FROM event'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
      
          function ajouterevent($event){
                $sql='INSERT INTO event (nomE, lieuE, nbrplaceE,nbr_participant,description,date_deb_event,date_fin_event,image)
                VALUES (:nomE,:lieuE, :nbrplaceE,:nbr_participant,:description,:date_deb_event,:date_fin_event,:image)';
                $pdo= getConnexion();
                try{
                    $query = $pdo->prepare($sql);
                    $query->execute([
                        'nomE' => $event->getNomEvent(),
                        'lieuE' => $event->getLieuE(),
                        'nbrplaceE' => $event->getnbrplaceE(),
                        'nbr_participant' => $event->getnbr_participant(),
                        'description'=>$event->getdescription(),
                        'date_deb_event'=>$event->getdate_deb(),
                        'date_fin_event'=>$event->getdate_fin(),
                        'image'=>$event->getimage()
                    ]);			
                }
                catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
                }			
            }
            function recuperevent($idE){
                $sql="SELECT * from `event` where idE='$idE'";
                $db= getConnexion();
                try{
                    $query=$db->prepare($sql);
                    $query->execute();
    
                    $event=$query->fetch();
                    return $event;
                }
                catch (Exception $e){
                    die('Erreur: '.$e->getMessage());
                }
            }
            
           
    
                function modifierevennement($event,$idE){
                    try {
                        $pdo =getConnexion();
                        $query = $pdo->prepare(
                            'UPDATE `event` SET 
                                nomE= :nomE, 
                                lieuE= :lieuE, 
                                nbrplaceE= :nbrplaceE,
                                nbr_participant=:nbr_participant,
                                description= :description,
                                date_deb_event=:date_deb_event,
                                date_fin_event=:date_fin_event,
                                image=:image
                            WHERE idE= :idE'
                        );
                        $query->execute([
                            'nomE' => $event->getNomEvent(),
                            'lieuE' => $event->getLieuE(),
                            'nbrplaceE' => $event->getnbrplaceE(),
                            'nbr_participant'=>$event->getnbr_participant(),
                            'description'=>$event->getdescription(),
                            'date_deb_event'=>$event->getdate_deb(),
                            'date_fin_event'=>$event->getdate_fin(),
                            'image'=>$event-> getimage(),
                            'idE' => $idE
                        ]);
                        echo $query->rowCount() . " records UPDATED successfully <br>";
                    } catch (PDOException $e) {
                        $e->getMessage();
                    }
                }
            
                 function DeleteE($idE) {
                    try {
                        $pdo = getConnexion();
                        $query = $pdo->prepare(
                            " DELETE FROM `event` WHERE idE = ' $idE' " 
                        );
                        $query->execute([
                            'idE' => $idE
                        ]);
                    } catch (PDOException $e) {
                        $e->getMessage();
                    }
                
                }
            public  function getEventById($idE) {
                    try {
                        $pdo = getConnexion();
                        $query = $pdo->prepare(
                            'SELECT * FROM `event` WHERE idE = :idE'
                        );
                        $query->execute([
                            'idE' => $idE
                        ]);
                        return $query->fetchAll();
                    } catch (PDOException $e) {
                        $e->getMessage();
                    }
                }
             public  function getEventByName($nomE) {
                    try {
                        $pdo = getConnexion();
                        $query = $pdo->prepare(
                            'SELECT * FROM `event` WHERE nomE = :nomE'
                        );
                        $query->execute([
                            'nomE' => $nomE
                        ]);
                        return $query->fetch();
                    } catch (PDOException $e) {
                        $e->getMessage();
                    }
                }
              public function RechercheEvent($nomE) {            
                    $sql = "SELECT * from `event` where nomE=:nomE"; 
                    $db = config::getConnexion();
                    try {
                        $query = $db->prepare($sql);
                        $query->execute([
                            'nomE' => $Art->getNomEvent(),
                        ]); 
                        $result = $query->fetchAll(); 
                        return $result;
                    }
                    catch (PDOException $e) {
                        $e->getMessage();
                    }
                }
                public function RechercherEvennement($nomE) {            
                    $sql = "SELECT * from event where nomE=:nomE"; 
                    $db = getConnexion();
                    try {
                        $query = $db->prepare($sql);
                        $query->execute([
                            'nomE' => $Art->getNomEvent(),
                        ]); 
                        $result = $query->fetchAll(); 
                        return $result;
                    }
                    catch (PDOException $e) {
                        $e->getMessage();
                    }
                }
                public function TriEvent(){
                    try{
                        $pdo=getConnexion();
                        $query=$pdo->prepare("SELECT * FROM event ORDER BY nbrplaceE  DESC");
                        $query->execute();
                        return $query->fetchAll();
                    }
                    catch (PDOException $e) {
                        $e->getMessage();
                    }
                }
                public function Trieventdate(){
                    try{
                        $pdo=getConnexion();
                        $query=$pdo->prepare("SELECT * FROM event ORDER BY date_deb_event desc");
                        $query->execute();
                        return $query->fetchAll();
                    }
                    catch (PDOException $e) {
                        $e->getMessage();
                    }
                }
    } 
            