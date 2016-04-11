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
				<h3>Group Name</h3>
				<div class = "center">
					<button class = "buttonStyle1" type="button" onclick = "alert('You have joined this group!')">
						<img src = "icons/join.png"/>
						Join this Group
					</button>
					<button class = "buttonStyle1" type="button" onclick = "">
						<img src = "icons/shareSmall.png" />
						Share Group
					</button>
				</div>
			</section>
		</div>

		<main class = "mainContent">
			<div class = "container">

				<div class = "group">
					<label class = "subtitle">Description</label>
					<img class = "descriptionImage" src = "" />
					<p>Full Description of this group</p>
				</div>
				<label class = "subtitle">Tags</label>
				<img class = "tag" src = "icons/tag.png" /><label>videogame</label>
				<img class = "tag" src = "icons/tag.png" /><label>strategy</label>
				<img class = "tag" src = "icons/tag.png" /><label>computers</label>
				<img class = "tag" src = "icons/tag.png" /><label>...</label>

				<!-- Comment Section -->
				<section class = "discussion">
					<form class = "post" method = "POST">
						<p>Speaking as ...(username)</p>
						<textarea placeholder = "Write your comment ..."></textarea>
						<input class="buttonStyle2" type="submit" name="comment" value="Post" />
					</form>
					
					<div class = "comments">
						<div class = "comment">
							<span class = "author">Author 1</span>
							<p>On May 1, 1915, with WWI entering its tenth month, a luxury ocean liner as richly appointed as an English country house sailed out of New York, bound for Liverpool, carrying a record number of children and infants. </p>
						</div>
						<div class = "comment">
							<span class = "author">Author 2</span>
							<p>Comment 2</p>
						</div>
					</div>

				</section>

			</div>
		</main>
		
		
		<footer class = "container">
			<p>Proiect TW</p>
		</footer>

	</body>
</html>
