<?php

// db connection requires 
class Dba {
	private $host;
	private $db;
	private $user;
	private $pass;
	private $charset;

	public function connect() {
		// set variables for connection
		$host = "localhost";
		$db = "testdb";
		$user = "root";
		$pass = "";
		$charset = "utf8mb4";

		try {
			// set dsn, opt, and pdo
			$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
			$opt = [
				PDO::ATTR_ERRMODE				=> PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE	=> PDO::FETCH_ASSOC,
				PDO::ATTR_EMULATE_PREPARES		=> false,
			];
			$pdo = new PDO($dsn, $user, $pass, $opt);
			return $pdo;
		} catch (PDOException $e) {
			echo "Connection Failed: ".$e->getMessage();
		}
	} // connect method
} // Dba class
?>
