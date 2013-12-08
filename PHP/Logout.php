<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Logout</title>
<link href="http://fonts.googleapis.com/css?family=Enriqueta" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="CSS/LogoutCSS.css" />
</head>

<body>
<?php
//keeps session going
session_start();
//keeps database connected
try{
	$mySQLusername = 'root';
	$mySQLpassword = '';
	$dns = 'mysql:host=localhost;dbname=susan';
	
	$database = new PDO($dns, $mySQLusername, $mySQLpassword);


}
catch(PDOException $ex)
{
		echo "there is a problem";
		echo $ex->getMessage();
		exit();
}
//disconnects database and logouts out user
session_destroy();
?>
<!--Comment-->
<div id="logout">
<p>You have been logged out.</p>
</div>

<!--Button to return user to website Home Page-->
<div id="button">
	<form style="display: inline" action="home.html" method="get">
  		<button>Return to Home Page</button>
	</form>
</div>

<!--Footer for the page-->
<div id="footer">
	<p><a href="TermsOfUse.html">Terms of Use</a><a href="SiteMap.html">Site Map</a></p>
    <p>&copy; Copyright Silver Lining Design and Programming 2013</p>
</div>

</body>
</html>