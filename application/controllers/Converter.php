<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Converter extends CI_Controller {

  public function index()
  {
    $number = $this->input->post('number');
    $format = $this->input->post('format');
    if($format == 'decimal'){
      $data['msg'] = 'The decimal equivalent is ';
      $data['result'] = bindec($number);
    } elseif($format == 'binary') {
      $data['msg'] = 'The binary equivalent is ';
      $data['result'] = decbin($number);
    } else {
      $data['msg'] = '';
      $data['result'] = 0;
    }
    $data['number'] = $number;
    $data['format'] = $format;
    $this->load->view('converter', $data);
  }
  private function bindec2($num) {
    $bin = '';
    while($num){
      if($num%2 == 0){
        $bin += '0';
      } else {
        $bin += '1';
      }
      $num /= 2;
      if($num == 0) { $bin += '1'; break; }
    }
    return strrev($bin);
  }
  private function decbin2($num){
    $len = strlen($num);
    $res = 0;
    for($x = 0; $x < $len; $x++){
      if($num[$x] == 0) {
        $res += 0;
      } else {
        $res = pow(2, $x+1);
      }
    }
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
