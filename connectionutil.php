<?php
class ConnectionUtil {
	public static function connect() {
		try {
			$conn = new PDO('mysql:host=localhost;dbname=robot', 'user', 'password');
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return true;

		} catch (PDOException $e ) {
			echo 'Error : ' . $e->getMessage();
			return false;
		}
	}
}

?>
