<?php
//Control
public function view_datee(){
  $this->load->view('datepicker');
}

public function select_date(){
  $tanggal = $this->input->post('tanggal');
  $data['tanggal'] = $this->Model_Barang->get_bydate($tanggal);
  $data['selecttgl'] = $this->input->post('tanggal');
  $this->load->view('datepicker.php', $data);
}

//Model
public function get_bydate($tanggal){
  $this->db->select('*');
  $this->db->from('transaksi');
  $this->db->where('tanggal', $tanggal);
  $result = $this->db->get();
  // $query = $this->db->order_by('id_transaksi','DESC')->get('transaksi');
  return $result->result_array();
}



?>
