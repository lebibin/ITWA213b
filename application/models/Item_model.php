<?php

class Item_model extends CI_Model {
  public function getItems()
  {
    $q = $this->db->get('item');
    $items = $q->result();
    return $items;
  }
  public function getItem($item)
  {
    $q = $this->db->get_where('item', array('id' => $item));
    $item = $q->result();
    return $item;
  }
  public function updateItem($item, $new_data)
  {
    $this->db->where('id', $new_data['id']);
    $this->db->update('item', $new_data);
    return true;
  }
}
