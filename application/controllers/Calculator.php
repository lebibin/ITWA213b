<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calculator extends CI_Controller {

  public function index()
  {
    $num1 = $this->input->post('num1');
    $num2 = $this->input->post('num2');
    $operation = $this->input->post('operation');

    if($operation == '+'){
      $result = 'sum is ' . number_format( $num1 + $num2 );
    } else if ($operation == '-') {
      $result = 'difference is ' . number_format( $num1 - $num2 );
    } else if ($operation == '*') {
      $result = 'product is ' . number_format( $num1 * $num2 );
    } else if ( $operation == '/' ) {
      if($num2 == 0)
        $result = "Can't divide by zero.";
      else
        $result = 'quotient is ' . number_format( $num1 / $num2 );
    } else {
      if($operation=='reset') {
        $num1 = ''; $num2 = '';
      }
      $result = '';
    }

    $data['num1'] = $num1;
    $data['num2'] = $num2;
    $data['result'] = $result;
    $this->load->view('calculator', $data);
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
