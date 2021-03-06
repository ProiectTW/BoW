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
				<h3>Groups</h3>
			</section>
		</div>


		<main class = "mainContent">
			<div class = "container">

				<form class = "searchForm" method = "GET">
					<input class = "search" type = "text" name = "group" placeholder = "Search groups ...">
				</form>

				<!-- From DATABASE - > extract list of groups -->	
				<ul class = "list">
					<li>
						<div class = "groupImage"></div>
						<a class = "title" href = "viewGroup.php">Group Name 1</a>
						<span class = "subtitle">Description</span>	
						<p>insert group description here ... + common Interests!</p>			
					</li>
					<hr />
					<li>
						<div class = "groupImage"></div>
						<a class = "title" href = "viewGroup.php">Group Name 2</a>	
						<span class = "subtitle">Description</span>
						<p>insert group description here ...</p>				
					</li>
					<hr />
					<li>
						<div class = "groupImage"></div>
						<a class = "title" href = "viewGroup.php">Group Name 3</a>
						<span class = "subtitle">Description</span>
						<p>insert group description here ... </p>	
					</li>
				</ul>


			</div>
		</main>
		
		
		<footer class = "container">
			<p>Proiect TW</p>
		</footer>

	</body>
</html>
