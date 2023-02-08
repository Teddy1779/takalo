<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

	public function index(){
		$this->load->view('loginSign');
	}	
	public function error_login(){
		$data['errorl'] = 'Your Account is Invalid';  
		$this->load->view('loginSign',$data);
	}	
	public function error_sign(){
		$data['errors'] = 'Your Password is not the same';  
		$this->load->view('loginSign',$data);
	}

	public function acceuil($id){
		if($id==5){
			$this->load->model('Model_model');
			$data=$this->Model_model->count_Inscrit();
			$ded = $this->Model_model->get_info_user();
			for ($i = 0; $i < count($ded); $i++) {
				$isany[$i] = $this->Model_model->count_Echange($ded[$i]['iduser']);
			}
			$bigdata['all'] = $data;
			$bigdata['use'] = $ded;
			$bigdata['isany'] = $isany;
			$this->load->view('pageAdmin',$bigdata);
		}else{
			$this->load->model('Model_model');	
			$data['objets'] = $this->Model_model->getallobjet($id);
			$data['categories'] = $this->Model_model->getallcategorie();
			$this->load->view('acceuil',$data);
		}
	}
	public function process_login(){
		$nom = $this->input->post('nom');
		$mdp = $this->input->post('pass');
		$this->load->model('Login_model');
		$data=$this->Login_model->getdata();
		
		$d=verify_login($nom,$mdp,$data);

		if($d!=0){
			$this->session->set_userdata('iduser',$d);
			redirect('login/acceuil/'.$d);
		}else{
			redirect('Login/error_login');
		}
	}
	public function process_sign_in(){
		$nom = $this->input->post('nom');
		$mdp = $this->input->post('pass');
		$mdp1 = $this->input->post('pass1');
		$this->load->model('Login_model');	
		$d=verify_sign($mdp,$mdp1);
		if($d==0){
			$this->session->set_userdata(array('nom'=>$nom));
			$this->Login_model->insert_person($nom,$mdp);
			redirect('Login/acceuil');
		}else{
			redirect('Login/error_sign');
		}
	}
	public function autre($id){
		$data1['iduser']=$this->Model_model->getautreuser($id);
		$data1['all']=$this->Model_model->getallobjet_();
		$this->load->view('autre',$data1);
	}
	public function echange($id){
		$data['change']=$this->Model_model->infoobjet($id);
		$data['outils']=$this->Model_model->getallobjet($_SESSION['iduser']);
		$this->load->view('echange',$data);
	}
	public function dmdobj($iduserrec,$idobjetreceive){
		$objsend=$this->input->post('outils');
		$this->load->model('Model_model');
		$this->Model_model->insert_dmd($_SESSION['iduser'],$iduserrec,$objsend,$idobjetreceive);
		redirect('Login/autre/'.$_SESSION['iduser']);
	}

	public function accept(){
		$data['info']=$this->Model_model->getinfodemande($_SESSION['iduser']);
		$this->load->view('demande',$data);
    }

	public function accepteo($id){
		$this->Model_model->updatedmd($id);
		$data = $this->Model_model->getalldmdId($id);
		$this->Model_model->echange_obj($data[0]['idobjetsend'],$data[0]['idobjetreceive']);
		$this->Model_model->insertconf($id);
		redirect('login/acceuil/'.$_SESSION['iduser']);
    }

	
	public function refuseo($id){
		$this->Model_model->delete_demandes($id);
		redirect('login/acceuil/'.$_SESSION['iduser']);
    }

	//modify
	public function modify($idobjet){

		$nom=$this->input->post('nom');
		$prix=$this->input->post('prix');
		$categorie=$this->input->post('categorie');
		$this->load->model('Model_model');
		$this->Model_model->modifobjet($nom,$prix,$categorie,$idobjet);
		redirect('login/acceuil/'.$_SESSION['iduser']);
	}

	public function modifobjet($idobjet){
		$this->load->model('Model_model');	
		$data['information'] = $this->Model_model->infoobjet($idobjet);
		$data['categories'] = $this->Model_model->getallcategorie();
		$this->load->view('modifobjet',$data);
	}	

	public function recherche(){
		$solotena = $this->input->post('solotena');
		$categorie = $this->input->post('categorie');
		$this->load->model('Model_model');
		$data ['resultat'] = $this->Model_model->search_by_category($solotena,$categorie); 
		$this->load->view('resultat',$data);
	}

	public function demande(){
		$this->load->view('demande');
	}	

	public function demandeobjet(){
		$this->load->model('Model_model');	
		$data['dmd'] = $this->Model_model->get_demande_objet($_SESSION['iduser']);
		$this->load->view('demandeobjet',$data);
	}		

	public function deletedemandes($id){
			$this->load->model('Model_model');
			$this->Model_model->delete_demandes($id);
			redirect('Login/acceuil/'.$_SESSION['iduser']);
	}

	public function historique(){
		$this->load->model('Model_model');

		$data ['historique'] = $this->Model_model->getHistorique();

		$this->load->view('historique',$data);
	}

//mitovy otran le pageadmin fa le version public makany am echangeEffectuer.php
public function echangeEff(){
	$this->load->model('Model_model');
		$data=$this->Model_model->count_Inscrit();
		$ded = $this->Model_model->get_info_user();
		for ($i = 0; $i < count($ded); $i++) {
			$isany[$i] = $this->Model_model->count_Echange($ded[$i]['iduser']);
		}
		$bigdata['all'] = $data;
		$bigdata['use'] = $ded;
		$bigdata['isany'] = $isany;
		$this->load->view('echangeEffectuer',$bigdata);	
}

	public function logout()  
    {    
        $this->session->unset_userdata('user');  
        redirect("login");  
    }
}
