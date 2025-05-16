<html>

	<head>
		<title> Login App</title>
	
		<style>
			body {
				display: flex;
				flex-direction: row;
				justify-content: center;
			}	
			.login_area {
				display: flex;
				flex-direction: row;
				justify-content: center;
				background-color: grey;
				border: 5px solid black;
				border-radius: 10px;
				width: fit-content;
				height: auto;
				padding: 20px;
				margin: 30px;
			}
	
		</style>
	</head>
	<body>

	<div class="login_area">
			<form action="login.php" method="POST">
			<table>
				<tr>
					<td><label>Username</label></td>
					<td><input type="text" name="username" placeholder="JohnSmith12345" /></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="password" /></td>
				</tr>
				<tr>
					<td><button type="submit">Log In</button></td>
				</tr>
			</table>			
			</form>
		</div>

	<?php
	include "credentials.php";
	
		?>
	</body>
</html>
