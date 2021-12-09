<?php
class event {
    private  $nomE=null;
    private  $lieuE=null;
    private $nbrplaceE=null;
    private $nbr_participant=null;
    private  $description=null;
    private  $date_deb_event=null ;
    private $date_fin_event=null;
    private  $image=null;
    
    public function __construct($nomE,$lieuE,$nbrplaceE,$nbr_participant,$description,$date_deb_event,$date_fin_event,$image){
        $this->nomE=$nomE;
        $this->lieuE=$lieuE;
        $this->nbrplaceE=$nbrplaceE;
        $this->nbr_participant=$nbr_participant;
        $this->description=$description;
        $this->date_deb_event=$date_deb_event;
        $this->date_fin_event=$date_fin_event;
        $this->image=$image;
    }


    //getters
    public function getIdevent(){
        return $this->idE;
    }
    public function getNomEvent(){
        return $this->nomE;
    }
    
    public function getLieuE(){
        return $this->lieuE;
    }
    public function getnbrplaceE(){
        return $this->nbrplaceE;
    }
    public function getnbr_participant(){
        return $this->nbr_participant;
    }
    public function getdescription(){
        return $this->description;
    }
  // 
    public function getdate_deb(){
        return $this->date_deb_event;
    }
    public function getdate_fin(){
        return $this->date_fin_event;
    }
    public function getimage(){
        return $this->image;
     }

     //setters
     public function setidE ($idE){
        $this->idE = $idE;   
    }
    public function setnomE ($nomE){
        $this->nomE = $nomE;
    }
    public function setLieuE(){
        $this->lieuE = $lieuE;
    }
    public function setnbrplaceE($nbrplaceE){
        $this->nbrplaceE=$nbrplaceE;
    }
    public function setnbr_participant ($nbr_participant){
        $this->nbr_participant = $nbr_participant;
    }
    public function setdescription($description){
        return $this->$description;
    }
    
    public function setdate_deb_event($date_deb_event){
        $this->date_deb_event=$date_deb_event;
    }
    public function setdate_fin_event($date_fin_event){
        $this->date_fin_event=$date_fin_event;
    }
    public function setimage($image){
      $this->image = $image;
    }
}
?>