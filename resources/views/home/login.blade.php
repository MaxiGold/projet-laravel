<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="bootstrap-5.0.2/css/bootstrap.min.css" rel="stylesheet">
	<title>Login</title>
</head>
<body style="background: #1e212e;">
	<div class="row d-flex flex-row" style="height: 100px;">
		<div class="col-md-4" style="height: 100px;"><img src="assets/img/laravel.png" style="height: 80px;"></div>
		<div class="col-md-4" style="height: 100px;"></div>
		<div class="col-md-4" style="height: 100px;"></div>
	</div>
	<div class="row d-flex flex-row" style="height: 400px;">
		<div class="col-md-4" style="height: 400px;"></div>
		<form class="col-md-4 d-flex flex-column justify-content-around rounded shadow" style="height: 400px; background: #171923;">
			<h3 style="color: white;" class="text-center">Authentification</h3>
			<label style="color: white;" for="email">Email :</label>
			<input type="email" class="form-control" name="email" id="email_user" value=""/>
			<label style="color: white;" for="pass">Password :</label>
			<input type="password" class="form-control" name="pass" id="pass_user" value=""/>
			<a class="btn btn-danger" href="/Home">Connexion</a>
			<!-- <input type="submit" name="bouton" class="btn btn-danger" id="connect" value="Connexion"> -->
			<!-- <button class="btn btn-danger" id="connect">Connexion</button> -->
		</form>
		<div class="col-md-4" style="height: 400px;"></div>
	</div>
<!-- Bootstrap core JS-->
		<script src="bootstrap-5.0.2/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			/*x = document.getElementById('connect');
			email = document.getElementById('email_user').value;
			pass = document.getElementById('pass_user').value;
			x.addEventListener("click", connect);
			function connect() {
				console.log("email : "+email+", pass : "+pass);
				if (email == "max.rambao@gmail.com" && pass == "123") {
					window.location.assign("/Home");
				}

			}*/
		</script>
</body>
</html>