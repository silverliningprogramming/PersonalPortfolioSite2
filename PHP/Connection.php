<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Database Connection</title>
</head>

<body>
<?php
session_start();
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



$username = $_POST["username"];
$password = $_POST["password"];

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
		echo "<h1>Welcome " . $_SESSION["username"] . " </h1>";
	}
	else
	{
	?>	
		<script type= "text/javascript">
    	alert("Incorrect Password Access Denied");
    	history.back();
  		</script>
	<?php
    }
}
else{
	?>
		<script type= "text/javascript">
    	alert("Incorrect Password Access Denied");
    	history.back();
  		</script>
<?php
}
?>
</body>
</html>