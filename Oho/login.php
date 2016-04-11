<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Oho</title>
		<?php include "setup_header.php"; ?>  	
	</head>	

	<body>
		<header class = "container group">	
			<h1 class = "logo">
				<a href = "index.php">Online <br /> Hobbies</a>
			</h1>

			<nav class = "navigation">
				<ul>
					<li><a href="index.php">Home</a></li><!--
				--><li><a href="groups.php">Groups</a></li><!--
				--><li><a href="members.php">Members</a></li><!--
					If NOT logged IN:
				--><li><a href="register.php">Register</a></li><!--
				--><li><a href="login.php">Login</a></li><!--
					ELSE
				--><li><a href="createHobby.php">Create Your Hobby</a></li><!--
				--><li><a href="account.php">Account</a></li>
				</ul>
			</nav>

		</header>


		<div class = "title">
			<section class = "about container">
				<h3>Login</h3>
			</section>
		</div>

		<main class = "mainContent">
			<form class = "loginRegisterForm container" method = "POST">
				<fieldset class="account-info">
					<label>
						E-mail / Username
						<input type="text" name="user" required />
					</label>							
					<label>
						Password
						<input type="password" name="password" required />
					</label>
				</fieldset>
				
				<fieldset class="account-action">
					<input class="submitButton" type="submit" name="submit" value="Login" />
					<label>
						<input type="checkbox" name="remember"> Remember my name
					</label>
				</fieldset>
			</form>
		</main>
		
		
		<footer class = "container">
			<p>Proiect TW</p>
		</footer>

	</body>
</html>
