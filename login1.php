<?php
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

echo "<br/>";
 
$name1 = $_POST['firstname'];
$password_1 = $_POST['password'];


 
 
$sql_query = "SELECT * FROM info WHERE firstName ='$name1'";
$result = mysqli_query($conn,$sql_query);
$count = mysqli_num_rows($result);




	if ($count <1){
	echo "OUT";
	//header( "Location: ../registry/login.php");
	
	}
	else {
		if ($row = mysqli_fetch_assoc($result)){
		//compare hashed password and the input password
		$hpc= password_verify($password_1,$row['passWord'] );
	
	if($hpc==false){
		echo "Error";
		exit();
	
	}elseif ($hpc == true){
		echo "Welcome ". $name1;

		echo  "<br/>";
		echo  "<br/>";
		echo  "<br/>";


$table = mysqli_query($conn,"SELECT * FROM info");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Password</th>
</tr>";

while($row = mysqli_fetch_array($table))
{
echo "<tr>";
echo "<td>" . $row['firstName'] . "</td>";
echo "<td>" . $row['lastName'] . "</td>";
echo "<td>" . $row['passWord'] . "</td>";
echo "</tr>";
}
echo "</table>";






	}
	}
	}
	
 mysqli_close($conn); // Closing connection
 
?>