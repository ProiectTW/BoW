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


		<section class = "about container">
			<h2>Discover, Connect, Share</h2>
		</section>


		<main class = "mainContent">
			<div class = "container">
				<!-- Discover -->
				<section class = "col-1-3">
					<h3>Discover</h3>
					<a href="groups.php">
						<img src = "icons/discover1.png" alt = "discover"/>
					</a>
					<p>Want to find out the right way to have fun? 
					Join different groups and discover new things about the most relaxing and challenging way of spending your free time!</p>
				</section><!--

					Connect
				--><section class = "col-1-3">
					<h3>Connect</h3>
					<a href="members.php">
						<img src = "icons/connect1.png" alt = "connect"/>
					</a>
					<p>It’s sad when you have the greatest hobby in the world but your friends are not seeing it! Here you can connect with other cool people, just like you, so you can talk about how awesome you are and explore new things!</p>
				</section><!--

					Share
				--><section class = "col-1-3">
					<h3>Share</h3>
					<img src = "icons/share1.png" alt = "share"/>
					<p>Do you feel like your friends are exhausted because they are focusing too much on work and they forget to relax? Share a hobby and they will fall in love with it!</p>
				</section>
			</div>
		</main>
		
		
		<footer class = "container">
			<p>Proiect TW</p>
		</footer>

	</body>
</html>
