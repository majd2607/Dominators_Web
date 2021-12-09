<?php
class commentaires {
private   $text=null;
private  $date_commentaire=null;


    
    
    public function __construct($text,$date_commentaire){
        $this->text=$text;
        $this->date_commentaire=$date_commentaire;

    }


    //getters
    public function getIdcommentaire(){
        return $this->idCom;
    }
    public function getText(){
        return $this->text;
    }
    
    public function getDate(){
        return $this->date_commentaire;
      
    }
     //setters
     public function setIdcommentaire($idCom){
        $this->idCom = $idCom;   
    }
    public function setText($text){
        $this->text = $text;
    }

    public function setDate($date_commentaire){
        $this->date_commentaire=$date_commentaire;
    }
}
?>
