<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
 	$this->load->view('pages/header_admin');
   $this->load->view('pages/home');
	$this->load->view('pages/footer');
 }

 function lists()
 {
   $this->load->view('pages/header_admin');
   $this->load->view('pages/admin/admin_list');
   $this->load->view('pages/footer');
 }

 function add()
 {
 	$this->load->view('pages/header_admin');
   $this->load->view('pages/admin/admin_add');
	$this->load->view('pages/footer');
 }
 
 function edit()
 {
 	$this->load->view('pages/header_admin');
   $this->load->view('pages/admin/admin_edit');
	$this->load->view('pages/footer');
 }

function profile()
 {
 	$this->load->view('pages/header_admin');
   $this->load->view('pages/admin/admin_profile');
	$this->load->view('pages/footer');
 } 

}
?>