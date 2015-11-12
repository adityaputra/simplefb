<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// session check
		// print_r($this->session->userdata('logged_in')); exit;
		// if logged in
		if($this->session->userdata('logged_in')){
			$header = array('title' => 'SimpleFB Home');
			$this->load->view('general/header', $header);
			$this->load->view('general/navbar');
			$this->load->view('home/home');
			$this->load->view('home/script');
			$this->load->view('general/footer');
		}

		// else
		else{
			$header = array('title' => 'SimpleFB Login');
			$this->load->view('general/header', $header);
			$this->load->view('general/header');
			$this->load->view('home/login');
		}
	}

	function login(){
		$param = $_POST;
		$param['password'] = md5($param['password']);

		$this->load->model('M_account');
		$account = $this->M_account->login($param);
		// print_r($account); exit;

		if(!empty($account)){
			$login = array(
                         'username'  => $param['username'],
												 'name' => $account[0]['name'],
                         'notification' => 'welcome',
                         'logged_in' => TRUE
                     );
      $this->session->set_userdata($login);
			redirect('home');
		}

		else {
			$result = array('status' => 0, 'message' => 'Please check your username / password.');
			$this->load->view('general/header');
			$this->load->view('home/login', $result);
		}

		print_r($_POST);
		// NEXT: login, pasang link logout
	}
}
