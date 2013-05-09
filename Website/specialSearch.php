<!DOCTYPE  html>

<?php if(!isset($_SESSION)) session_start(); ?>


<html>
	<head>
		<?php include("head.php"); ?>
	</head>
	
	<body>
	
		<header> //En-tête
			<h1>Want a special search ? <?php echo $_SESSION['email']; ?></h1>
		</header>
		
		<section> //Zone centrale
			<p>Please choose a special search</p>
			
			<a href = "R1.php" title = "R1">R1</a>
			<a href = "R2.php" title = "R2">R2</a>
			<a href = "R3.php" title = "R3">R3</a>
			<a href = "R4.php" title = "R4">R4</a>
			<a href = "R5.php" title = "R5">R5</a>
			<a href = "R6.php" title = "R6">R6</a>
			
		
		</section>	
		
		<nav> //Menu
			<?php include ("menu.php"); ?>
		</nav>
		
		<footer> //Footer !
			<?php include ("footer.php"); ?>
		</footer>
		
	</body>

</html>