<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Affordable and easy conference room booking system">
	<meta name="keywords" content="conference,conference booking,meeting rooms, book meetings room">
	<meta name="author" content="Kapil Jhade">
	<title> Welcome to Booking</title>
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
					<li>
						<a href="index.php"> Home</a>
					</li>
					<li class="current">
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


	<section id="newsletter">
		<div class="container">
			<h1>
				Get Room Details
			</h1>
			<form>
				<input type="search" placeholder="Enter Room number..." name="q">
				<button class="button-1" type="submit">
					Submit
				</button>
			</form>
		</div>
	</section>

	<section id="main">
		<div class="container">
			<article id="main-col">
				<h1 class="page-title"> Book Rooms</h1>
				<form class="rooms">
					<div class="form-group">
						<label>Enter Contact Info</label>
						<input class="form-input"  type="text" name="number" placeholder="Enter Email/Mobile Number...">
					</div>
					<br>
					<div class="form-group">
						<label>Enter Date</label>
						<input class="form-input" type="date" name="date" placeholder="Enter date..">
					</div>
					<br>
					<div class="form-group">
						<label>Enter Check-in time</label>
						<input class="form-input" type="time" name="time" placeholder="Enter time..">
					</div>
					<br>
					<div class="form-group">
						<label>Enter Check-out time</label>
						<input class="form-input"  type="time" name="time" placeholder="Enter time..">
					</div>
					<br>
					<div class="form-group">
						<label>Enter Number of people</label>
						<input class="form-input"  type="number" name="time" placeholder="Enter Quantity">
					</div>
					<br>
					
						<label>Choose Room Size</label>
					<div class="custom-select">
						<select>
							<option value="Small">Small(10-20 people)</option>
							<option  value="Medium">Medium(40-50 people)</option>
							<option value="Large">Large(100-120 people)</option>
						</select>
					</div>
					<br>
					<div>
						<br>
						<button class="button-1" type="submit">Submit
						</button>
					</div>
				</form>
			</article>

			<aside id="sidebar">
				<div class="dark">
					<h3>ADVERT</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</p>
				</div>
			</aside>
		</div>
	</section>

	<footer>
		<p>Conference Room Booking and Management, Copyright &copy; 2019 </p>
	</footer>
</body>
</html>