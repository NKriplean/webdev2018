<?php
  include('db.php');
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = $_POST['username'];
      $password = $_POST['password']; 
	  $hash = '23dc243nf2913fdn0cqe2'; //Random hash | Built in method?
	  
	$chars = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if(!$chars || !$number || !$specialChars || strlen($password) < 8) {
            echo "<ul>
                <li>Your password must contain a number</li>
                <li>Your password must contain a special character</li>
                <li>Your password must be 8 characters in length</li>
            </ul>";
    }
	else {
		$encrypted = crypt($password,$hash);
		registerUser($username,$encrypted);
		header('Location: Homepage.html');
	  }
   }
   
   function registerUser($username, $password) {
	  
	try{
		global $db;
		$query = $db->query( "INSERT INTO Users (username, password) VALUES (" . $username . ", " . $password);
	} catch(PDOException $e){
		print "<strong>Error on login</strong><br>";
		die();
	}
	 
  }
?>
<html>
   
   <head>
      <title>Registration Page</title> 
	  <link rel="stylesheet" href="Login.css">
   </head>
   
   <body>
   	<span>
		<h1>
			<a href="Homepage.html">
				<img id="logo" src="images/chinaOne.png" alt="ChinaOne">
			</a>
		</h1>
	</span>
       <form action = "" method = "post">
           <label class="label">Username:</label><input class="text" type = "text" name = "username" /><br />
           <label class="label">Password:</label><input class="text" type = "password" name = "password" /><br />
           <input class="button" type = "submit" value = " Submit "/><br />
        </form>
   </body>
</html>