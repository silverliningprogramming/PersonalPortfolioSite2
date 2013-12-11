<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Database Connection</title>
<link rel="stylesheet" href="ConnectionCSS.css" />
</head>

<body>
<?php
//starts database session
//session_start();
//connects database
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



$username = $_POST["username"];
$password = $_POST["password"];

//queries database to verify username from Login page
$select_statement = "SELECT * FROM `admin` WHERE `username` = '" . $username . "'  LIMIT 0 , 30";



$result = $database->query($select_statement);

$exists = false;
foreach($result as $row)
{
	$exists = true;
	$passwordDB = $row['password'];
}

if($exists){
	
	if($passwordDB == $password)
	{
		$_SESSION["username"] = $username;
		//sends you to Business Contact page is username and password are verified
		?>
        <script type= "text/javascript">
    	window.location = "BusinessContacts.php"
  		</script>
        <?php
	}
	else
	{
		//Gives alert box if password does not match password in database
	?>	
		<script type= "text/javascript">
    	alert("Incorrect Password Access Denied");
    	history.back();
  		</script>
	<?php
    }
}
else{
		//Gives alert box if username does not match username in database
	?>
		<script type= "text/javascript">
    	alert("Incorrect Name Access Denied");
    	history.back();
  		</script>
<?php
}
?>
</body>
</html>