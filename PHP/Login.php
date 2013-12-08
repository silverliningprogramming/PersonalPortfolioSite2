<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Screen</title>
<link href="http://fonts.googleapis.com/css?family=Enriqueta" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="CSS/LoginCSS.css" />
</head>

<body>
<div id="header">
<!--navigation bar for page-->
	<a href="home.html">Home</a> <a href="About.html">About Me</a> <a href="Projects.html">Projects</a> <a 		    href=		  								"Services.html">Services</a> <a href="Github.html">Github</a> <a href="Contact.html">Contact Me</a> <a class="currentPage" href="PHP/Login.php">Log In</a>
</div>

<!--Login to Business Contact area-->
<div id="login">
<form action="Connection.php" method="post">
        	Name: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" name="submit">
</form>
</div>
 
<?php
 
 
?>
<!--Footer for the page-->
<div id="footer">
	<p><a href="TermsOfUse.html">Terms of Use</a><a href="SiteMap.html">Site Map</a></p>
    <p>&copy; Copyright Silver Lining Design and Programming 2013</p>
</div>

</body>
</html>