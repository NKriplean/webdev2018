<?php 

  require_once(credentials.php);

  function db_connect() {
	try{
		$db = new PDO("mysql:dbname=DB_NAME;host=DB_SERVER,DB_USER,DB_PWD");
	} catch (PDOException $e) {
		print "Error!<br/>";
		die();
	}
  }

  function db_disconnect() {

	$db = null;

  }
  
  function retrieve_menus() {
	  
	try{
		$results = $db->query("SELECT * FROM Menu");
		return $results;
	} catch(PDOException $e){
		print "Error!<br/>";
		die();
	}
	  
  }
  
  function retrieve_items($menu)
  {
	try{
		$results = $db->query("SELECT * FROM Items WHERE menuId = " + $menu);
		return $results;
	} catch(PDOException $e){
		print "Error!<br/>";
		die();
	}
  }
  
  $db = db_connect();
  $menus = retrieve_menus();
  $items = retrieve_items(0);

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
		<meta name="keywords" content="HTML">
		<meta name="author" content="Nick Kriplean">
		<link rel="stylesheet" href="Menu.css">
    <title>
      China One - Menu
    </title>
	<script src="cart.js"></script>
  </head>
  <body>
    <h1>
		<a href="Homepage.html">
			<img id="logo" src="images/chinaOne.png" alt="ChinaOne">Open 7 Days A Week
		</a>
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
	</br>
	

	<!--Call database for the list of menus, loading the left side menu selector.
	After that, populate the menu space with the first menu by default.
	Change the menu space correctly depending
	on if the user clicks an different menu. -->

	<div id="outer">
	
		<div class="inner">
			<table>
				<tr>
					<th>Menu</th>
				</tr>
				<tr>
					<?php for($i = 0; $i < $menus.length; $i++)
						{
							?><td><button <!---On click to get items for this menu(correct menu from retrieve_items(menu[0][i]))-->><?php $menus[1][i] ?></button></td><?php 
						}
					?>
				</tr>
			</table>
		</div>
		
		<div class="inner">
			<table>
				<caption>Selected Menu</caption>
				<tr>
					<?php for($i = 0; $i < $menus.length; $i++)
						{
							?><td><button onclick=addToCart()><?php $items[2][i] ?> <?php $items[3][i] ?></button></td><?php 
						}
					?>
				</tr>
			</table>
		</div>
		
		<div class="inner">
			<ul id="cart"></ul>
			<p id="total"></p>
		</div>
		
	</div>
	
  </body>
</html
