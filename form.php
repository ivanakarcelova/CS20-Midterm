<html>
<head>
	<title>Reservation Confirmation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="keywords" content="squash, boston, cambridge, sports, medford, home">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="icon" href="Logo.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'Montserrat', sans-serif;
			padding-bottom:80px;
		}
		.fixed-bottom {
			text-align:center;
			position: fixed;
			left:0px;
			bottom:0px;
			width:100%;
			background: #696969;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="https://ivanakarcelova.github.io/CS20-Midterm/index.html"><img class="the_logo" src="Logo.png"></a>
		 	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <a class="nav-item nav-link" href="https://ivanakarcelova.github.io/CS20-Midterm/index.html">Home</a>
		      <a class="nav-item nav-link" href="https://ivanakarcelova.github.io/CS20-Midterm/about.html">About</a>
		      <a class="nav-item nav-link" href="https://ivanakarcelova.github.io/CS20-Midterm/locations.html">Locations</a>
		      <a class="nav-item nav-link" href="https://ivanakarcelova.github.io/CS20-Midterm/membership.html">Membership</a>
		      <a class="nav-item nav-link" href="https://ivanakarcelova.github.io/CS20-Midterm/trainers.html">Trainers</a>
		      <a class="nav-item nav-link" href="https://ivanakarcelova.github.io/CS20-Midterm/schedule.html">Schedule</a>
		      <a class="nav-item nav-link active" href="#">Reservations <span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="https://ivanakarcelova.github.io/CS20-Midterm/contact.html">Contact Us</a>
		    </div>
		  </div>
		</nav>
	<div class="fixed-bottom">
		<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
	    	<a class="text-reset fw-bold" href="index.html" style="color: white;">Boston Squash Club</a>
	  	</div>
	</div>
	<div class="container">
		<?php

			$email = $_GET['email'];
			$name = $_GET['name']; 
			$court = $_GET['courts']; 
			$s_time = $_GET['starttimes']; 
			$e_time = $_GET['endtimes']; 
			$location = $_GET['location']; 
			// if (!empty($_POST['courts'])) {
			// 	$courts = $_POST['courts']; 
			// }

			$message = "Your reservation for court $court has been confirmed from $s_time to $e_time at our $location location. See you soon, $name!";
			mail($email, "Court Reservation", $message,); 

		?>		
	</div>
	<div class="container">
		<ul>
			<p></p>
			<h1>Reservation Information</h1>
			<div class="container">
				<p>You will receive an email shortly confirming if you have successfully placed a reservation!</p>
				<p><strong>Email Address: </strong> <?php echo $email; ?></p>
				<p><strong>Name: </strong> <?php echo $name; ?></p>
				<p><strong>Location: </strong><?php echo $location; ?></p>
				<p><strong>Court Number: </strong> <?php echo $court; ?></p>
				<p><strong>Start Time: </strong> <?php echo $s_time; ?></p>
				<p><strong>End Time: </strong> <?php echo $e_time; ?></p>
			</div>
		</ul>

	</div>
</body>
</html>