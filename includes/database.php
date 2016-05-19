<?php
class Database {	
	private $host 		="localhost";
	private $user 		= "root";
	private $password 	= "";
	private $database	= "db_pasithea";
	
	public function connect() {
		return new mysqli(
			$this->host,
			$this->user,
			$this->password,
			$this->database
		);
	}
}

?>