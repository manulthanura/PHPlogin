<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="assets/css/login.css">

	<title>Register Form</title>
</head>
<body>
	<div class="container">
	    <form class="login-email">
		<!--<form action="includes/register-action.php" method="POST" class="login-email">-->
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="User Name" name="username" required>
			</div>
			<div class="input-group">
				<input type="tel" placeholder="Phone Number" name="phonenumber" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Location" name="location" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Farmer or Customer" name="usertype" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a></p>
		</form>
	</div>
</body>
</html>