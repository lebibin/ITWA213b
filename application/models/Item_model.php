<?php

class Item_model extends CI_Model {
   // table name
  private $tbl_item = 'item';
  public function getItems()
  {
    $q = $this->db->get($this->tbl_item);
    $items = $q->result();
    return $items;
  }
  // get item by id
  function get_by_id($id){
    $this->db->where('id', $id);
    return $this->db->get($this->tbl_item);
  }
  // add new item
  function save($item){
    $this->db->insert($this->tbl_item, $item);
    return $this->db->insert_id();
  }
  // update item by id
  function update($id, $item){
    $this->db->where('id', $id);
    $this->db->update($this->tbl_item, $item);
  }
  // delete item by id
  function delete($id){
    $this->db->where('id', $id);
    $this->db->delete($this->tbl_item);
  }
}
