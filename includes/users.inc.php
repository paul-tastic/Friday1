<?php
	class User extends Dba {

		public function getData() {
			$stmt = $this->connect()->query('SELECT * FROM users');
			while ($row = $stmt->fetch()) {
				echo $row['uid']. "\n";
			}
		}
	}


?>