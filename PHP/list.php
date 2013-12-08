<!--Mobile Website
    Susan Corbin
    silverliningdesignandprogramming.com
    Business Contact List Section -->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Business Contacts</title>
<link rel="stylesheet" href="CSS/MobileCSS.css" />
</head>

<body>
<?php
//continues session
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

//queries database for a list of Business Contact in alphabetical order
$select_statement = "SELECT username FROM admin ORDER BY username ASC";

$result = $database->query($select_statement);
?>
<div id="list">
<p>For full information on any of the people below click on their names.</p>
<?php
foreach($result as $row){
		//prints list of Business Contacts
        echo "<a href=\"info.php?username=" . $row['username']. " \">" . $row['username'] . "<a/><br>";
             

}
?>
</div>
<?php

if (!$result) { // add this check.
    die('Invalid query: ' . mysql_error());
}


?>

<!--Button to go to Log Out page-->
<a href="signout.php" data-role="button" data-theme="b">Log Out</a>

<!--Footer for the Page-->
<div data-role="footer" data-theme="a">
		<h4>&copy; Copyright Silver Lining</h4>
        <h4>Design and Programming 2013</h4>
</div>	

</body>
</html>