<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_model extends CI_Model{

    public function __construct(){
        $this->load->database('db');
    }

    public function getallcategorie (){
        $query = $this->db->query("select * from categorie");
        $tab = array();
        $i = 0;
        foreach($query->result_array() as $row){
            $tab[$i]['nom'] = $row['nom'];
            $tab[$i]['idcategorie'] = $row['idcategorie'];
            $i++;
        }
        return $tab;
    }

    public function insert_dmd($idsend,$idreceive,$idobjsend,$idobjreceive){
        $sql="INSERt INTO demande (iddemande,idsend,idreceive,date_demande,idobjetsend,idobjetreceive,confirmation) VALUES (%d,%d,%d,curdate(),%d,%d,'false')";
        $sql=sprintf($sql,null,$idsend,$idreceive,$idobjsend,$idobjreceive);
        $this->db->query($sql);
    }

    public function insertconf($iddmd){
        $sql="INSERt INTO confirmer (idconfirmer,iddemande,dateconfirmer) VALUES (%d,%d,curdate())";
        $sql=sprintf($sql,null,$iddmd);
        $this->db->query($sql);
    }

    public function updatedmd($id){
        $sql="update demande set confirmation = 'true' where iddemande=".$id;
        $this->db->query($sql);
    } 


    public function getinfodemande($id){
        $query = $this->db->query("select d.iddemande,u.nom as send,u1.nom as receive,d.idreceive as idreceive,d.date_demande,o.nom as objetsend,o.photo as photosend,o.description as description ,o1.nom as objetreceive,o1.photo as photoreceive,d.confirmation from demande as d JOIN user as u on u.iduser = d.idsend JOIN user as u1 on u1.iduser = d.idreceive JOIN objet as o on o.idobjet=d.idobjetsend JOIN objet as o1 on o1.idobjet=d.idobjetreceive WHERE d.confirmation = 'false' and d.idreceive=".$id);
        $tab = array();
        $i = 0;
        foreach($query->result_array() as $row){
            $tab[$i]['iddemande'] = $row['iddemande'];
            $tab[$i]['send'] = $row['send'];
            $tab[$i]['receive'] = $row['receive'];
            $tab[$i]['idreceive'] = $row['idreceive'];
            $tab[$i]['date_demande'] = $row['date_demande'];
            $tab[$i]['objetsend'] = $row['objetsend'];
            $tab[$i]['photosend'] = $row['photosend'];
            $tab[$i]['description'] = $row['description'];
            $tab[$i]['objetreceive'] = $row['objetreceive'];
            $tab[$i]['photoreceive'] = $row['photoreceive'];
            $tab[$i]['confirmation'] = $row['confirmation'];
            $i++;
        }
        return $tab;
    }

    public function getdemand($receive){
        $sql="select * from demande where idreceive=".$receive." and confirmation = 'false'";
        echo $sql;
        $i=0;
        foreach($sql->result_array() as $row){
            $tab[$i]['iddemande']=$row['iddemande'];
            $tab[$i]['idsend']=$row['idsend'];
            $tab[$i]['idreceive']=$row['idreceive'];
            $tab[$i]['date_demande']=$row['date_demande'];
            $tab[$i]['idobjetsend']=$row['idobjetsend'];
            $tab[$i]['idobjetreceive']=$row['idobjetreceive'];
            $tab[$i]['confirmation']=$row['confirmation'];
            $i++;
        }
        return $tab;
    }

    public function curdate(){
        $sql="select curdate()";
        $date=$this->db->query($sql);
        return $date->result();
    }
    
    public function get_demande_objet($iduser){
        $query = $this->db->query("select * from objet
        join demande on demande.idobjetreceive = objet.idobjet
        where demande.idsend =".$iduser);
        
        $tab = array();
        $i = 0;
        foreach($query->result_array() as $row){
            $tab[$i]['iddemande'] = $row['iddemande'];
            $tab[$i]['nom'] = $row['nom'];
            $tab[$i]['photo'] = $row['photo'];
            $tab[$i]['date_demande'] = $row['date_demande'];
            $tab[$i]['confirmation'] = $row['confirmation'];
            $i++;
        }
        echo 'huhuhu';
        echo $tab[0]['nom'];
        return $tab;
    }

    public function delete_demandes($id){
        $this->db->where('iddemande', $id);
        $this->db->delete('demande'); 
    }

	public function modifobjet($nom,$prix,$categorie,$idobjet){
        $sql ="UPDATE objet SET nom = '".$nom."', prix = ".$prix.", idcategorie = ".$categorie." WHERE idobjet= ".$idobjet."";
        $this->db->query($sql);
    }

    public function deleteobjet($idobjet){
        $query = $this->db->query("delete from objet where iduser=".$idobjet);
        return $query;
    }

    public function getallobjet($iduser){
        $query = $this->db->query("select * from objet where iduser=".$iduser);
        $tab = array();
        $i = 0;
        foreach($query->result_array() as $row){
            $tab[$i]['nom'] = $row['nom'];
            $tab[$i]['idcategorie'] = $row['idcategorie'];
            $tab[$i]['description'] = $row['description'];
            $tab[$i]['idobjet'] = $row['idobjet'];
            $tab[$i]['photo'] = $row['photo'];
            $tab[$i]['prix'] = $row['prix'];
            $tab[$i]['iduser'] = $row['iduser'];
            $i++;
        }
        return $tab;
    }

    public function infoobjet($idobjet){
        $query = $this->db->query("select * from objet where idobjet=".$idobjet);
        $tab = array();
        $i = 0;
        foreach($query->result_array() as $row){
            $tab[$i]['nom'] = $row['nom'];
            $tab[$i]['idcategorie'] = $row['idcategorie'];
            $tab[$i]['description'] = $row['description'];
            $tab[$i]['idobjet'] = $row['idobjet'];
            $tab[$i]['photo'] = $row['photo'];
            $tab[$i]['prix'] = $row['prix'];
            $tab[$i]['iduser'] = $row['iduser'];
            $i++;
        }
        return $tab;
    }

    public function getallobjet_(){
        $query = $this->db->query("select * from objet");
        $tab = array();
        $i = 0;
        foreach($query->result_array() as $row){
            $tab[$i]['nom'] = $row['nom'];
            $tab[$i]['idcategorie'] = $row['idcategorie'];
            $tab[$i]['description'] = $row['description'];
            $tab[$i]['idobjet'] = $row['idobjet'];
            $tab[$i]['photo'] = $row['photo'];
            $tab[$i]['prix'] = $row['prix'];
            $tab[$i]['iduser'] = $row['iduser'];
            $i++;
        }
        return $tab;
    }

    public function search_by_category($keyword, $category){
        $this->db->select('*');
        $this->db->from('objet');
        $this->db->like('idcategorie', $category);
        $this->db->like('nom', $keyword);
        $query = $this->db->get();
        $tab = array();
            $i = 0;
        foreach($query->result_array() as $row){
            $tab[$i]['nom'] = $row['nom'];
            $tab[$i]['idcategorie'] = $row['idcategorie'];
            $tab[$i]['description'] = $row['description'];
            $tab[$i]['idobjet'] = $row['idobjet'];
            $tab[$i]['photo'] = $row['photo'];
            $tab[$i]['prix'] = $row['prix'];
            $tab[$i]['iduser'] = $row['iduser'];
            $i++;
        }
        return $tab;
    }

    public function getallobjetadmin (){
        $query = $this->db->query("select * from objet");
        $tab = array();
        $i = 0;
        foreach($query->result_array() as $row){
            $tab[$i]['nom'] = $row['nom'];
            $tab[$i]['idcategorie'] = $row['idcategorie'];
            $tab[$i]['description'] = $row['description'];
            $tab[$i]['idobjet'] = $row['idobjet'];
            $tab[$i]['photo'] = $row['photo'];
            $tab[$i]['prix'] = $row['prix'];
            $tab[$i]['iduser'] = $row['iduser'];
            $i++;
        }
        return $tab;
    }
    public function getautreuser($iduser){
        $query = $this->db->query("select distinct o.iduser,u.nom from objet as o JOIN user as u on o.iduser=u.iduser where o.iduser !=".$iduser);
        $tab=array();
        $i=0;
        foreach($query->result_array() as $row){
            $tab[$i]['iduser']=$row['iduser'];
            $tab[$i]['nom']=$row['nom'];
            $i++;
        }
        return $tab;
    }

    //getalliddemande
    public function getalldmdId($id){
        $sql = $this->db->query("select idobjetsend,idobjetreceive from demande where iddemande=".$id);
        $i=0;
        foreach($sql->result_array() as $row){
            $tab[$i]['idobjetsend']=$row['idobjetsend'];
            $tab[$i]['idobjetreceive']=$row['idobjetreceive'];
        }
        return $tab;
    }
    public function getHistorique(){
        $query = $this->db->query("
                                    select confirmer.dateconfirmer as dateechange, demande.idsend as oldproprio , 
                                    demande.idreceive as newproprio ,demande.idobjetsend as objetazonew ,demande.idobjetreceive as objetazoold , 
                                    objet.nom as nomazonew , o.nom as nomazoold , user.nom as nomoldproprio , u.nom as nomnewproprio
                                    from  confirmer
                                    join demande  
                                    on confirmer.iddemande = demande.iddemande
                                    join objet
                                    on objet.idobjet = demande.idobjetsend
                                    join objet as o
                                    on o.idobjet = demande.idobjetreceive
                                    join user
                                    on user.iduser = demande.idsend
                                    join user as u
                                    on u.iduser = demande.idreceive
                                ");
        $tab = array();
        $i = 0;
        foreach($query->result_array() as $row){
            $tab[$i]['dateechange'] = $row['dateechange'];
            $tab[$i]['oldproprio'] = $row['oldproprio'];
            $tab[$i]['newproprio'] = $row['newproprio'];
            $tab[$i]['objetazonew'] = $row['objetazonew'];
            $tab[$i]['objetazoold'] = $row['objetazoold'];
            $tab[$i]['nomazonew'] = $row['nomazonew'];
            $tab[$i]['nomazoold'] = $row['nomazoold'];
            $tab[$i]['nomoldproprio'] = $row['nomoldproprio'];
            $tab[$i]['nomnewproprio'] = $row['nomnewproprio'];
            $i++;
        }
        return $tab;
    }

    public function count_Inscrit(){
        $rows = $this->db->count_all('user');
        $count = $rows - 1;
        return $count;
    }
//Hasina fonction manisa echange par utilisateur
public function count_Echange($iduser){
    $sql = $this->db->query("select confirmation from demande where idsend = ".$iduser." and confirmation = 'true'");
    $tab = array();
    $i = 0;
    foreach ($sql->result_array() as $rows) {
        $tab[$i]['confirmation'] = $rows['confirmation'];
            $i++;
    }
    $isa = count($tab);
    return  $isa;
}
//Hasina maka info user par son id 

public function get_info_user(){
    $query = $this->db->query("select * from user");
    $tab = array();
    $i = 0;
    foreach($query->result_array() as $row){
        $tab[$i]['nom'] = $row['nom'];
        $tab[$i]['iduser'] = $row['iduser'];
        $tab[$i]['mdp'] = $row['mdp'];
        $i++;
    }
    return $tab;
}

public function echange_obj($id1,$id2){
    $query = $this->db->query("select * from objet where idobjet=".$id1);
    $tab = array();
    $i = 0;
    foreach($query->result_array() as $row){
        $tab[$i]['nom'] = $row['nom'];
        $tab[$i]['idcategorie'] = $row['idcategorie'];
        $tab[$i]['description'] = $row['description'];
        $tab[$i]['idobjet'] = $row['idobjet'];
        $tab[$i]['photo'] = $row['photo'];
        $tab[$i]['prix'] = $row['prix'];
        $tab[$i]['iduser'] = $row['iduser'];
        $i++;
    }
    $query1 = $this->db->query("select * from objet where idobjet=".$id2);
    $c = 0;
    foreach($query1->result_array() as $row){
        $stock[$c]['nom'] = $row['nom'];
        $stock[$c]['idcategorie'] = $row['idcategorie'];
        $stock[$c]['description'] = $row['description'];
        $stock[$c]['idobjet'] = $row['idobjet'];
        $stock[$c]['photo'] = $row['photo'];
        $stock[$c]['prix'] = $row['prix'];
        $stock[$c]['iduser'] = $row['iduser'];
        $c++;
    }
    $sql1 ="UPDATE objet SET nom = '".$stock[0]['nom']."', iduser = ".$tab[0]['iduser']." , description = '".$stock[0]['description']."' , photo = '".$stock[0]['photo']."' , prix = ".$stock[0]['prix'].", idcategorie = ".$stock[0]['idcategorie']." WHERE idobjet= ".$id1."";
    $sql2 ="UPDATE objet SET nom = '".$tab[0]['nom']."', iduser = ".$stock[0]['iduser']." , description = '".$tab[0]['description']."' , photo = '".$tab[0]['photo']."' , prix = ".$tab[0]['prix'].", idcategorie = ".$tab[0]['idcategorie']."  WHERE idobjet= ".$id2."";
    $this->db->query($sql1);
    $this->db->query($sql2);

}
}
?>