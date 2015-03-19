<?php
if(!$_SESSION['user']){
	header("HTTP/1.0 404 Not Found");
}
if(!$_SESSION['user']){ header('Location: ./index.php?A=Flin');}
else{
	include './_funct/menuEngine.php';

	$menuEngine = new menuEngine();
	$pref = $menuEngine->checkUser($_SESSION['user']);

	if($pref == 0){
		echo 'error';
	}
	else if($pref == 1){
		echo 'status Default';
	}
	elseif ($pref == 2) {
		# code...
	}

	//0 == User doesn't exists
	//1 == Default user
	//2 == Admin pref
}
?>
<html>
	<head>
		<title>Summery</title>
	</head>
	<body>
	
	</body>
</html>