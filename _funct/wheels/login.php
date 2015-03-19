<?php
session_start();

class login{

	public function receiveData($user, $pasw){
		if(!empty($user) && !empty($pasw)){

			$db = new db();
			$query = "SELECT * FROM `users` WHERE `username` = '". $user ."' AND `pasword` = '".$pasw."';";
			$result = $db->getData($query);
			
			if ($result->num_rows > 0) {

				$_SESSION['user'] = $user;
				return $_SESSION['user']. header('Location: ../menu.php');
			    
			    /*while($row = $result->fetch_assoc()) {
			        return "".print_r($row)."";
				}*/
			} else {
			    return "0 results";
			}



			/*if($result){
				$_SESSION['user'] = $user;
				//return $_SESSION['user'];
				return "you are now logged in:)<br>". $_SESSION['user']. "</br>".print_r($result);
				

			}else{
				return $result."Password Our Username doesn't exist";
				header('Location: ../index.php');
			}*/
		}
		else{
			return 'error';
		}
	}

	private function paddelData(){

	}
}
?>