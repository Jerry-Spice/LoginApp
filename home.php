<html>
	<head>
		<title>Home</title>
	
		<style>
			body {
				margin: 0px;
				padding: 0px;
			}
			.header{
				display: flex;
				flex-direction: row;
				justify-content: space-between;
				background-color: grey;
				padding: 0px 10px;	
				border-bottom: solid 5px;			
			}
			
		</style>
	</head>


	<body>
		<div class="header">
			<h1>Joshlandia.com</h1>
			<a href="/LoginApp/logout.php"><h1>Logout</h1></a>
		</div>
		<?php
			session_start();
			echo "<h1>Welcome " . $_SESSION["name"] . "!</h1>";
		?>
	</body>

</html>
