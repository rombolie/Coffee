<html>
	<head>
		<title>Coffee Time</title>
		<?php include './_funct/defaultEngine.php'; ?>
		<link rel="stylesheet" type="text/css" href="./style/milkyStyle.css">
		<link rel="shortcut icon" href="./style/imgs/icon.ico">
		<style>
			
		</style>
	</head>
	<body>
	<?php 
		error_reporting(0); 
		session_start();
		if($_SESSION['user']){
			echo "<div class='goToManuBar'>
				<a href='?A=logout' class='customBTN'>Logout</a><br>
				<a href='./menu.php' class='customBTN' >Go to the menu</a> ". $_SESSION['user']."
			</div>";
		}
			?>
		<div class="container">
		
				<div class="Jumbostron">
					<h1>BlackCoffee</h1>
				</div>
			<div class="infoButton col-md-4">
			<img width="195px" height="220px;" src="./style/imgs/poster.jpg">
					<a class="btn button-default cButton" href="#">About</a>
					
			</div>
		<?php error_reporting(0);
		if(!$_SESSION['user']){
			echo '<div class="form_div col-md-5">
					<form method="post">
						<input type="text" title="usr" name="usr" placeholder="Username" required><br>
						<input type="password" title="passwd" name="passwd" placeholder="Password" required>
						<br><br>
						<input class="btn" type="submit" title="login" name="login" value="login">
					</form>
			</div>';}?>

			<div class="footer">
				<p>Copyright © <?php echo date('Y');?> KLST</p>
			</div>
		
		</div>
		<script type="text/javascript" src="./style/bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="./style/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	</body>
</html>