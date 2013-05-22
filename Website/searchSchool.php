<!DOCTYPE  html>
<?php if(!isset($_SESSION)) session_start(); ?>
<html>
	<head>
		<?php include("head.php"); ?>
	</head>
	
	<body>
	
		<header> <!--En-tête-->
			<h1>Let's search for a school <?php if (isset($_SESSION['email'])) echo $_SESSION['email']; else echo 'Visitor'; ?></h1>
		</header>
		
		<section> <!--Zone centrale-->
			<p>Enter the name of your school</p>
			
			<form method = "post" action = "computeSearchSchool.php">
				<p>
					<label for = "school"> Your school :</label>
					<input type = "text" name = "school" id = "school"/>
					
					<br/>
					
					<input type = "submit" value = "Submit"/>
				</p>
			</form>			
		</section>	
		
		<nav> <!--Menu-->
			<?php include ("menu.php"); ?>
		</nav>
		
		<footer> <!--footer-->
			<?php include ("footer.php"); ?>
		</footer>
		
	</body>

</html>