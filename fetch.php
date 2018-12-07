<?php 
	include("db.php");

	if(isset($_POST["id"])){
		$query = "SELECT * FROM Items WHERE menuId = '".$_POST["id"]."'";
		$result = $db->prepare($query);
		$result->execute();
		$output = '';
		while($row=$result->fetch(PDO::FETCH_ASSOC)){
			//extract($row);
			$output .= '
				<table>
					<tr>
						<th><h4>'.$row["itemId"].'</h4>
						<th><h4>'.$row["itemName"].'</h4>
						<th><h5>&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp;'.$row["itemPrice"].'</th>
						<th><button>Order Now</button></th>
					</tr>
				</table>
			';
		}
		echo $output;
	}

?>