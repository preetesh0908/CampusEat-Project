<?php
   $con = mysqli_connect("db.sice.indiana.edu","i494f19_team12","my+sql=i494f19_team12","i494f19_team12");
   session_start();
   
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['stuID']); 
      
      $sql = "SELECT name FROM MealPlan WHERE id = '$mypassword' and name = '$myusername'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $name = $row['name'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {   
		
		
		   header("Location: receipt.php");
		   exit;
		
      }else {
         echo "Your Login Name or Password is invalid";
      }
   
?>

