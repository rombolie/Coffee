<?php

include './defaultEngine.php';

class menuEngine{

	private $Pquery = '';

	function checkUser($user){

		$db = new db();

		$this->Pquery = "SELECT `username` ,`admin` FROM `users` WHERE `username` = '".$user."';";
		$result = $db->getData($this->Pquery);

		if ($result->num_rows > 0) {
			    
		    while($row = $result->fetch_assoc()) {
		         $row;
			}

			if($row['username'] == $user){
				if($row['admin'] == 0){
					return 1;
				}
				else if($rowp['admin'] == 1){
					return 2;
				}
				else{
					return 3;
				}
			}else{
				return "errorcode24"
			}


			} else {
			    return "0 results";
			}
	}
}