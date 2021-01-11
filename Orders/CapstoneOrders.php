<html>
<head>
<title>My Orders | IU CampusEAT </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CapstoneHome.css">
</head>
<body>

<div class="header">
  <h1>IU CampusEAT</h1>
  <h3>Food on the Go!</h3>
</div>
<div class="navbar">
  <a href="CapstoneHome.php">Home</a>
  <a href="CapstoneOrders.php">My Orders</a>
  <a href="CapstoneFAQs.html">FAQs</a>
  <a href="CapstoneLogin.html" class="right">My Profile</a>
</div>
<div class="row">
  <div class="side">
	<h2 align = "center"> Your Cart </h2>
		<tr>
		
		</tr>
	</table>
  </div>
  <div class="main">
	<h2 align = "center"> Current Order </h2>
	<h4> Order #17 </h4>
		
		<form action="cart.php" method = "POST">

			Location: <select name = "location" required>
			<?php
			$con = mysqli_connect("db.sice.indiana.edu","i494f19_team12","my+sql=i494f19_team12","i494f19_team12");
			// Check connection
			if(!$con){
				die("Connection failed:" . mysqli_connect_error());
			}
			$result = mysqli_query($con,"SELECT name FROM Location ORDER BY locationID");
				while($row = mysqli_fetch_assoc($result)){
					unset($id);
					$name = $row['name'];

				echo '<option value="'.$name.'">'.$name.'</option>';
			}
			?>
			</select>
			<br>
			<input type="submit" value="Submit Location"><br>

			<br>
		</form>
		
	
  </div>
</div>
<div class="footer">
  <h2>Questions/Concerns?</h2>
  <h4> Call us at 1-800-FOOD or email us at campusEat@indiana.edu </h4>
</div>

</body>
</html>

