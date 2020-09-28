<?PHP 
	session_start();
	if(isset($_SESSION['user'])==1){
		header('location:home.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/loginstyle.css">
	<title>Login</title>
	<script src="js/login.js">
	</script>
</head>
<body>
	<nav>
	<div class="nav">
			<div >
				<a href="https://www.adityatekkali.edu.in/"><img class="aitamlogo" src="images/aitamlogo.png"></a>
			</div>
			<div >
				<h1>Aitam Hostel</h1>
				<ul class="hover">
					<li><a href="login.php" class="active">Login</a></li>
					<li><a href="team.php">Team</a></li>
				</ul>
			</div>
	</div>
	</nav>	
	<form method="post" action="adminlogin.php" onsubmit="return validate()" name="log">
	<div class="login">
			<h2>Login </h2>
			<input type="text" name="username" placeholder="  username "><br>
			<input type="password" name="password" placeholder=" Password "><br>
			<button>Login</button>
		</div>
	</form>
</body>
</html>