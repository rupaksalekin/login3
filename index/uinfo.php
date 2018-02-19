<?php
session_start();





?>
<!Doctype html>
<html>
<head>
	<title>uinfo</title>
</head>

<body>

    <h1>User Info<h1>
	<table>
		<tr>
			<th>Username</th>
			<th>Password</th>
		</tr>
		<tr>
			<td><?php
			echo $_SESSION["username"];	
			?></td>
			<td><?php
			echo $_SESSION["password"];	
			?></td>
		</tr>


	</table>
	
	<form action="index.php">
		<button type="submit" name="submit">Logout</button>
	</form>

</body>

</html>