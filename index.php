<?php 
	require('config/config.php');
	require('config/db.php');
	if(isset($_POST['submit'])){
		//Get form data
		var_dump($_POST);
		$id = mysqli_real_escape_string($conn,$_POST['roomno']);

	}

	//	if(mysqli_query($conn,$query)){
	//		header('Location: '.ROOT_URL.'');
	//	}else{
	//		echo "ERROR ".mysqli_error($conn);
	//	}
	//create query
	$query = 'SELECT * FROM customers database WHERE id ='.$id;

	//get result
	$result = mysqli_query($conn,$query);

	//fetch data
	$posts = mysqli_fetch_assoc($result);
	var_dump($posts);
	//free result


	mysqli_free_result($result);

	//close connection
	mysqli_close($conn);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Affordable and easy conference room booking system">
	<meta name="keywords" content="conference,conference booking,meeting rooms, book meetings room">
	<meta name="author" content="Kapil Jhade">
	<title> Welcome!</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1><span class="highlight">Conference</span> Management System</h1>
			</div>
			<nav>
				<ul>
					<li class="current">
						<a href="index.php"> Home</a>
					</li>
					<li>
						<a href="booking.php">Book Rooms</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="login.php">Log In</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<section id="showcase">
		<div class="container">
			<h1>
				Conference Rooms on the GO!
			</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
	</section>

	<section id="newsletter">
		<div class="container">
			<h1>
				Get Room Details
			</h1>
			<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
				<input type="search" placeholder="Enter Room number..." name="roomno">
				<button class="button-1" type="submit" name="submit">
					Submit
				</button>
			</form>
		</div>
	</section>

	<section id="boxes">
		<div class="container">
			<div class="box">
				<img id="easy" src="./images/easy.jpg">
				<h3>
					Easily Available
				</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>

			<div class="box">
				<img src="./images/aff1.jpg">
				<h3>
					Affordable
				</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
			<div class="box">
				<img src="./images/privileges.jpg">
				<h3>
					Privileges
				</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
		</div>
	</section>

	<footer>
		<p>Conference Room Booking and Management, Copyright &copy; 2019 </p>
	</footer>
</body>
</html>