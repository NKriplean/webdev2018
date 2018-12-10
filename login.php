<?php
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = $_POST['username'];
      $password = $_POST['password']; 
	  $hash = '23dc243nf2913fdn0cqe2';
	  
	  $encrypted = crypt($passcode,$hash);
      
      $sql = "SELECT id FROM users WHERE username = '$username' and password = '$encrypted'";
      //Needs actual hookup to db still
   }
?>
<html>
   
   <head>
      <title>Login Page</title> 
   </head>
   
   <body>
       <form action = "" method = "post">
           <label>UserName  :</label><input type = "text" name = "username" /><br />
           <label>Password  :</label><input type = "password" name = "password" /><br />
           <input type = "submit" value = " Submit "/><br />
        </form>
		<form action = "registration.php" method = "post">
			<input type="submit" value="" " Register User "/>
		</form>
   </body>
</html>