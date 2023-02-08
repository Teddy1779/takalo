<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {

    public function getdata(){
        $query = $this->db->query("select * from user");
        $tab = array();
        $i=0;
        foreach($query->result_array() as $row){
            $tab[$i]['iduser'] = $row['iduser'];
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
        $isany = $this->getdata();
        $sql1 = "INSERT INTO objet VALUES(null,1,".count($isany).",'lunette (dft)','lunette de soleil','11.jpg',9500)";
        $this->db->query($sql1);
        $sql2 = "INSERT INTO objet VALUES(null,1,".count($isany).",'usb (dft)','Cle','38.jpg',9500)";
        $this->db->query($sql2);
    }
}