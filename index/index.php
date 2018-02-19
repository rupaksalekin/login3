<?php
$error ='';
$error2 = true;

$login_info = array("username"=>"password","rupak"=>"rupak");

function test_input($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}



if(isset($_POST['submit'])){
	$name=test_input($_POST['name']);
	$pass=test_input($_POST['pass']);
	foreach ($login_info as $key => $value) {
	if ($name==$key && $pass==$value) {
		$error2 = false;
	}
}

if(empty($name) || empty($pass)) {
	$error = "User or Password is empty";
}

else if ($error2==false){
	session_start();
	$_SESSION["username"] = $name;
    $_SESSION["password"] = $pass;

	header("location:home.php");
}

else{
	echo "invalid input";
}
}


?>
<!Doctype html>
<html>
	<head>
		<title>index</title>
	</head>
	
	<body>
		<fieldset>


			<a href="register.php">Register here</a>
			<h2>Login</h2> 
			<form method="POST">
			<h4>UserName:<h4>
			<input type="text" name="name" placeholder="Name">
			
			<h4>Password:<h4>
			<input type="text" name="pass" placeholder="Password">
			<br><br>
			
			<button type="submit" name="submit">Login</button>
		
			
			</form>
		<span>
		<?php 
		
		echo $error;
		?>
		</span>
		</fieldset>
	</body>







</html>

