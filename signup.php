<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&subset=greek,cyrillic" 
    rel="stylesheet">
</head>
<body>
    
<div class="signup-box">
    <h1>Sign Up</h1>
    <form id="signup-form" action="auth_handler.php" method="post">
        <input type="hidden" name="form_type" value="signup">
        <label>First name</label>
        <input type="text" placeholder="Enter first name" name="firstname" required>
        <label>Last name</label>
        <input type="text" placeholder="Enter last name" name="lastname" required>
        <label>Email</label>
        <input type="email" placeholder="Enter Email" name="email" required>
        <label>Password</label>
        <input type="password" placeholder="Password" name="password" required>
        <label>Confirm Password</label>
        <input type="password" placeholder="Confirm Password" name="confirm_password" required>
        <button type="submit">Submit</button>
        <p class="para-2">Already have an account? <a href="login.php">Login here</a></p>
    </form>
</div>

</body>
</html>

