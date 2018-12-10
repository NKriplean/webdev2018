<?php
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = $_POST['username'];
      $password = $_POST['password']; 
	  $hash = '23dc243nf2913fdn0cqe2'; //Random hash | Built in method?
	  
	  if (!preg_match('/^(?=[a-z])(?=[A-Z])[a-zA-Z]{8,}$/', $password))
	  {
		  alert("Password must be 8 characters long, contain one capital letter, and one non-number/non-letter character. ");
	  }	
	  else
	  {
		$encrypted = crypt($password,$hash);
		$sql = "INSERT username, password VALUES ('$username', '$encrypted')";
		//Needs actual hookup to db still
	  }
   }
?>
<html>
   
   <head>
      <title>Registration Page</title> 
   </head>
   
   <body>
       <form action = "" method = "post">
           <label>UserName  :</label><input type = "text" name = "username" /><br />
           <label>Password  :</label><input type = "password" name = "password" /><br />
           <input type = "submit" value = " Submit "/><br />
        </form>
   </body>
</html>