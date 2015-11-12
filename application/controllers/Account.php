<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

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
  }
	function doUpdateStatus(){
		$this->load->model('M_account');
		$param = $_POST;
		$param['username'] = $this->session->userdata('username');
		// print_r($param); exit;
		$do_update = $this->M_account->do_update($param);

		$return = array();
		if($do_update == '1'){
			$return = array('status'=>1, 'message'=>'success');
		}
		else{
			$return = array('status'=>0, 'message'=>'failed');
		}

		echo (json_encode($return));

	}

	function doRefreshFeed(){
		$this->load->model('M_account');
		$param = array('username' => $this->session->userdata('username'));
		$feed = $this->M_account->getFeed($param, 3);
		// print_r($feed);

		$return = array();
		if(!empty($feed)){
			$return = array('status'=>1, 'message'=>'success', 'content' => $feed);
		}
		else{
			$return = array('status'=>0, 'message'=>'failed');
		}
		echo (json_encode($return));
	}
}
?>
