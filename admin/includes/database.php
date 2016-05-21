<?php
class Database{
	private $host = 'localhost';
	private $db = 'db_pasithea';
	private $username = 'root';
	private $password = '';
	public function connect() {
		return new mysqli(
			$this->host,
			$this->username,
			$this->password,
			$this->db		
		);		
	}
}

?>