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
	public function acceuil(){
		$this->load->view('acceuil');
		$this->load->view('template/foot');
	}	
	public function process_login(){
		$nom = $this->input->post('nom');
		$mdp = $this->input->post('pass');
		$this->load->model('Model');
		$data=$this->Model->getdata();
		$d=verify_login($nom,$mdp,$data);
		if($d==0){
			$this->session->set_userdata('nom',$nom);
			redirect('login/acceuil');
		}else{
			redirect('Login/error_login');
		}
	}
	public function process_sign_in(){
		$nom = $this->input->post('nom');
		$mdp = $this->input->post('pass');
		$mdp1 = $this->input->post('pass1');
		$this->load->model('Model');	
		$d=verify_sign($mdp,$mdp1);
		if($d==0){
			$this->session->set_userdata(array('nom'=>$nom));
			$this->Model->insert_person($nom,$mdp);
			redirect('Login/acceuil');
		}else{
			redirect('Login/error_sign');
		}
	}
	public function autre(){
		$this->load->view('autre');
	}
}
