<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model extends CI_Model {

    public function getdata(){
        $query = $this->db->query("select * from user");
        $tab = array();
        $i=0;
        foreach($query->result_array() as $row){
            $tab[$i]['nom'] = $row['nom'];
            $tab[$i]['mdp'] = $row['mdp'];
            $i++;
        }
        return $tab;
    }
    public function insert_person($nom,$pass){
        $sql = "INSERT INTO user (iduser,nom,mdp) VALUE (null,'%s','%s')";
        $sql = sprintf($sql,$nom,$pass);
        $this->db->query($sql);
    }

}