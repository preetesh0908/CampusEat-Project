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

			Menu: <select name = "food" required>
			<?php
			$con = mysqli_connect("db.sice.indiana.edu","i494f19_team12","my+sql=i494f19_team12","i494f19_team12");
			// Check connection
			if(!$con){
				die("Connection failed:" . mysqli_connect_error());
			}
			$location = mysqli_real_escape_string($con,$_POST['location']);
			$result = mysqli_query($con,"SELECT m.Name, m.Description,m.Allergens, m.Cost
			FROM Meal as m 
			ORDER BY mealID");
				while($row = mysqli_fetch_assoc($result)){
					unset($id);
					$name = $row['Name'];

				echo '<option value="'.$name.'">'.$name.'</option>';
			}
			?>
			</select>
			<br>
			<input type="submit" value="Add to Cart"><br>

			<br>
		</form>
	<h3><a class="btn btn-primary btn-lg"  href="meals.php?name=Menu"> View Menu Details </a></h3>
	<h3> Estimated Wait Time: 15 Minutes </h3>
  </div>
</div>
<div class="footer">
  <h2>Questions/Concerns?</h2>
  <h4> Call us at 1-800-FOOD or email us at campusEat@indiana.edu </h4>
</div>

</body>
</html>
