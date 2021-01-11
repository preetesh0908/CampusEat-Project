<?php
session_start();
?>
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
  
  <div class="main">
	<h2 align = "center"> Current Order </h2>
	<h3> Order #17 </h3>
	<h4> Your total is: $<?php $total = $_SESSION['total']; echo number_format($total, 2) ?>. </h4>	
	<div id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=AajOoh5gw_ozlSiw-ETpEDuZs1jR7Bytxcbehl13y2w7R3qInNp4UEYhmFcloqqhmagSofKbtAzMldAF&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
    paypal.Buttons({
        style: {
            shape: 'rect',
            color: 'gold',
            layout: 'vertical',
            label: 'paypal',
            
        },
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value:  <?php $total = $_SESSION['total']; echo $total; ?> 
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                alert('Transaction completed by ' + details.payer.name.given_name + '!');
            window.location.href = "http://cgi.sice.indiana.edu/~team12/receipt.php";
			});
        }
    }).render('#paypal-button-container');
</script>
<br>
<br>
<img src="ibucks.png" alt="Ibucks Meal Plan" height = "200" width = "200">
<br>
<br>
	<form name ="login" Method ="POST" Action ="login.php">

		<INPUT TYPE = "TEXT" VALUE ="username" Name ="username">
		<INPUT TYPE = "TEXT" VALUE ="StudentID" Name ="stuID">
		<INPUT TYPE = "Submit" Name = "Submit" VALUE = "Login">

	</form>
  </div>
</div>
<div class="footer">
  <h2>Questions/Concerns?</h2>
  <h4> Call us at 1-800-FOOD or email us at campusEat@indiana.edu </h4>
</div>

</body>
</html>





































