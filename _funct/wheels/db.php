<?php
class db {

	private $serv = 'localhost';
	private $dbUser = 'root';
	private $dbPass = '';
	protected $dataB = 'coffee';

	protected $conn = '';
	protected $_query = '';
	protected $_result = '';

	function __construct(){
		$this->mkConnct();
	}

	public function mkConnct (){
		$this->conn = new mysqli($this->serv, $this->dbUser, $this->dbPass, $this->dataB);
		if ($this->conn->connect_error) {
   		 die("Connection failed: " . $conn->connect_error);
   		 return false;
		}
		else{
			return true;
		} 
	}

	private function execQuery($sqlString = NULL){
		$this->mkConnct();
		if(!empty($sqlString)){

			$result = $this->conn->query($sqlString);

		}
		if(empty($sqlString)){
			return 'Error, 37, NoData';
		}

		return $result;
	}

	public function saveData(){
		
	}

	public function getData($input){

		//if(!strpos($input, 'DELETE') || !strpos($input, 'UNION') || !strpos($input, 'CREAT') || !strpos($input, 'INSERT')){
			$output = $this->execQuery($input);	
			return $output;
		//}
	}

}