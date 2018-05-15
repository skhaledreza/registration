<?php

$name1 = $_POST['firstname'];
$name2 = $_POST['lastname'];
$age = $_POST['age'];
$password = $_POST['password'];
$password = password_hash($password, PASSWORD_DEFAULT);
$selectOption = $_POST['SexOption'];

$servername = "localhost";
$username = "root";
$passwordDB = "";
$dbname = "registry";

 //Create connection
$conn = new mysqli($servername, $username, $passwordDB,$dbname);

 //Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

echo "<br/>";

$sql = "INSERT INTO info (firstName, lastName, ageYear, sex, passWord) VALUES ('$name1', '$name2', '$age', '$selectOption','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	

//for login after registration	
	
echo '<div class= "login">';
echo '<a href="/registry/login.php">';
echo '<input type="button" value="Login" /></a>';
echo '</div>';
	
	
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();


?>