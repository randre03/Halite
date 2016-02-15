<!DOCTYPE html>
<html>

<head>
	<title>Halite4</title>
	<link rel="stylesheet" type="text/css" href="style/index.css">
	<script src="lib/jquery.min.js"></script>
	<script src="script/backend.js"></script>
	<script src="script/app.js"></script>

	<script type="text/javascript">
		var user = getSession();
		if(user != null) {
			goToDashboard();
		}

		$(document).ready(function() {
			$("#submit").click(function() {
				var username = $("input:text[name=username]").val();
				var password = $("input:password[name=password]").val();

				var signInResult = getUser(null, username, password);
				if(signInResult == null) {
					$("#message").text("That username/password combo is incorrect.");
				} else {
					storeUserSession(username, password, true);
					goToDashboard();
				}
			});
		});
	</script>
</head>

<body>
	<h1>Sign in</h1>

	<p id="message"></p>
	
	<input type="text" name="username" value="">
	<br>
	<input type="password" name="password" value="">
	<br>
	<button id="submit">Submit</button>
</body>

</html>