<!--Mobile Website
    Susan Corbin
    silverliningdesignandprogramming.com
    Main website page-->
 <?php
//session_start();
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


?>

<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Mobile Site</title>
<link href="http://fonts.googleapis.com/css?family=Enriqueta" rel="stylesheet" type="text/css">
<meta name = "viewport" content = "width=device-width, height=device-height, initial-scale=1">
<link rel="stylesheet" href="MobileCSS.css" />


<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>

<link rel="stylesheet" href="CSS/flexslider.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="JavaScript/jquery.flexslider.js"></script>
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider();
  });
</script>
</head> 
<body> 

<!--Home Page-->
<div data-role="page" id="Home">
	<!--Header with Company Logo-->
    <div data-role="header">
		<img src="Images/Logo1.jpg" alt="Company Logo" width="150" height="150" class="first"/>
    </div>
    <!--Navigation Bar-->
	<div data-role="navbar" data-iconpos="top">	
		<ul>	
            <li><a href="#Home" data-theme="b" data-icon="home" >Home</a></li>
            <li><a href="#About" data-theme="b" data-icon="info" >About</a></li>
			<li><a href="#Contact" data-theme="b" data-icon="search" >Contact</a></li>
        </ul>
    </div>		
	<div data-role="navbar" data-iconpos="top">	
		<ul>
    		<li><a href="#Projects" data-theme="b" data-icon= "info" >Projects</a></li>
            <li><a href="#Services" data-theme="b" data-icon= "info" >Services</a></li>
            <li><a href="#Login" data-theme="b" data-icon= "info" >Log In</a></li>
        </ul>
    </div>
	<!--Slider-->
    <div data-role="content">
    	<h3>Slide your finger across the photo to see more then touch the photo to find out more about each project featured.</h3>	
		<div class="flexslider">
  			<ul class="slides">
    			<li>
      				<a href="#Slider1"><img src="Images/Scott.jpg" alt= "Aerial Photography Website" width="600" height="400" 	                    class="photo"/></a			                    >
    			</li>
    			<li>
      				<a href="#Slider2"><img src="Images/Robot.jpg" alt= "Hovering Robot Assignment" width="600" height="400" class                    ="photo"/></a>
    			</li>
    			<li>
      				<a href="#Slider3"><img src="Images/COBOL.jpg" alt= "COBOL Assignment" width="600" height="400" class="photo"/                    ></a>
    			</li>
  			</ul>
		</div>
		<!--Button to send viewer to main website-->
        <a href="http://www.silverliningdesignandprogramming.com/AltHome.html?full" data-role="button" > View full Website </a>
         
	</div>
    <!--Page Footer-->
    <div data-role="footer" data-theme="a">
		<h4>&copy; Copyright Silver Lining</h4>
        <h4>Design and Programming 2013</h4>
	</div>
</div>

<!--About Me Page-->
<div data-role="page" id="About">
	<div data-role="header" data-theme="a">
		<img src="Images/SusanCorbin.jpg" alt="Susan Corbin" width="125" height="125" class="second"/>
        <h1>About Me</h1>
	</div>
    <!--Navigation Bar-->
	<div data-role="navbar" data-iconpos="top">	
		<ul>	
            <li><a href="#Home" data-theme="b" data-icon="home" >Home</a></li>
            <li><a href="#About" data-theme="b" data-icon="info" >About</a></li>
			<li><a href="#Contact" data-theme="b" data-icon="search" >Contact</a></li>
        </ul>		
	</div>
    <div data-role="navbar" data-iconpos="top">	
		<ul>
    		<li><a href="#Projects" data-theme="b" data-icon= "info" >Projects</a></li>
            <li><a href="#Services" data-theme="b" data-icon= "info" >Services</a></li>
        	<li><a href="#Login" data-theme="b" data-icon= "info" >Login</a></li>
        </ul>
        <!--Button to return to Home Page-->
        <a href="#Home" data-role="button" data-theme="b">Back to Home Page</a>
    </div>
    <!--Main body of page-->
    <div data-role="content">	
		<p>My name is Susan Corbin and I am a 3rd year student from Georgian College in Barrie, Ontario.  At this time I am           looking for a co-op placement which could eventually lead to a full time position.  This website is intended to           introduce you to the work completed and the services available by me as Silver Lining Design and Programming.  Silver            Lining Design and Programming provides services including website design and production, mainframe programming            animation services work with java program language and project management.  All services are provided in a            professional and timely manner with an eye on customer satisfaction in everything I do.</p>
        <p>I have always had an interest in computers and how they work.  To be able to work with computers for a living is very 			           exciting to me.  Providing good quality service is important to me because in business today it can be sadly lacking. A           happy customer is the best result you can possibly have after completing a project and having that keeps me working as           hard as I possibly can.</p>
        <h3>Profile</h3>
        <p>Reliable, hardworking computer student wanting to develop mainframe skills or any position that will utilize current           academic knowledge and skills with computer technologies.  Possess excellent work habits and enthusiasm to deliver           quality workmanship and problem solving scenarios.</p>
       <h3>Education</h3>
       <ul>
       <li>Georgian College        Computer Programmer/Analyst Co-Op Program 2014</li>
       <li>University of Waterloo  School of Architecture </li>
       </ul>
       <h3>Relevant Industry Qualifications</h3>
       <h4>Computer and Programming Skills</h4>
       <ul>
       <li>Knowledge of and project work using the following programming languages:  COBOL, Java, HTML5, CSS3, JavaScript, PHP,           MySQL, ActionScript, JCL and Assembler.</li>
       </ul>
       <h4>Work Experience</h4>
       <ul>
       <li>Responsible for maintaining computers operatin on remote systems from the main food ordering location for East Side           Mario's Restaurants in Ontario in Markham, Ontario.  Job required constant monitoring of both phone and internet           connections to the restaurants as well as visits to various locations as required; assisted with computer connectivity           and operating issues that could not be resolved from our head office with quality customer service.</li>
       <li>Co-op semester spent designing and making websites for two companies in York Region.  I was responsible for the design,           layout, and actual coding of both websites.</li>
       </ul>
       <p>After many years in the business world and ten years as a real estate agent, I returned to school in 2010 to pursue a          new career in Computer Programming.  It has been a challenging and exhilirating experience which I am enjoying          immensely. 	
	</div>
    <!--Page Footer-->
	<div data-role="footer" data-theme="a">
		<h4>&copy; Copyright Silver Lining</h4>
        <h4>Design and Programming 2013</h4>
	</div>
</div>

<!--Contact Me Page-->
<div data-role="page" id="Contact">
	<div data-role="header" data-theme="a">
		<h1>Contact Me</h1>
	</div>
    <!--Navigation Bar-->
    <div data-role="navbar" data-iconpos="top">	
		<ul>	
            <li><a href="#Home" data-theme="b" data-icon="home" >Home</a></li>
            <li><a href="#About" data-theme="b" data-icon="info" >About</a></li>
			<li><a href="#Contact" data-theme="b" data-icon="search" >Contact</a></li>
        </ul>		
	</div>
    <div data-role="navbar" data-iconpos="top">	
		<ul>
        	<li><a href="#Projects" data-theme="b" data-icon= "info" >Projects</a></li>
            <li><a href="#Services" data-theme="b" data-icon= "info" >Services</a></li>
        	<li><a href="#Login" data-theme="b" data-icon= "info" >Log In</a></li>
        </ul>
        <!--Button to return to Home Page-->
        <a href="#Home" data-role="button" data-theme="b">Back to Home Page</a>
    </div>
    <!--Main body of page-->
	<div data-role="content">	
		<p>For further information please feel free to contact me.  You will be pleased with my work and the excellent service            that I provide.</p>
        <p>1970 Champlain Road,<br>
           Tiny, Ontario,<br>
           L9M 0B6</p>
        <p>Phone:  <a href="tel:7055496674"><strong>(705) 549-6674</strong></a></p>
        <p>Cell:   <a href="tel:7054276086"><strong>(705) 427-6086</strong></a></p>
        <p>E-Mail:  <strong>susan.corbin17@gmail.com</strong></p>
        <h3>Keep Connected</h3>
        <a href="http://touch.linkedin.com"><img src="Images/LinkedIn.jpg" alt="Linked In" width="50" height="50" class="left"/>
        </a>      
        <a href="http://m.facebook.com/susan.corbin.714"><img src="Images/Facebook.jpg" alt="Facebook" width="50" height="50"        class="right"/></a>	
	</div>
    <!--Page Footer-->
	<div data-role="footer" data-theme="a">
		<h4>&copy; Copyright Silver Lining</h4>
        <h4>Design and Programming 2013</h4>
	</div>
</div>

<!--Projects Page-->
<div data-role="page" id="Projects">
	<div data-role="header" data-theme="a">
		<h1>Projects</h1>
	</div>
    <!--Navigation Bar-->
    <div data-role="navbar" data-iconpos="top">	
		<ul>	
            <li><a href="#Home" data-theme="b" data-icon="home" >Home</a></li>
            <li><a href="#About" data-theme="b" data-icon="info" >About</a></li>
			<li><a href="#Contact" data-theme="b" data-icon="search" >Contact</a></li>
        </ul>		
	</div>
	<div data-role="navbar" data-iconpos="top">	
		<ul>
        	<li><a href="#Projects" data-theme="b" data-icon= "info" >Projects</a></li>
            <li><a href="#Services" data-theme="b" data-icon= "info" >Services</a></li>
        	<li><a href="#Login" data-theme="b" data-icon= "info" >Login</a></li>
        </ul>
        <!--Button to return to Home Page-->
        <a href="#Home" data-role="button" data-theme="b">Back to Home Page</a>
    </div>
    <!--Body of the page-->
    <div data-role="content">	
		<h3>Touch any of the following pictures to see details of these projects.</h3>
        <p><a href="#Project1"> <img src="Images/Evan.jpg" alt="Restaurant Website" width="600" height="400" class="photo"/></a></        p>
        <p><a href="#Project2"> <img src="Images/Project.jpg" alt="Project Management Assignment" width="600" height="400" class=        "photo"/></a></p>
        <p><a href="#Project3"> <img src="Images/Java3.jpg" alt="Java Program" width="600" height="400" class="photo"/></a></p>		
	</div>
    <!--Page Footer-->
	<div data-role="footer" data-theme="a"> 
		<h4>&copy; Copyright Silver Lining</h4>
        <h4>Design and Programming 2013</h4>
	</div>
</div>

<!--Services Page-->
<div data-role="page" id="Services">
	<div data-role="header" data-theme="a">
		<h1>Services</h1>
	</div>
    <!--Navigation Bar-->
    <div data-role="navbar" data-iconpos="top">	
		<ul>	
            <li><a href="#Home" data-theme="b" data-icon="home" >Home</a></li>
            <li><a href="#About" data-theme="b" data-icon="info" >About</a></li>
			<li><a href="#Contact" data-theme="b" data-icon="search" >Contact</a></li>
        </ul>		
	</div>
	<div data-role="navbar" data-iconpos="top">	
		<ul>
        	<li><a href="#Projects" data-theme="b" data-icon= "info" >Projects</a></li>
            <li><a href="#Services" data-theme="b" data-icon= "info" >Services</a></li>
        	<li><a href="#Login" data-theme="b" data-icon= "info" >Login</a></li>
        </ul>
        <!--Button to return to Home Page-->
        <a href="#Home" data-role="button" data-theme="b">Back to Home Page</a>
    </div>
    <!--Main body of the page-->
    <div data-role="content">	
		<p><img src="Images/Scott2.jpg" alt="Residential Section of Website" width="600" height="400" class="photo"/></p>
        <p>I have completed several websites for clients in the Toronto area.  They range from aerial photographers to restaurants           and even a culinary school.  My work on these websites included copywriting and logo design as well as the actual 		           coding of the website itself.  As a result of this work I would be interested in a position as a web designer and feel           that I would be of great assistance in that regard.</p>
        <p><img src="Images/COBOL2.jpg" alt="COBOL Program" width="600" height="665" class="photo"/></p>
        <p><img src="Images/JCL.jpg" alt="JCL Program" width="600" height="400" class="photo"/></p>
        <p>At Georgian College I have taken courses in COBOL, Assembler and JCL. These courses are used in mainframe programming. 	           I found them very interesting and challenging.  The COBOL was especially of interest to me.  I found it very fun to do.           A position as a mainframe programmer would also be something that I would be interested in pursuing.</p>
        <p><img src="Images/Java4.jpg" alt="Java Program" width="600" height="665" class="photo"/></p>
		<p>I have also taken two courses in Java programming.  Java is an integral part of many of the technologies that we use 			           today such as laptops, game consoles and of course the games that go with them, cell phones and the Internet.  With           this in mind I think a job in the java programming field would be a great way to get into an ever growing field where there           seems to be limitless possibilities.</p>	
	</div>
    <!--Page Footer-->
	<div data-role="footer" data-theme="a">
		<h4>&copy; Copyright Silver Lining</h4>
        <h4>Design and Programming 2013</h4>
	</div>
</div>


<!--Project1 Page-->
<div data-role="page" id="Project1">
	<div data-role="header" data-theme="a">
		<h1>Project 1</h1>
	</div>
    <!--Main body of the page-->
    <div data-role="content">	
		<p><img src="Images/Evan.jpg" alt="Restaurant Website" width="600" height="400" class="photo"/></p>
        <p>This was a website designed for a new restaurant in Richmond Hill, Ontario.  It entailed 5 pages with a 6 photo           slideshow on the first page and multiple pictures mixed in with text on the menu page. The text and photos were laid           over a blue textured background to give it some depth.</p>	
	    <!--Button to return to Projects Page-->
        <a href="#Projects" data-role="button" data-theme="b">Back to Projects Page</a>
    </div>
    <!--Page Footer-->
	<div data-role="footer" data-theme="a">
		<h4>&copy; Copyright Silver Lining</h4>
        <h4>Design and Programming 2013</h4>
	</div>
</div>

<!--Project2 Page-->
<div data-role="page" id="Project2">
	<div data-role="header" data-theme="a">
		<h1>Project 2</h1>
	</div>
    <!--Main body of the page-->
    <div data-role="content">	
		<p><img src="Images/Project.jpg" alt="Project Management Assignment" width="600" height="400" class="photo"/></p>
		<p>This was a project management assignment completed where we had to follow the System Development Life Cycle (SDLC) of a           project from its inception to completion.  It involved the introduction of a new computer server into a company           replacing two antiquated servers in an office with approximately 30 employees.  The installation, testing and transfer           to the new server had to be completed without interuption of service to the employees.  The entire project was           completed using many aspects of Microsoft Project, thus making me very familiar with how it works and the great value           it has in the planning and implementation of a project of any size.</p>	
	    <!--Button to return to Projects Page-->
        <a href="#Projects" data-role="button" data-theme="b">Back to Projects Page</a>
    </div>
    <!--Page Footer-->
	<div data-role="footer" data-theme="a">
		<h4>&copy; Copyright Silver Lining</h4>
        <h4>Design and Programming 2013</h4>
	</div>
</div>

<!--Project3 Page-->
<div data-role="page" id="Project3">
	<div data-role="header" data-theme="a">
		<h1>Project 3</h1>
	</div>
    <!--Main body of the page-->
   	<div data-role="content">	
		<p><img src="Images/Java3.jpg" alt="Java Program" width="600" height="400" class="photo"/></p>
		<p>This was a Java program written in my Introduction to Object Oriented Programming course at Georgian College.  It           involved designing a program for a car.  There were four classes for the car: Body, Tank, Engine and Transmission.  			           These classes were responsible for saying things like what the oil level and fuel levels were, whether the car doors           were open or closed, etc.  The abstract class Car took this information and depending on what it found out turned the           car on, moved the car forward and backward, shut the car off and other things.  There was also a tester that told you           the state of the car and gave you a dashboard with all the information on the car i.e. fuel tank level, oil level, etc.       </p>	
	    <!--Button to return to Projects Page-->
        <a href="#Projects" data-role="button" data-theme="b">Back to Projects Page</a>
    </div>
    <!--Page Footer-->
	<div data-role="footer" data-theme="a">
		<h4>&copy; Copyright Silver Lining</h4>
        <h4>Design and Programming 2013</h4>
	</div>
</div>

<!--Slider1 Page-->
<div data-role="page" id="Slider1">
	<!--Main body of the page-->
    <div data-role="content">	
		<p><img src="Images/Scott.jpg" alt="Aerial Photography Website" width="600" height="400" class="photo"/></p>
        <p>This was a website made for an aerial photographer based out of the GTA.  It involved 5 web pages, a slideshow on           the home page and approximately 60 photographs of homes and commercial properties divided between two web pages.  The           residential web page was divided into photographs of houses, seasonal photographs of the same house and pictorial           histories of a single house taken over the course of many years and incarnations.  I was involved in writing the text           for the website, choosing the photos and all layout designs.</p>	
	    <!--Button to return to Home Page-->
        <a href="#Home" data-role="button" data-theme="b">Back to Home Page</a>
    </div>
    <!--Page Footer-->
	<div data-role="footer" data-theme="a">
		<h4>&copy; Copyright Silver Lining</h4>
        <h4>Design and Programming 2013</h4>
	</div>
</div>

<!--Slider2 Page-->
<div data-role="page" id="Slider2">
	<!--Main body of the page-->
    <div data-role="content">	
		<p><img src="Images/Robot.jpg" alt="Hovering Robot Assignment" width="600" height="400" class="photo"/></p>
		<p>This was an animation assignment completed in Adobe Flash Professional.  It consisted of a Robot made up of individual 					    	   parts: head, body, arms, hands and propeller.  Each body part had three different styles of part.  When you clicked on 		           each individual body part, they changed from one style to the next.  As well as the body parts changing when you           clicked on them, the Robot hovered above the ground with a slight up and down movement in the Robot and movement in the           various body parts as well to indicate the slight movement in the Robot.  All of this was achieved using ActionScript           language with the Flash Professional program.</p>		
	    <!--Button to return to Home Page-->
        <a href="#Home" data-role="button" data-theme="b">Back to Home Page</a>
    </div>
    <!--Page Footer-->
	<div data-role="footer" data-theme="a">
		<h4>&copy; Copyright Silver Lining</h4>
        <h4>Design and Programming 2013</h4>
	</div>
</div>

<!--Slider3 Page-->
<div data-role="page" id="Slider3">
	<!--Main body of the page-->
    <div data-role="content">	
		<p><img src="Images/COBOL.jpg" alt="COBOL Assignment" width="600" height="400" class="photo"/></p>
		<p>This was a COBOL program in which we had to calculate raises for employees in a company in 2 regions and 10 offices who           had been with the company over 10 years.  There were approximately 30 employees and about one third were in that           category.  Within the program I also had to set up headings and set up a sytem that used the current date as input by           the user.</p>	
	    <!--Button to return to Home Page-->
        <a href="#Home" data-role="button" data-theme="b">Back to Home Page</a>
    </div>
    <!--Page Footer-->
	<div data-role="footer" data-theme="a">
		<h4>&copy; Copyright Silver Lining</h4>
        <h4>Design and Programming 2013</h4>
	</div>
</div>


<div data-role="page" id="Login">
	<div data-role="header" data-theme="a">
		<h1>Log In</h1>
	</div>
    <!--Navigation Bar-->
    <div data-role="navbar" data-iconpos="top">	
		<ul>	
            <li><a href="#Home" data-theme="b" data-icon="home" >Home</a></li>
            <li><a href="#About" data-theme="b" data-icon="info" >About</a></li>
			<li><a href="#Contact" data-theme="b" data-icon="search" >Contact</a></li>
        </ul>		
	</div>
	<div data-role="navbar" data-iconpos="top">	
		<ul>
        	<li><a href="#Projects" data-theme="b" data-icon= "info" >Projects</a></li>
            <li><a href="#Services" data-theme="b" data-icon= "info" >Services</a></li>
        	<li><a href="#Login" data-theme="b" data-icon= "info" >Login</a></li>
        </ul>
        <!--Button to return to Home Page-->
        <a href="#Home" data-role="button" data-theme="b">Back to Home Page</a>
    </div>
    <!--Main body of the page-->
    <div data-role="content">
    	<!--Login to Business Contact area-->
   		<form action="loguserin.php" method="post">
        	Name: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" name="submit">
		</form>
   	</div>  
	
    <!--Page Footer-->
	<div data-role="footer" data-theme="a">
		<h4>&copy; Copyright Silver Lining</h4>
        <h4>Design and Programming 2013</h4>
	</div>
    
</div>

</body>
</html>