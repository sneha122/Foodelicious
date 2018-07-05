<!DOCTYPE html>
  <html>
    <head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
    </head>
<body background="bgprofile.jpg">
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
	  
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color:#2E0854">
      <div class="container">
        <a class="navbar-brand" href="#">Foodelicious</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<?php
$conn=mysqli_connect("localhost","root","","foodelicious");

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
session_start();
$username=$_SESSION['username'];

$sql="SELECT * FROM users WHERE username='$username'";
$records=$conn->query($sql);
?>

<html>
<body>
<div class="container" style="margin-top:25px;margin-left:500px;margin-right:400">
<div class="row">
<div class="col-lg-5">
<font color="white"><h1 class="my-4"><br>Profile Details:</h1></font>
<div class="list-group">


		<?php
		while($place=mysqli_fetch_array($records))
		{
			echo '<a  class="list-group-item"><i class="material-icons">person</i><p><b>Name : </b>'.$place['name'].'</p></a>';
			echo"<br>";
			echo '<a  class="list-group-item"><i class="material-icons">phone</i><p><b>Contact :  </b>'.$place['Phone'].'</p></a>';
			echo"<br>";
			echo '<a  class="list-group-item"><i class="material-icons">markunread</i><p><b>Email Id  :  </b>'.$place['emailid'].'</p></a>';
			echo"<br>";
			echo '<a  class="list-group-item"><i class="material-icons">account_circle</i><p><b>Username:  </b>'.$place['username'].'</p></a>';
			echo"<br>";
			echo '<a  class="list-group-item"><i class="material-icons">cake</i><p><b>Date of Birth:  </b>'.$place['DOB'].'</p></a>';
			
		}
		?>
    </div>
</div>
</div>
</div>	
</body>
</html>