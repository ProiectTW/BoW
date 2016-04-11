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
				<h3>Account</h3>
			</section>
		</div>

		<main class = "mainContent">
			<div class = "container">
				<label class = "subtitle">Name</label>
				<label>UserName ...</label>
				<label class = "subtitle">Joined Groups</label>
				<ul>
					<li>group 1</li>
					<li>group 2</li>
					<li>group 3</li>
				</ul>

				<!-- If USER == ADMIN !!-->

				<label class = "subtitle">Generate Reports:</label>

				<a href = "" target="_blank">
					<img class = "feed" src = "icons/html.png" alt = "icon for the HTML format">
				</a>

				<a href = "" target="_blank">
					<img class = "feed" src = "icons/atom.png" alt = "icon for the ATOM format">
				</a>

				<a href = "" target="_blank">
					<img class = "feed" src = "icons/pdf.png" alt = "icon for the PDF format">
				</a>
				
				<a href = "" target="_blank">
					<img class = "feed" src = "icons/csv.png" alt = "icon for the CSV format">
				</a>

				<label class = "subtitle">Recommended Hobbies:</label>
				<ul class = "recommended">
					<li>
						<a href = "">hobby 1</a>
						<a href = ""><img class = "recommendedImg" src = "" /></a>
					</li>
					<li>
						<a href = "">hobby 2</a>
						<a href = ""><img class = "recommendedImg" src = "" /></a>
					</li>
					<li>
						<a href = "">hobby 3</a>
						<a href = ""><img class = "recommendedImg" src = "" /></a>
					</li>
				</ul>
				<label class = "subtitle">Latest Activities...</label>
			</div>
		</main>
		
		
		<footer class = "container">
			<p>Proiect TW</p>
		</footer>

	</body>
</html>
