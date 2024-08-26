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
    <div class="profile">
		<h1>Profile</h1>
		<form id="profile">
			<label>Name</label>
			<input type="text" placeholder="G.Pranitha">
			<label>Email</label>
			<input type="email" placeholder="gpranitha330@gmail.com">
			<label>Phone Number</label>
            <input type="text" placeholder="8309064540">
            <label>Address</label>
            <input type="text" placeholder="TKR Girls hostel,Meerpt,Hyderbad-500097">
			<button type="submit">Done</button>
		</form>
	</div>
    <script>
		document.getElementById("profile").addEventListener("submit", function(event) {
      event.preventDefault();
      window.location.href = "http://127.0.0.1:3000/home.html";
    });
	</script>
</body>
</html>