<?php
  include('db.php'); 
  
  
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = $_POST['username'];
      $password = $_POST['password']; 
	  $hash = '23dc243nf2913fdn0cqe2';
	  
	  $encrypted = crypt($password,$hash);
      
      $query = loginUser($username,$encrypted);
	  if(sizeOf($query) == 1)
	  {
		  header( 'Location: Homepage.html' );
	  }
   }
   
   

  function loginUser($username, $password) {
	  
	try{
		global $db;
		$query = $db->query( "SELECT id FROM Users WHERE username = " . $username . " and password = " . $password);
		return $query;
	} catch(PDOException $e){
		print ("<strong>Error on login</strong></br>");
		die();
	}
	 
  }
?>
<html>
   
   <head>
      <title>Login Page</title> 
	  <link rel="stylesheet" href="Login.css">
   </head>
   
   <body>
       <form action = "" method = "post">
           <label>UserName  :</label><input type = "text" name = "username" /><br />
           <label>Password  :</label><input type = "password" name = "password" /><br />
           <input type = "submit" value = " Submit "/><br />
        </form>
   </body>
</html>