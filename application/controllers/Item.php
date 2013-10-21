<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
      $this->load->model('Item_model');
   }

  public function index()
  {
    $data['items'] = $this->Item_model->getItems();
    $this->load->view('item', $data);
  }
  public function add()
  {
    $this->load->view('Item_add');
  }

  public function create()
  {
    $new_item = array(
      'name' => $this->input->post('name'),
      'description' => $this->input->post('description'),
      'price' => $this->input->post('price'),
    );
    $id = $this->Item_model->save($new_item);
    redirect('item/index/','refresh');  }

  public function view($item)
  {
    $data['item'] = $this->Item_model->get_by_id($item)->row();
    $this->load->view('Item_view', $data);
  }
  public function edit($id)
  {
    $data['item'] = $this->Item_model->get_by_id($id)->row();
    $this->load->view('Item_edit', $data);
  }
  public function update()
  {
    $id = $this->input->post('id');
    $updated_item = array(
      'name' => $this->input->post('name'),
      'description' => $this->input->post('description'),
      'price' => $this->input->post('price'),
    );
    $this->Item_model->update($id, $updated_item);
    $data['item'] = $this->Item_model->get_by_id($id)->row();
    redirect('item/index/','refresh');
  }
  public function delete($id){
    $this->Item_model->delete($id);
    redirect('item/index/','refresh');
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */
