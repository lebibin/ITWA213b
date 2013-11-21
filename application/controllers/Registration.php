<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Registration extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {
     $this->load->helper(array('form'));
     $this->load->view('register');
 }


 function verify()
 {

  //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|is_unique[users.username]');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password_confirmation', 'Password Confirmation', 'trim|required|matches[password]');
   $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email|is_unique[users.email]');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to registration page
     $this->load->view('register');
   }
   else
   {
      $this->user->add_user();
      $this->send_email($this->input->post('email'));
      redirect('login', 'refresh');
   }
 }

 private function send_email($email){
$config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'octodoodledev',
    'smtp_pass' => 'sherlocked?!',
    'mailtype'  => 'html',
    'charset'   => 'iso-8859-1'
);
  $this->load->library('email', $config);
  $this->email->set_newline("\r\n");
  $this->email->from('octodoodledev@gmail.com', 'Sample Application');
  $this->email->to($email);

  $this->email->subject('Welcome ' . $this->input->post('username'));
  $this->email->message('Successfully created an account!');
  // Set to, from, message, etc.

  $result = $this->email->send();
 }

}
