<?php
include "credentials.php";
session_start();
$name = $_POST["username"];
$user_password = $_POST["password"];

try {
	$db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);

	$stmt1 = $db->prepare("SELECT COUNT(username) FROM $table WHERE username=:name");
	$stmt1->execute([":name" => $name]);
	$name_found = $stmt1->fetch(PDO::FETCH_NUM);

	$stmt2 = $db->prepare("SELECT COUNT(username) FROM $table WHERE password=:password");
	$stmt2->execute([":password" => $user_password]);
	$password_found = $stmt2->fetch(PDO::FETCH_NUM);

	if ($name_found[0] == 1 && $password_found[0] == 1) {
		$_SESSION["name"] = $name;
		header("Location: /LoginApp/home.php");
	} else {
		header("Location: /LoginApp/home.php");
	}

	echo "<h1>Name Found: " . $name_found[0] . "</h1>";

	echo "<h1>Password Found: " . $password_found[0] . "</h1>";

} catch (PDOException $e) {
	print("Error!: " . $e->getMessage() . "<br/>");

	die();
}

echo $_SESSION["name"];

?>
