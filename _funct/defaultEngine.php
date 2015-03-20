<?php session_start();

require '_funct/wheels/db.php';
require '_funct/wheels/login.php';
//include $_SERVER['DOCUMENT_ROOT']__.".'/coffee/_funct/wheels/db.php";
//include ".$_SERVER['DOCUMENT_ROOT']".'/coffee/_funct/wheels/login.php";


//If Login
error_reporting(0);
if ($_POST['login']) {
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