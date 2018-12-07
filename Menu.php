<?php 

  include('db.php');

  function retrieve_menus() {
	  
	try{
		global $db;
		$query = $db->query("SELECT * FROM Menu");
		$query->execute();
	} catch(PDOException $e){
		print "<strong>Error retrieving menus</strong><br> $e";
		die();
	}
	 
  }
  
  function retrieve_items($menu) {
	try{
		global $db;
		$results = $db->query("SELECT * FROM Items WHERE menuId = " . $menu);
		return $results;
	} catch(PDOException $e){
		print "<strong>Error retrieving items</strong><br> $e";;
		die();
	}
  }

$menus = retrieve_menus();
$items = retrieve_items(0);

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
		<meta name="keywords" content="HTML">
		<meta name="author" content="Nick Kriplean">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="Menu.css">
    <title>
      China One - Menu
    </title>
	<script src="cart.js"></script>
  </head>
  <body>
    <h1>
		<a href="Homepage.html">
			<img id="logo" src="images/chinaOne.png" alt="ChinaOne"><h1>Open 7 Days A Week</h1>
		</a>
	</h1>
	<div id="outer">
		<!-- inline css is not good practice but the bootstrap css kept overriding-->
		<div class="inner" style="color:black;">
			<form action="Homepage.html">
				<input type="submit" value="Home" class="buttonList" />
			</form>
		</div>
		<div class="inner" style="color:black;">
			<form action="Menu.php">
				<input type="submit" value="Order Online" class="buttonList" />
			</form>
		</div>
		<div class="inner" style="color:black;">
			<form action="Location.html">
				<input type="submit" value="Location" class="buttonList" />
			</form>
		</div>
		<div class="inner" style="color:black;">
			<form action="Tracker.html">
				<input type="submit" value="Order Tracker" class="buttonList" />
			</form>
		</div>
		<div class="inner" style="color:black;">
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
	<h2>Menu</h2>
	<div id="outer">
		<nav class="navbar navbar-default">
			 <div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">China One Menu</a>
				</div>
			<ul class="nav navbar-nav">
				<?php
					$query = $db->prepare("SELECT * FROM Menu");
					$query->execute();

					while($row=$query->fetch(PDO::FETCH_ASSOC)) 
					{
						extract($row);
						echo '
							<li id="'.$row["menuId"].'">
								<a href="#">'.$row["menuName"].'</a>
							</li>
						';
					}
				?>
			</ul>
		</div>
		</nav>
		<span id="menu_details"></span>
		
		<div class="inner">
			<ul id="cart"></ul>
			<p id="total"></p>
		</div>
		
	</div>
	
  </body>
</html>
<script>
	$(document).ready(function(){
		function load_menu_details(id) 
		{
			$.ajax({
				url:"fetch.php", 
				method:"POST",
				data:{id:id},
				success:function(data)
				{
					$('#menu_details').html(data);
				}
			});
		}

		load_menu_details(1);
	});
</script>