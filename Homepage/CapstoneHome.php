
<html>
<head>
<title>Home | IU CampusEAT </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CapstoneHome.css">
<style>

</style>
</head>
<body>

<div class="header">
  <h1>IU CampusEAT</h1>
  <h3>Food on the Go!</h3>
</div>
<div class="navbar">
  <a href="CapstoneHome.html">Home</a>
  <a href="CapstoneOrders.php">My Orders</a>
  <a href="CapstoneFAQs.html">FAQs</a>
  <a href="CapstoneLogin.html" class="right">My Profile</a>
</div>
<div class="row">
  <div class="side">
	<h2 align = "center"> Featured Locations </h2>
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

			echo "$name", PHP_EOL ;
			
		}
	?>
	
  </div>
  <div class="main">
  <!DOCTYPE html>
<html>
  <head>
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
  </head>
  <body>
    <h3> Locations on Campus </h3>
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
    function initMap(){
      // Map options
      var options = {
        zoom:15,
        center:{lat:39.1727,lng:-86.5222}
      }
      // New map
      var map = new google.maps.Map(document.getElementById('map'), options);
      // Listen for click on map
      google.maps.event.addListener(map, 'click', function(event){
        // Add marker
        addMarker({coords:event.latLng});
      });
      /*
      // Add marker
      var marker = new google.maps.Marker({
        position:{lat:42.4668,lng:-70.9495},
        map:map,
        icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
      });
      var infoWindow = new google.maps.InfoWindow({
        content:'<h1>Lynn MA</h1>'
      });
      marker.addListener('click', function(){
        infoWindow.open(map, marker);
      });
      */
      // Array of markers
      var markers = [
        {
          coords:{lat:39.1727,lng:-86.5222},
          content:'<h2><a class="btn btn-primary btn-lg"  href="CapstoneOrders.php?name=Order"> Luddy Hall </a></h2>'
        },
        {
          coords:{lat:39.1710,lng:-86.5168},
          content:'<h2><a class="btn btn-primary btn-lg"  href="CapstoneOrders.php?name=Order"> Wells Library </a></h2>'
        },
        {
          coords:{lat:39.1651,lng:-86.5125},
	  content:'<h2><a class="btn btn-primary btn-lg"  href="CapstoneOrders.php?name=Order"> Forest Quad </a></h2>'	
        },
	{
          coords:{lat:39.1724,lng:-86.5194},
          content:'<h2><a class="btn btn-primary btn-lg"  href="CapstoneOrders.php?name=Order"> Kelley School </a></h2>'
        },      
	{
          coords:{lat:39.170524,lng:-86.51579},
          content:'<h2><a class="btn btn-primary btn-lg"  href="CapstoneOrders.php?name=Order"> Wright Quad </a></h2>'
        }
	      
      ];
      // Loop through markers
      for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
      }
      // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          //icon:props.iconImage
        });
        // Check for customicon
        if(props.iconImage){
          // Set icon image
          marker.setIcon(props.iconImage);
        }
        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });
          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });
        }
      }
    }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbQf-NG8Cy2KhOSW7eLoXd-cg6OAv9hTY&callback=initMap">
    </script>
  </body>
</html>
	  </div>
</div>
<div class="footer">
  <h2>Questions/Concerns?</h2>
  <h4> Call us at 1-800-FOOD or email us at campusEat@indiana.edu </h4>
</div>

</body>
</html>
