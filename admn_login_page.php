<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
	body{
		background-image: url("logo1.jpg");
		background-repeat: no-repeat;
		background-size: 30%;
		background-attachment: fixed;
		background-position: bottom;
		text-align: center;
	}

	h2{
		font-family: "Times New Roman", Times, serif;
		font-size: 40px;
		font-weight: bold;
		text-shadow: 3px 3px 5px black;
		color: white;
		background-image: url("bg.jpg");
		background-size: 100%;
	}

	label{
		font-family: "Times New Roman", Times, serif;
		font-size: 25px;
		font-weight: bold;
	}

	input{
		font-family: "Times New Roman", Times, serif;
		font-size: 20px;
	}

	.button {
	  display: inline-block;
	  border-radius: 25px;
	  background-color: black;
	  border: none;
	  color: white;
	  font-family: "Times New Roman", Times, serif;
	  text-align: center;
	  font-size: 20px;
	  padding: 10px;
	  width: 100px;
	  transition: all 0.5s;
	  cursor: pointer;
	  margin: 5px;
	}

	.button span {
	  cursor: pointer;
	  display: inline-block;
	  position: relative;
	  transition: 0.5s;
	}

	.button span:after {
	  content: '\00bb';
	  position: absolute;
	  opacity: 0;
	  top: 0;
	  right: -20px;
	  transition: 0.5s;
	}

	.button:hover span {
	  padding-right: 25px;
	}

	.button:hover span:after {
	  opacity: 1;
	  right: 0;
	}

	a:link, a:visited {
	  background-color: white;
	  font-family: "Times New Roman", Times, serif;
	  color: black;
	  border: 2px solid black;
	  border-radius: 25px;
	  padding: 10px 20px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	}
	a:hover, a:active {
	  background-color: black;
	  color: white;
	}
</style>
</head>
<body>
     <form action="login.php" method="post">
     	<h2>ADMIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br><br>

     	<button class="button" style="vertical-align: middle;" type="submit"><span>Login</span></button>
		<a href="index.php">home</a>
     </form>
</body>
</html>