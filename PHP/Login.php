<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Screen</title>
<link href="http://fonts.googleapis.com/css?family=Enriqueta" rel="stylesheet" type="text/css">
</head>

<body>
<div id="header">
<!--navigation bar for page-->
	<a class="currentPage" href="home.html">Home</a> <a href="About.html">About Me</a> <a href="Projects.html">Projects</a> <a 		    href="Services.html">Services</a> <a href="Github.html">Github</a> <a href="Contact.html">Contact Me</a>
</div>

<form action="Connection.php"method="post">
        	Name: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" name="submit">
</form>
 
<?php
 
 include("BusinessContacts.php");
 
?>

</body>
</html>