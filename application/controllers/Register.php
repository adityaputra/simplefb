<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
    // Render register page
		// session check

		// if logged in

		// else
    $this->load->view('general/header');
		$this->load->view('register/form');
	}

  function do_register(){
    // Submitted form actions do register
    $this->load->model('M_register');
    $param = $_POST;

    // encrypt password
    $param['password'] = md5($param['password']);

    // check email unique
    $count_account = $this->M_register->check_registered_email($param);
    if(sizeof($count_account) != 0){
      return array('status' => 0, 'message' => 'email exist');
    }

    $file_upload = $this->do_upload($_FILES, $_POST);

    if($file_upload['status'] == 0){
      return array('status' => 0, 'message' => 'file upload failed');
    }

    // write to db
    $param['picture_loc'] = $file_upload['message'];
    $write_account = $this->M_register->write_account($param);

    if($write_account == 1){
      // echo $write_account; exit;
      $login = array(
                         'username'  => $param['username'],
                         'email'     => $param['email'],
                         'notification' => 'welcome',
                         'logged_in' => TRUE
                     );
      $this->session->set_userdata($login);

      redirect('home');
      // return array('status' => 1, 'message' => 'registration success');
    }
    else{
      echo $write_account."FAILED TO REGISTER"; exit;
      // return array('status' => 0, 'message' => 'registration failed');
    }


  }

  function check_registered_email(){
    $this->load->model('M_register');
    $this->M_register->check_registered_email();
  }

  function do_upload($file, $param){
    // print_r($file); exit;
    $target_dir = SITE_ROOT."/uploads/picture/";
    $target_file_name = $param['email'].time().basename($file["picture"]["name"]);
    $target_file = $target_dir . $target_file_name;
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    // Check if image file is a actual image or fake image
    $check = getimagesize($file["picture"]["tmp_name"]);
    if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        // echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        // echo "Sorry, your file was not uploaded.";
        return array('status' => 0, 'message' => 'file upload error-1');
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($file["picture"]["tmp_name"], $target_file)) {
            // echo "The file ". basename( $file["picture"]["name"]). " has been uploaded.";
            return array('status' => 1, 'message' => $target_file_name);
        } else {
            return array('status' => 0, 'message' => 'file upload error-2');
        }
    }
  }
}
