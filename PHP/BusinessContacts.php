<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Business Contacts</title>
<link href="http://fonts.googleapis.com/css?family=Enriqueta" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="CSS/BusinessContactsCSS.css" />
</head>

<body>



<?php
//keeps database session going
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

//queries database for Business Contacts in alphabetical order
$select_statement = "SELECT username FROM admin ORDER BY username ASC";

$result = $database->query($select_statement);
?>
<div id="list">
<p>For full information on any of the people below click on their names.</p>
<?php
foreach($result as $row){
		
		//prints list of Business Contacts
        echo "<a href=\"user.php?username=" . $row['username']. " \">" . $row['username'] . "<a/><br>";
             

}
?>
</div>
<?php

if (!$result) { // add this check.
    die('Invalid query: ' . mysql_error());
}


?>

<!--Button that takes you to the Log Out page-->
<div id="button">
	<form style="display: inline" action="Logout.php" method="get">
  		<button>Log Out</button>
	</form>
</div>

<!--Footer for the page-->
<div id="footer">
	<p><a href="TermsOfUse.html">Terms of Use</a><a href="SiteMap.html">Site Map</a></p>
    <p>&copy; Copyright Silver Lining Design and Programming 2013</p>
</div>

</body>
</html>