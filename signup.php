<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/signup.css">
	<link rel="icon" href="img/pnhs.png">
	<title>Sign Up</title>
</head>

<body>
	<div class="header">
		PARAÑAQUE NATIONAL HIGH SCHOOL - MAIN - Home of the Gentle Warriors
	</div>
	<div class="navbar">
		<img src="img/navigation.png" class="nav-icon nav">
		<img src="img/close.png" class="nav-icon close hide">
		<img src="img/pnhs.png" class="nav-pnhs">
		
		<div class="showNavbar">
			<div class="tab"></div>
			<a href="index.php" class="tab">Home</a>
			<a href="login.php" class="tab">Login</a>
			<a href="signup.php" class="tab">Sign up</a>
			<a href="terms.php" class="tab">Terms and Conditions</a>
		</div>
	</div>
	<div class="content">
		<div class="message">How can I help you today</div>
		<div class="message welcome">Welcome back, User!</div><div class="message">How can I help you today</div>
		<div class="message welcome">Welcome back, User!</div><div class="message">How can I help you today</div>
		<div class="message welcome">Welcome back, User!</div><div class="message">How can I help you today</div>
		<div class="message welcome">Welcome back, User!</div><div class="message">How can I help you today</div>
		<div class="message welcome">Welcome back, User!</div>
	</div>
</body>

<script type="text/javascript">
	let nav = document.querySelector('.nav');
	let close = document.querySelector('.close')
	let navbar = document.querySelector('.showNavbar')

	nav.onclick = function(){
		nav.classList.add('hide')
		navbar.classList.add('show')
		close.classList.remove('hide')
	}

	close.onclick = function(){
		close.classList.add('hide')
		navbar.classList.remove('show')
		nav.classList.remove('hide')
	}

</script>
</html>