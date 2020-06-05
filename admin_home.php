<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access not granted','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ASP - Admin Home</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	
		<?php include"navbar.php";?><br>
		
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > Project Information</h3><br>
					<img src="img/logo.png" class="imgs">
					<div>
					<ul>
						<li><h4>Ahmed Alif Swopno</h4></li>
						<p>18-37750-1</p>
						<br>
						<li><h4>Shahrin Binte Ali</h4></li>
						<p>17-35970-3</p>
						<br>
						<li><h4>Abdur Rahman</h4></li>
						<p>17-34794-2</p>
						<br>
						<li><h4>Shahruk Rahman</h4></li>
						<p>17-35024-2</p>
						<br>
					</ul>
					</div>
				</div>
				
			</div>
	
		<?php include"footer.php";?>
	</body>
</html>