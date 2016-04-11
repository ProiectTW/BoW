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
				<h3>UserName</h3>
			</section>
		</div>

		<main class = "mainContent">
			<div class = "container">
				<label class = "aboutTitle">About</label>
				<label class = "subtitle">Joined Groups</label>
				<ul class = "recommended">
					<li>
						<a href = "">Group 1</a>
						<a href = ""><img class = "recommendedImg" src = "" /></a>
					</li>
					<li>
						<a href = "">Group 2</a>
						<a href = ""><img class = "recommendedImg" src = "" /></a>
					</li>
					<li>
						<a href = "">Group 3</a>
						<a href = ""><img class = "recommendedImg" src = "" /></a>
					</li>
				</ul>

				<label class = "subtitle">Latest activities ...</label>

			</div>
		</main>
		
		
		<footer class = "container">
			<p>Proiect TW</p>
		</footer>

	</body>
</html>
