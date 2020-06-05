<?php
	include"database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Advanced Student Portal</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="back">
	
		<?php include"navbar.php";?>

		<!-- <div style="text-align:center;">
		<img src="img/logo.png" width="250" height="250">
		<div> -->
		
		<div class="login">
			<h1 class="heading">Teacher's Login</h1>
			<div class="log">
                    
                    <?php
						if(isset($_POST["submit"]))
						{

							$sq="insert into staff(TNAME,TPASS,QUAL,SAL,PNO,MAIL,PADDR) values('{$_POST["sname"]}','{$_POST["spass"]}','{$_POST["qual"]}','000','{$_POST["phone"]}','{$_POST["mail"]}','{$_POST["address"]}')";
							if($db->query($sq))
							{
								echo "<div class='success'>Insert Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert Failed..</div>";
							}
							
						}
						
					?>
			
                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					     <label>Teacher Username</label><br>
					     <input type="text" name="sname" required class="input">
					     <br><br>
					     <label>Qualification</label><br>
					     <input type="text" name="qual" required class="input">

                         <label>Phone Number</label><br>
					     <input type="text" name="phone" required class="input">
					     <br><br>
                         <label>Mail</label><br>
					     <input type="text" name="mail" required class="input">
					     <br><br>
                         <label>Address</label><br>
					     <input type="text" name="address" required class="input">
					     <br><br>

					     <label>Password </label><br>
					     <input type="password" name="spass" required class="input"><br>
					     <br><br>
					     <button type="submit" class="btn" name="submit">Register</button>
					</form>

			</div>
		</div>
		
		<div class="footer">
			<footer><p>Copyright &copy; 2020 </p></footer>
		</div>
		
			<script src="js/jquery.js"></script>
		         <script>
		        $(document).ready(function(){
		        	$(".error").fadeTo(1000, 100).slideUp(1000, function(){
		        			$(".error").slideUp(1000);
		        	});
		        	
		        	$(".success").fadeTo(1000, 100).slideUp(1000, function(){
		        			$(".success").slideUp(1000);
		        	});
		        });
			</script>
		
	</body>
</html>
