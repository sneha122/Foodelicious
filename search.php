

 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">



      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	  <script>
		$(document).ready(function(){$(".button-collapse").sideNav();});
	  </script>
	   <script>$(document).ready(function(){
      $('.slider').slider();
    });</script>
	  
	<nav style="background-color:#2E0854">
		<div class="nav-wrapper">
			<a href="home.html" class="brand-logo center">Foodelicious</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="search.html">back</a></li>
				<li><a href="feedback.html">Leave a Feedback</a></li>
				</ul>
		</div>
	</nav>

<?php
$conn=mysqli_connect("localhost","root","","food");

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

$cuisine=$_POST['Cuisine'];
$location=$_POST['Location'];

$sql="SELECT * FROM PLACE WHERE Cuisine='$cuisine' OR Location='$location'";
$records=$conn->query($sql);
?>

<html>
<body>
<table class="centered">
        <thead>
          <tr>
              <th>Place_name</th>
              <th>Location</th>
			  <th>Cuisine</th>
			  <th>Link</th>
          </tr>
        </thead>

		<?php
		while($place=mysqli_fetch_array($records))
		{
			echo "<tr>";
			echo "<td>".$place['Place_name']."</td>";
			echo "<td>".$place['Location']."</td>";
			echo "<td>".$place['Cuisine']."</td>";
			$link=$place['Link'];
			echo "<td><a href='$link'>Click Here</a></td>";
		}
		?>
      </table>
            
</body>
</html>