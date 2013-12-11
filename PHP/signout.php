<!--Mobile Website
    Susan Corbin
    silverliningdesignandprogramming.com
    Business Contact List Section -->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Logout</title>
<link rel="stylesheet" href="MobileCSS.css" />
</head>

<body>
<?php
//Keeps session going
session_start();
//Keeps database connected
try{
	$mySQLusername = 'Christians';
	$mySQLpassword = 'Christian#1';
	$dns = 'mysql:host=Christians.db.11874702.hostedresource.com;dbname=Christians';
	
	$database = new PDO($dns, $mySQLusername, $mySQLpassword);


}
catch(PDOException $ex)
{
		echo "there is a problem";
		echo $ex->getMessage();
		exit();
}
//Disconnects database and logs out user
session_destroy();
?>

<!--Comment-->
<div id="logout">
<p>You have been logged out.</p>
</div>

<!--Sends the user back to the website Home Page-->

<div id="button">
	<a href="Mobile.php#Home" data-role="button" data-theme="b">Back to Home Page</a>
</div>

<!--Footer for the Page-->
<div id="footer">
	<p>&copy; Copyright Silver Lining Design and Programming 2013</p>
</div>	

</body>
</html>