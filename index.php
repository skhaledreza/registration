<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">


<head>
	<title>PHP - Registration</title>
</head>


<style>
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}



input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}



input[type=submit] {
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

<div class="info">
      <form action="form_handler.php" method="POST">
        <label>First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
		<br>
		<br>
        <label>Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
		<br>
		<br>
		<label> Age </label>
		<input type ="text" id="year" name="age" placeholder = "Your Age in years"> 
		<br>
		<br>
		<label> Sex </label>
		<select name="SexOption">
			<option value="null"> </option>
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>
		<br>
		<br>
		<label> Password </label>
		<input type ="password" id="pswd" name="password" placeholder = "Type Password"> 
		<br>
		<br>
		<input type="submit" value="Register"/>
	  </form>
		
</div>
		
		
		
</body>
</html>