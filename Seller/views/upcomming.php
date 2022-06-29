<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "admin");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}



?>
<!DOCTYPE html>
<html>
	<head>
		<title>Wishlist</title>
		<link rel="stylesheet" href="../css/buygame.css">
		<script src="../js/addcart.js"></script>
	</head>
	<body>
        <ul>
        <a href="buyer_dashboard.php">Back</a>
        </ul>
		<br />
		<div class="container">
			<br />
			<br />
			<br />
			<br />
			<?php
				$query = "SELECT * FROM product";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="container">
				<form method="post"  action="../views/upcomming.php?action=add&id=<?php echo $row["id"]; ?>">
					<div  align="center">
						<img src="<?= $row["img"] ?>" height="100px" width="100px" /><br />

						<h4 ><?php echo $row["game_name"]; ?></h4><br>

						<h4 >Tk <?php echo $row["price"]; ?></h4><br>

						<input type="text" id="quantity" name="quantity" value="1"  />
                        <span id='e'></span><br>
						<input type="hidden" name="hidden_name" value="<?php echo $row["game_name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                        <button id="add_to_cart" name="add_to_cart" onclick="return cartgame(<?php echo $row['id']; ?>)">Add to Wishlist</button>
						

					</div>
				
				</form>
			</div>
			<?php
					}
				}
			?>
			
		</div>
	</div>
    <div><span id='e1'></span></div>
	<br />

	
	</body>
</html>

