<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">

<style>


div {
    border-radius: 10px;
    background-color: #f2f2f2;
    padding: 10px;
}

input[type=password],[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=text]:focus {
    background-color: lightblue;
}

input[type=password]:focus {
    background-color: grey;
}
input[type=submit],[type=button] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}



</style>



<body>

<div class="info1">
      <form action="login1.php" method="POST"/>
        <label>First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="First Name"/>
		<br/>
		<br/>
        <label>Password</label>
        <input type ="password" id="pswd" name="password" placeholder = "Type Password"/> 
		<br/>
		<br/>
		<input style = "text-align:center;" type="submit" name="submit" value="Login"/>
		<br/>
		</form>
</div>

<div class= "reg">		

			<a href="/registry/index.php">
			<input type="button" value="Register" />
			</a>
		
		
</div>		
		
		
</body>
</html>