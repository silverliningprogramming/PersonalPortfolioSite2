<!--Mobile Website
    Susan Corbin
    silverliningdesignandprogramming.com
    Business Contact List Section -->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User Info</title>
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
//Gets the username selected from the Business Contact page and queries if for all information pertaining to that username
$username = $_GET["username"];
$select_statement = "SELECT * FROM `admin` WHERE `username` = '" . $username . "'  LIMIT 0 , 30";




$result = $database->query($select_statement);

foreach($result as $row){
		//Prints information about the selected username
        echo "<table>";
		echo "<tr><td>". $row['username'] ."</td></tr>";
		echo "<tr><td>". $row['address'] ."</td></tr>";
		echo "<tr><td>". $row['phonenumber'] . "</td></tr>";
		echo "<tr><td>". $row['cellnumber'] ."</td></tr>";
        echo "</table>";        

}

?>

<!--Sends you back to the Business Contacts List-->
<a href="list.php" data-role="button" data-theme="b">Back to Business Contacts List</a>

<!--Footer for the Page-->
<div data-role="footer" data-theme="a">
		<h4>&copy; Copyright Silver Lining</h4>
        <h4>Design and Programming 2013</h4>
</div>	
</body>
</html>

 