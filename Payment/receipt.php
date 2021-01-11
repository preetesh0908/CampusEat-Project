<?php
session_start();
?>
<html>
<head>
<title>Thank you! </title>
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
	<h2 align = "center"> Welcome to IU Campus EAT </h2>
</div>
</div>

<div class = "main">
<h1> Thank you for placing your order! </h1>
<h2> Your total came out to  $<?php $total = $_SESSION['total']; echo $total; ?>. Your order will be completed within 10-15 minutes. Have a nice day! </h2> 

<br>
<br>

<button id="Cancel" class="float-left submit-button" >Cancel Order</button>

<script type="text/javascript">
    document.getElementById("Cancel").onclick = function () {
        location.href = "http://cgi.sice.indiana.edu/~team12/cancel.php";
		<?php session_destroy(); ?>
    };
</script>
</div>

<div class="footer">
  <h2>Questions/Concerns?</h2>
  <h4> Call us at 1-800-FOOD or email us at campusEat@indiana.edu </h4>
</div>

</body>
</html>

