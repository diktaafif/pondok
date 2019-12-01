<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  
  public function __construct(){
    parent::__construct();    
    $this->load->helper('url','form');
    $this->load->library('form_validation');
    $this->load->library('session');
    //$this->load->database(); // load database
    $this->load->library('pagination');
    $this->load->model('Muser'); 
    
  }

  public function index()
  {
    //$this->load->view('header');
    $this->load->view('Login_view');
    //$this->load->view('footer');
  }

  public function cekLogin(){

    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'Username','trim|required');  
    $this->form_validation->set_rules('password', 'Password','trim|required');
    $username = $this->input->post('usernameP');
    $password = $this->input->post('passwordP');
    $this->Muser->getLogin($username,$password);
    //}
    
  }
  public function logout(){
    $sess_array = array(
      "id" => '',
      "username" => '',
      "status" => ''
      );
    $this->session->sess_destroy();
    $this->session->unset_userdata('logged_in',$sess_array);
    header("location: ".site_url());
  }
    public function daftar(){ 
  $this->load->view('user/daftar'); 
  $this->load->view('footer');
 } 

 public function create(){ 
  $this->load->helper('url','form'); 
  $this->load->library('form_validation'); 

  $this->form_validation->set_rules('username','Username','trim|required'); 
  $this->form_validation->set_rules('password','Password','trim|required'); 
  
  $this->load->model('Muser'); 
  $this->Muser->insertUser(); 
  $this->load->view('user/daftar_sukses'); 
  }

}