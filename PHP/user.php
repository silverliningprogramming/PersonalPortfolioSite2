<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User Info</title>
<link href="http://fonts.googleapis.com/css?family=Enriqueta" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="userCSS.css" />
</head>

<body>
<?php
//Keeps session going
//session_start();
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
//Gets username from Business Contacts page and queries database for all information about this Contact
$username = $_GET["username"];
$select_statement = "SELECT * FROM `admin` WHERE `username` = '" . $username . "'  LIMIT 0 , 30";




$result = $database->query($select_statement);

foreach($result as $row){
		//Prints all info for selected Business Contact
        echo "<table>";
		echo "<tr><td>". $row['username'] ."</td></tr>";
		echo "<tr><td>". $row['address'] ."</td></tr>";
		echo "<tr><td>". $row['phonenumber'] ."</td></tr>";
		echo "<tr><td>". $row['cellnumber'] ."</td></tr>";
        echo "</table>";        

}

?>

<!--Takes the user back to the Business Contacts List-->
<div id="button">
	<form style="display: inline" action="BusinessContacts.php" method="get">
  		<button>Back to Business Contacts List</button>
	</form>
</div>

<!--Footer for the page-->
<div id="footer">
	<p>&copy; Copyright Silver Lining Design and Programming 2013</p>
</div>

</body>
</html>