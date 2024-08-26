<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono&subset=greek,cyrillic" 
	rel="stylesheet">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial- scale=1.0">
</head>
<body>
	
<div class="login-box">
    <h1>Login</h1>
    <form id="login-form" action="auth_handler.php" method="post">
        <input type="hidden" name="form_type" value="login">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Enter Email" name="email" required>
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter Password" name="password" required>
        <p class="para-2"><a href="#">Forgot Password?</a></p>
        <button type="submit">Login</button>
        <p class="para-2">Not have an account? <a href="signup.php">Sign Up here</a></p>
    </form>
</div>
</body>
</html>
