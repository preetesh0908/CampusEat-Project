<html>
<head>
<body>
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
			echo "<table border='1'><tr><th>Name</th><th>Description</th><th>Allergens</th><th>Price</th></tr>";
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>".$row["Name"]."</td><td>".$row["Description"]."</td><td>".$row["Allergens"]."</td><td> $".$row["Cost"]."</td></tr>";
			}
			echo "</table"
		
?>

<br>
<br>
<br>
<h2><a class="btn btn-primary btn-lg"  href="location.php?name=Order"> Back to Order </a> </h2>

</body>
</head>
</html>
