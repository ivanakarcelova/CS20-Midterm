<html>
<head>
	<title>Reservation</title>
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
	<div class="container">
		<h1>Reservation</h1>
		<h4 class="description">Please fill out the form below to reserve a court. A confirmation of your court will be sent to your email.</h4>
		<br>
		<form id="form" onsubmit="return validate()" method="GET" action="http://rohunnanda.great-site.net/form.php" target="_blank">
		  <div class="form-group">
		    <label for="exampleName">Name</label>
		    <input type="name" name="name" class="form-control" id="exampleName" placeholder="Enter name">
			<div class='errorName'>&nbsp;</div>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Email</label>
		    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter email" required>
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <br>
		  <div class="form-group">
			<label for="court-form">Location: </label>
			<p> 
				<input type="radio"  name="location" value ="Cambridge" id ="cambridge" checked="checked"/> Cambridge <br>
				<input type="radio"  name="location" value ="Boston" id ="boston" />
				Boston <br>
				<input type="radio"  name="location" value ="Medford" id ="medford" />
				Medford <br>
			</p>
		  </div>

	      <div class="form-group">
		    <label for="court-form">Courts</label>
		    <select class="form-control form-control-sm court-input" name="courts">
  				<option name="" disabled selected>Choose Option</option>
  				<option name="s1">Court 1 (Singles)</option>
  				<option name="s2">Court 2 (Singles)</option>
  				<option name="s3">Court 3 (Singles)</option>
  				<option name="s4">Court 4 (Singles)</option>
  				<option name="s5">Court 5 (Singles)</option>
  				<option name="s6">Court 6 (Singles)</option>
  				<option name="s7">Court 7 (Singles)</option>
  				<option name="s8">Court 8 (Singles)</option>
  				<option name="s9">Court 9 (Singles)</option>
  				<option name="s10">Court 10 (Singles)</option>
  				<option name="d1">Court 1 (Doubles)</option>
  				<option name="d2">Court 2 (Doubles)</option>
			</select>
			<div class='errorMessage'>&nbsp;</div>
		  </div>
		  <div class="form-group">
		    <label for="starttime-form">Start Time</label>
		    <select class="form-control form-control-sm starttime-input" name="starttimes">
  				<option name="" disabled selected>Choose Option</option>
  				<option name="s7a">7:00 AM</option>
  				<option name="s8a">8:00 AM</option>
  				<option name="s9a">9:00 AM</option>
  				<option name="s10a">10:00 AM</option>
  				<option name="s11a">11:00 AM</option>
  				<option name="s12p">12:00 PM</option>
  				<option name="s1p">1:00 PM</option>
  				<option name="s2p">2:00 PM</option>
  				<option name="s3p">3:00 PM</option>
  				<option name="s4p">4:00 PM</option>
  				<option name="s5p">5:00 PM</option>
  				<option name="s6p">6:00 PM</option>
  				<option name="s7p">7:00 PM</option>
  				<option name="s8p">8:00 PM</option>
  				<option name="s9p">9:00 PM</option>
  				<option name="s10p">10:00 PM</option>
			</select>
			<div class='errorMessage'>&nbsp;</div>
		  </div>
		  <div class="form-group">
		    <label for="endtime-form">End Time</label>
		    <select class="form-control form-control-sm endtime-input" name="endtimes">
  				<option name="" disabled selected>Choose Option</option>
  				<option name="e8a">8:00 AM</option>
  				<option name="e9a">9:00 AM</option>
  				<option name="e10a">10:00 AM</option>
  				<option name="e11a">11:00 AM</option>
  				<option name="e12p">12:00 PM</option>
  				<option name="e1p">1:00 PM</option>
  				<option name="e2p">2:00 PM</option>
  				<option name="e3p">3:00 PM</option>
  				<option name="e4p">4:00 PM</option>
  				<option name="e5p">5:00 PM</option>
  				<option name="e6p">6:00 PM</option>
  				<option name="e7p">7:00 PM</option>
  				<option name="e8p">8:00 PM</option>
  				<option name="e9p">9:00 PM</option>
  				<option name="e10p">10:00 PM</option>
  				<option name="e11p">11:00 PM</option>
			</select>
			<div class='errorMessage'>&nbsp;</div>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit Reservation</button>
		</form>
	</div>
	<div class="fixed-bottom">
		<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
	    	<a class="text-reset fw-bold" href="index.html" style="color: white;">Boston Squash Club</a>
	  	</div>
	</div>
</body>
</html>