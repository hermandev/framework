<?php
class Database {
	private static $instance = null;
	private $mysqli;

	public function __construct() {
		$this->mysqli = new mysqli('localhost', 'root', 'root', 'db_penjualan');
	}

	public function konek() {
		if(!isset(self::$instance)) {
			self::$instance = new Database;
		}
		return self::$instance;
	}

	public function show($table) {
			$data = [];
			$query = "SELECT * FROM $table";
			$result = $this->mysqli->query($query);
			while( $row = $result->fetch_assoc() ) {
				$data[] = $row;
			}
			return $data;
	}


}
