<?php

class Connexion{
    
    private $_db;
    private $_table="connexion";
    
    public function __construct(){
        $this->setDb();
    }
    
    public function setDb(){
        $connect = new Base();
            
        $this->_db = $connect->db();
    }
    
    public function readAll(){
        $query="SELECT * FROM $this->_table";
        $st=$this->_db->query($query);
        return $res=$st->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function verifConnexion($login, $mdp){
        $enregistrements = $this->readAll();
        $retour=false;
        foreach($enregistrements as $row){
            if ($login == $row['login'] && $mdp==$row['pwd']){
                $retour=true;
            }
        }
        
        return $retour;
    }
}