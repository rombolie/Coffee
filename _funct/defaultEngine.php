<?php session_start();

include './wheels/db.php';
include './wheels/mkUser.php';
include './wheels/login.php';
include './wheels/validateUser.php';


//If Login
if ($_POST['login']) {
	include 'db.php';
	//make the validkeycheck
	//dbconnnect->validatekey($key)
	$login = new login();
	$loginResult = $login->receiveData($_POST['usr'], $_POST['passwd']);
	echo $loginResult;

}else{

}

/* 
 * $GET Switchess
*/
if($_GET){
	switch($_GET['A']){
		case 'logout':
			session_unset ($_SESSION['user']);
			session_destroy ($_SESSION['user']);
			header('Location: ./index.php');
		break;

		case 'Flin':
			echo "You first need to login!";
		break;
	}
}