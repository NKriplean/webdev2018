﻿<?

include('db.php');

  function retrieve_menus() {
	  
	try{
		global $db;
		$query = $db->prepare("INSERT INTO CustomerContact (emailAddress, phoneNumber, contactMessage) VALUES ($emailAddress,$phoneNumber,$contactMessage)");
		$query->execute();
		$results = $query->fetch(PDO::FETCH_ASSOC);
		return $results;
	} catch(PDOException $e){
		print "<strong>Error retrieving menus</strong><br> $e";
		die();
	}
	 
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
		<meta name="keywords" content="HTML">
		<meta name="author" content="Alex Maldwin">
		<link rel="stylesheet" href="Contact.css">
    <title>
      China One - Contact Us
    </title>
  </head>
  <body>
    <h1>
		<img id="logo" src="images/chinaOne.png" alt="ChinaOne">Open 7 Days A Week
	</h1>
		<div id="outer">
		<div class="inner">
			<form action="Homepage.html">
				<input type="submit" value="Home" class="buttonList" />
			</form>
		</div>
		<div class="inner">
			<form action="Menu.php">
				<input type="submit" value="Order Online" class="buttonList" />
			</form>
		</div>
		<div class="inner">
			<form action="Location.html">
				<input type="submit" value="Location" class="buttonList" />
			</form>
		</div>
		<div class="inner">
			<form action="Tracker.html">
				<input type="submit" value="Order Tracker" class="buttonList" />
			</form>
		</div>
		<div class="inner">
			<form action="Contact.html">
				<input type="submit" value="Contact Us" class="buttonList" />
			</form>
		</div>
	</div>
	<div class="container">  
	<p id ="call" >
	<img id="phoneIcon" src="images/phoneIcon.png" alt="Phone icon">
	Call us: (920)-233-8888 
	</p>

	<form id="contact" action="" method="post">
				<h3>CONTACT US</h3>
				<h4>Contact us today, we will reply as soon as possible!</h4>
		<fieldset>
			<input placeholder="Your Name" type="text" tabindex="1" required autofocus>
		</fieldset>
		<fieldset>
			 <input placeholder="Your Email Address" type="email" tabindex="2" required>
		</fieldset>
		<fieldset>
			<input placeholder="Your Phone Number" type="tel" tabindex="3" required>
		</fieldset>
		<fieldset>
			<textarea placeholder="Type your Message Here..." tabindex="5" required></textarea>
		</fieldset>
		<fieldset>
			<button name="submit" type="submit" id="contact-submit">Submit</button>
		</fieldset>
	 </form>
 
	
	
	<script>
	</script>
	
  </body>
</html
