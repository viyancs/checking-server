<?php
require '../connectionutil.php';
class Servers {
	private $conn;
	public function __construct() {
		$this->conn = connectionutil::connect();
	}

	public static function check() {
		var_dump($this->conn);
	}
}

?>
