<!--Mobile Website
    Susan Corbin
    silverliningdesignandprogramming.com
    Business Contact List Section -->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Logout</title>
<link rel="stylesheet" href="CSS/MobileCSS.css" />
</head>

<body>
<?php
//Keeps session going
session_start();
//Keeps database connected
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
//Disconnects database and logs out user
session_destroy();
?>

<!--Comment-->
<div id="logout">
<p>You have been logged out.</p>
</div>

<!--Sends the user back to the website Home Page-->
<a href="Mobile.php#Home" data-role="button" data-theme="b">Back to Home Page</a>

<!--Footer for the Page-->
<div data-role="footer" data-theme="a">
		<h4>&copy; Copyright Silver Lining</h4>
        <h4>Design and Programming 2013</h4>
</div>	

</body>
</html>