<?php
class Pelanggan
{
  private $db;
  public function __construct(){
    $this->db = Database::konek();
  }

  public function tampil($nama) {
    return $this->db->show($nama);
  }



}





 ?>
