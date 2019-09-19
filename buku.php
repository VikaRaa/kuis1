<?php
include_once (__DIR__ . "/db.php");
class buku {
    private $table_name='buku';
    private $db = null;

    function __construct(){
        if ($this->db ==  null){
            $conn = new DB();
            $this->db = $conn->db;
        }
    }

    function getAll(){
        //return "test";
        $kueri = "SELECT * FROM buku ORDER BY id_buku";
        $hasil = $this->db->query($kueri) or die ("Error ".$this->db->connect_error);
		$data = array();
		while ($row = $hasil->fetch_assoc()){
            $data[]=$row;
        }
        return $data;
    }
}