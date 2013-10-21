<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {
  public function index()
  {
    $this->load->model('Item_model');
    $data['items'] = $this->Item_model->getItems();
    $this->load->view('item', $data);
  }
  public function view($item)
  {
    $this->load->model('Item_model');
    $result = $this->Item_model->getItem($item);
    $data['item'] = $result[0];
    $this->load->view('Item_view', $data);
  }
  public function edit($item)
  {
    $this->load->model('Item_model');
    $result = $this->Item_model->getItem($item);
    $data['item'] = $result[0];
    $this->load->view('Item_edit', $data);
  }
  public function edit_save($item)
  {
    $new_data = array(
      'id' => $item,
      'name' => $this->input->post('name'),
      'description' => $this->input->post('description'),
      'price' => $this->input->post('price'),
    );
    $this->load->model('Item_model');
    $this->Item_model->updateItem($item, $new_data);
    $result = $this->Item_model->getItem($item);

    $this->view($item);
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */
