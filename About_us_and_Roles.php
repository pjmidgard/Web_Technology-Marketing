<!DOCTYPE html>
<html>
	<head>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<title>About_us_and_Roles</title>
		<link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="css/style.css">
 <style>
	
    	</style>
    </head>
			<body>
			<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


			<?php session_start(); $df=0; $ds=0;
            error_reporting(0);			
			$_SESSION["qwe"]="";
			$_SESSION["derk"]="ok";
			if (!isset($_SESSION["lghjas"])){}
elseif (isset($_SESSION["lghjas"])){
$_SESSION["lghjas"]="click";}
			if (!isset($_SESSION["lghj"])){}
			if (isset($_SESSION["lghj"])){$_SESSION["lghj"]="Click";}
            if (!isset($_SESSION["ldfd"])){}elseif($_SESSION["ldfd"]=="Clickh")
			{$_SESSION["ldfd"]="Click";}
			elseif (isset($_SESSION["ldfd"])){$_SESSION["ldfd"]="Click";}
			 if (!isset($_SESSION["lghlk"])){} elseif (!isset($_SESSION["lghj"])){if($_SESSION["lghlk"]=="Update_faleristics")
		  {$_SESSION["lghlk"]="Click";}}
		  if (!isset($_SESSION["lfg"])){} 
		    elseif (isset($_SESSION["lfg"])){$_SESSION["lfg"]="in";} //
			 if (!isset($_SESSION["lghld"])){} elseif (!isset($_SESSION["lghld"])){if($_SESSION["lghld"]=="Update_faleristics")
		  {$_SESSION["lghld"]="Click";}}
		  	  if (!isset($_SESSION["dert"])){} 
		    elseif (isset($_SESSION["dert"])){$_SESSION["dert"]="in";}
				
		  
 ?>
						<div id="header" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right:
						1px; padding-top: 1px; padding-bottom: 1px"><br>
	&nbsp;&nbsp;  <marquee> Web Technology/Marketing  </marquee><br>
	&nbsp;&nbsp; 	    
						</div>
<div id="horizontal_menu" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px;
 padding-top: 1px; padding-bottom: 1px">
				<nav>
				<br>
				<div align="center">
					<ul>
						&nbsp;&nbsp; <li class="s"><a href="index.php"><font style="font-size:12px"> Home </font></a></li> 
						<!-- login page -->
						&nbsp;&nbsp; <li class="s"><a href="About_us_and_Roles.php">
						<font style="font-size:12px"> About_us_and_Roles </font></a></li> 
						<!-- About us and Roles page -->
					    <!-- <li class="s"><a href="Listing_function_faleristics.php">
						<font style="font-size:20px"> Listing_function_faleristics <font></a></li>
						<!-- Listing function of all student broken by faleristics --> 
						<!-- <li class="s"><a href="CRUD-faleristics.php">
						< font style="font-size:20px"> CRUD-faleristics </font></a></li> -->
						<!-- faleristics (admin user only) /////////////////////////////--> 
						<!-- <li class="s"><a href="Register.php">
						<font style="font-size:20px"> Register <font></a></li> -->
						<!-- button click at form Register inputjoin to sport -->
					    <!-- <li class="s"><a href="Update_Details.php"><font style="font-size:20px"> Update_Details <font>
						</a></li> --> <!-- Update Details page -->
						<?php
						//echo $_SESSION["lg"];		
                        //fg
		//////////////////////////////////////////////////////
                
				
				   	
					   if(isset($_SESSION["lg"])  &&  $_SESSION["fg"]=="0"){
						echo '
						   
					    &nbsp;&nbsp;  <li class="s"><a href="Update_Details.php">
						<font style="font-size:12px"> Update_Details </font></a></li> 
						&nbsp;&nbsp;  <li class="s"><a href="Gallery.php">
						<font style="font-size:12px"> Gallery </font></a></li> 
						&nbsp;&nbsp;  <li class="s"><a href="comments.php">
                        <font style="font-size:12px"> Comments </font></a></li> 
						';
						}
					else if(isset($_SESSION["lg"])  &&  $_SESSION["fg"]=="1"){
						echo ' 
					    &nbsp;&nbsp;  <li class="s"><a href="Update_Details.php">
						<font style="font-size:12px"> Update_Details </font></a></li>
						&nbsp;&nbsp;  <li class="s"><a href="Gallery.php">
                        <font style="font-size:12px"> Gallery Add</font></a></li>
                        &nbsp;&nbsp;  <li class="s"><a href="Gallery2.php">
                        <font style="font-size:12px"> Gallery Update</font></a></li> 						
						&nbsp;&nbsp;  <li class="s"><a href="Manageusers.php">
                        <font style="font-size:12px"> Manageusers </font></a></li> 
						&nbsp;&nbsp;  <li class="s"><a href="comments.php">
                        <font style="font-size:12px"> Comments </font></a></li> 
					    &nbsp;&nbsp;  <li class="s"><a href="IP.php">
                        <font style="font-size:12px"> IP </font></a></li> 
						';
						}
                        else{
							echo '&nbsp;&nbsp;  <li class="s"><a href="Gallery.php">
						<font style="font-size:12px"> Gallery </font></a></li> ';
                        }
						
					
					
					?>
					</ul>
					</div>
	</nav>
			</div>	
			<div id="side_bar_1" style="border-style: solid; border-width: 1px; padding-left: 1px; 
			padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
			<br><br><br><br>
			<!--/////////////////////////////////////////////////////////////////////////////////-->
			&nbsp;&nbsp; <font style="font-size: 12pt">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please, <br>&nbsp; Read our rules <br>&nbsp; after Please, register <br>
			&nbsp;to register, you <br> 
			&nbsp;need to go to the home <br>&nbsp;to the page and click <br>&nbsp;register button. <br>
			&nbsp;Then you need to <br> 
			&nbsp;fill the form <br>
			&nbsp;and after <br> 
			&nbsp;You can manage <br>&nbsp;your details</font> <br>
			</div>  
			<div id="Bofore_Content" style="border-style: solid; border-width: 1px; padding-left: 1px; 
			padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
							<p align="center"><img src="img/JavaScript.jfif" width="50" height="50" hspace="15" vspace="15">
				</p></div>
				<div id="section" style="border-style: solid; border-width: 1px; padding-left: 1px; 
				padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
				<br>
				<!--/////////////////////////////////////////////////////////////////////////////////-->
				<font style="font-size: 12pt">
				<marquee direction="up" width="599" height="570">
			<dl>
			<br> Dictionaries, Courses, whatis.techtarget, tms-outsource and Wikepedia

			<dt> Web technologies <br><br>
			<dd> ASP.NET Core applications are web applications and they typically rely on client-side <br>
			web technologies like HTML, CSS, and JavaScript. By separating the content of the page <br>
			(the HTML) from its layout and styling (the CSS), and its behavior (via JavaScript), <br>
			complex web apps can leverage the Separation of Concerns principle. Future changes to <br>
			the structure, design, or behavior of the application can be made more easily when these <br>
			concerns are not intertwined.<br><br>
			<dt> HTML <br><br>
			<dd> HTML is the standard markup language used to create web pages and web applications.<br>
			Its elements form the building blocks of pages, representing formatted text, <br>
			images, form inputs, and other structures. When a browser makes a request to a <br>
			URL, whether fetching a page or an application, the first thing that is returned <br>
			is an HTML document. This HTML document may reference or include additional <br>
			information about its look and layout in the form of CSS, or behavior in the <br>
			form of JavaScript.<br><br>
			<dt> CSS <br><br>
			<dd>CSS (Cascading Style Sheets) is used to control the look and layout of HTML elements. CSS styles can be <br>
			applied directly to an HTML element, defined separately on the same page, or defined in a separate file and <br>
			referenced by the page. Styles cascade based on how they are used to select a given HTML element. For instance, <br>
			a style might apply <br>
			to an entire document, but would be overridden by a style that applied to a particular element. Likewise, an <br>
			element-specific style would be overridden by a style that applied to a CSS class that was applied to the element, <br>
			which in turn would be overridden by a style targeting a specific instance of that element (via its ID). Figure 6-1 <br>
			
			Control program: A program that enhances an operating system by creating an <br>
			environment in which you can run other programs. Control programs generally <br>
			provide a graphical interface and enable you to run several programs at once in <br>
			different windows. Control programs are also called operating environments. <br>
			<br>
			Programs are also considered malware if they secretly act against the interests of the <br>
			computer user. For example, at one point Sony music Compact discs silently installed a <br>
			rootkit on purchasers' computers with the intention of preventing illicit copying, but <br>
			which also reported on users' listening habits, and unintentionally created extra security <br>
			vulnerabilities. <br>
			<br>
			Software is a collection of data or computer instructions that tell the <br>
			computer how to work. Application Software is a program or group of programs <br>
			designed for end-users.<br>
			<br>
			A computer programmer, sometimes called a software developer, a programmer or <br>
			more recently a coder (especially in more informal contexts), is a person who creates <br>
			computer software. The term computer programmer can refer to a specialist in one area of computers, <br>
			or to a generalist who writes code for many kinds of software <br>
			<br>

			A programming language is a notation for writing programs. Wikepedia <br>
			<br>
			Oxford Dictionary of Computer Science <br>
			self-extending A term applied to a programming language, denoting the <br>
			ability to add new features to the language by writing programs in that <br>
			language <br>
            <br>
			
			A computer programmer: sometimes called a software developer, a programmer or <br>
			more recently a coder. Wikepedia <br> 
			<br>
			I enjoy writing programs. I write software. Reverso Dictionary <br>
			Curated List Of Writing Programs For Developers. <br>
			
			Example: You guys are supposed to be writing programs. Reverso Dictionary <br>
			
			In my free time, I like writing programs, writing software, creating <br>
			applications, writing compression software, control software and programs <br>
			in Python, Java, C, C++, C#, Rexx, Pascal and Visual Basic. <br>
            <br>
			
			A program is a set of instructions used to control the behaviour of a machine. <br>
			Examples of such programs include: A computer program (software) <br>
			<br>
			<br>
			Write computer programs. (Oxford Dictionary Lexico) <br> <br>
			
			Creative: A programmer or writer. <br> <br>

			Writing programs: Programmers may use a variety of computer languages <br> 
			for these tasks, including C++, Java, and many others. <br>
			<br> <br>
			ORIGIN OF PROGRAM <br> <br>
            <br> <br>
			First recorded in 1625–35; from Late Latin programma, from Greek prógramma <br>
			“public notice in writing”; see pro-2, -gram1 <br> <br>
            <br> <br>
			Creative writing programs.<br> <br>
            <br>
			
			A binary file is a file whose content must be interpreted by a program or <br>
			a hardware processor that understands in advance exactly how it is formatted. <br>
			That is, the file is not in any externally identifiable format so that any program <br>
			that wanted to could look for certain data at a certain place within the file. <br>
			A program (or hardware processor) has to know exactly how the data inside the <br>
			file is laid out to make use of the file.<br>
			Programmers often talk about an executable program as a "binary" and will ask <br>
			another programmer to "send me the binaries." (A synonym for this usage is object 
			code.) A binary file could also contain data ready to be used by a program. <br>
			In terms of transmitting files from one place to another, a file can be <br>
			transmitted as a "binary," meaning that the programs handling it don't <br>
			attempt to look within it or change it, but just pass it along as <br>
			a "chunk of 0s and 1s," the meaning of which is unknown to any network <br>
			device.<br>
            <br>
			Oxford Dictionary of Computer Science <br> <br>

			binary-level compatibility *Compatibility that exists when a program in <br>
			executable binary form may be executed on different computer systems without <br>
			recompilation. This will normally only be possible between systems with the <br>
			same operating system and with processors or *emulations of processors capable <br>
			executing the same instruction set. <br> 
			<br>
			Binary code, Metadata, Binary program, Binary file, Program <br>
            <br>
			Metadata: <br>
			Data about data <br>
			<br>
			Vital records program
			<br>
			Archive programs information Reverso Dictionary <br>
            
		    <br>
			Our grandmothers spend a week sifting through the situation, telling each <br>
			other at a meeting in the TV hall, that "Oh, no more and write programs." <br>
			I Develop a vital records program. Reverso Dictionary <br>
			<br>
			
			The Archives and Records Management Section continued to provide specific <br>
			guidance <br>
			and advice for policy development with respect to records preservation <br>
			and cooperated with the Business Continuity Management Unit to incorporate <br>
			a vital records program into the Headquarters business continuity plan.<br>
			Reverso Dictionary <br>
			<br><br>

		
		    
			Binary file<br>
			In general, executable (ready-to-run) programs are often identified as binary<br>
			files and given a file name extension of ".bin".<br>
            <br>
			.bin is used for compressed files.<br>
            <br>
			Firmware is a software program or set of instructions programmed on a <br>
			hardware device. It provides the necessary instructions for how the device <br>
			communicates with the other computer hardware. ... Firmware is typically <br>
			stored in the flash ROM of a hardware device.<br>
            <br>
			<br>
			Utility software is software designed to help to analyze, configure,<br>
			optimize or maintain a computer. It is used to support the computer <br>
			infrastructure - in contrast to application software, which is aimed at <br>
			directly performing tasks that benefit ordinary users. However, utilities<br>
			often form part of the application systems. For example, a batch job may <br>
			run user-written code to update a database and may then include a step <br>
			that runs a utility to back up the database, or a job may run a utility <br>
			to compress a disk before copying files.<br>
			
			
			<br><br>
			<dt>CSS preprocessors <br><br>
			<dd>CSS stylesheets lack support for conditional logic, variables, and other <br>
			programming language features. Thus, large stylesheets often include quite a bit of <br>
			repetition, as the same color, font, or other setting is applied to many different <br>
			variations <br>
			of HTML elements and CSS classes. CSS preprocessors can help your stylesheets follow <br>
			the DRY <br>
			principle by adding support for variables <br>
			and logic.<br>
			The most popular CSS preprocessors are Sass and LESS. Both extend CSS and are backward <br>
			compatible with it, meaning that a plain CSS file is a valid Sass or LESS file. <br>
			Sass is Ruby-based and LESS is JavaScript based, and both typically run as part <br>
			of your local development process. Both have command-line tools available, as well <br>
			as built-in support in Visual Studio for running them using Gulp or Grunt tasks.<br>
			<br><dt>JavaScript<br><br>
			<dd>JavaScript is a dynamic, interpreted programming language that has been <br>
			standardized in the ECMAScript language specification. It is the programming <br>
			language of the web. Like CSS, JavaScript can be defined as attributes within HTML elements, <br>
			as blocks of script within a page, or in separate files. Just like CSS, it's recommended to <br>
			organize JavaScript into separate files, keeping it separated as much as <br>
			possible from the HTML found on individual web pages or application views. <br>
			Legacy web apps with jQuery <br>
			Although ancient by JavaScript framework standards, jQuery continues to <br>
			be a commonly used library for working with HTML/CSS and building applications <br>
			that make AJAX calls to web APIs. However, jQuery operates at the level of the <br>
			browser document object model (DOM), and by default offers only an <br>
			imperative, rather than declarative, model.<br>
			<br>
			Web development comes with a huge set of rules and techniques every website developer should know about. If you want a website to look and function as you wish them to, you need to get familiar with web technologies that will help you achieve your goal. Developing an app or a website typically comes down to knowing 3 main languages: JavaScript, CSS, and HTML. And while it sounds quite complicated, once you know what you are doing, understanding web technology and the way it works becomes significantly easier. We present you with an introduction to web technologies and the latest web technologies list hoping it will make things at least a bit easier for you. Now, let’s take a look.
			<br><br><dt>What is Web Technology?<br><br>
			<dd>You have probably heard the term “web development technologies” before, but did you ever think about what it actually means? Since computers can’t communicate with each other the way people do, they require codes instead. Web technologies are the markup languages and multimedia packages computers use to communicate.
			<ul>
			<ol>1. Browsers</ol>
			Browsers request information and then they show us in the way we can understand. Think of them as the interpreters of the web. Here are the most popular ones: Google Chrome – Currently, the most popular browser brought to you by Google Safari – Apple’s web browser Firefox – Open-source browser supported by the Mozilla Foundation Internet Explorer – Microsoft’s browser
			<ol>2. HTML & CSS</ol>
			HTML is one of the first you should learn. Thanks to HTML, the web browsers know what to show once they receive the request. If you want to better understand how HTML works, you also need to know what CSS is. CSS stands for Cascading Style Sheets and it describes how HTML elements are to be displayed on the screen. If you browse enough tutorials, you’ll soon create CSS text effects, page transitions, image hover effects, and more.  If you’re a complete beginner, this Essential HTML & CSS training by James Williamson will help you to quickly get started with these technologies.
			<ol>3. Web Development Frameworks</ol>
			Web development frameworks are a starting point of items that a developer can use to avoid doing the simple or mundane tasks, and instead get right to work
			</ul>
			</marquee>
			<dt><br><br>
			 


            
			
            
				 
			
			</dl>
			</font>
			</div>			
	   <div id="After_Content" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px; 
	   padding-top: 1px; padding-bottom: 1px">
	   		<br>
			<!--/////////////////////////////////////////////////////////////////////////////////-->
			&nbsp;<font style="font-size: 12pt"> Thank you that you read our Roles.</font>
			<dd><br>
		    E.G. <a href="a..txt.bin"> Program </a>
			E.G. <a href="Star Topology EXAM.doc.bin"> Program </a>   
	   </div>
        <div id="side_bar_2" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px; 
		padding-top: 1px; padding-bottom: 1px">
        <!--Form -->
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<table width="197" height="150" border="1" bgcolor="#C0C0C0" style="border-color: #C0C0C0" align="center">
		<tr> <td>
		<br>
		<form method="POST" action="index.php">
<?php
unset($_SESSION['lfgf']);
session_destroy($_SESSION['lfgf']);
unset($_SESSION['lghjd']);
session_destroy($_SESSION['lghjd']);
if(isset($_SESSION["lg"]) && isset($_SESSION["lj"]))
{
echo '<div align="center">
<font color green style="font-size:12pt">';if($_SESSION["fg"]=="1"){echo "Admin <br>";}else{echo "USER <br>";} 
echo "</font></div>";
echo "You are welcome ";
echo $_SESSION["lj"]. " <br> ";
}
?>


<p>&nbsp;</p>

</form>
<?php 
if(isset($_SESSION["lg"])) //die('');
{
echo
'<form method="POST" action="index.php">
<input type="submit" name="Sign_out" value="Sign out"></input>
</form>';
if(isset($_SESSION["lg"]) && isset($_SESSION["lj"])) //die('');
{
        	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	session_unset();
	session_destroy();
	echo '<meta http-equiv="refresh" content="0; url=index.php">';
		}
	}
}
?>
<br>
<?php
function You_have_Sign_in(){
$df=2;
echo '<b><font color ="green"> You have Sign in </font></b>';
}

if(isset($_SESSION["lg"])) //die('');
{
 echo '<div align="center">';
 You_have_Sign_in();
 echo $_SESSION["lg"]. " <br> ";
}

		?>
</td></tr>
</table>

		
		</div>
						<div id="footer" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right:
						1px; padding-top: 1px; padding-bottom: 1px"><br>
	&nbsp;&nbsp; Created by Jurijus Pacalovas <a href="https://github.com/pjmidgard/White_hole_1.0.0.2.0 ">https://github.com/pjmidgard/White_hole_1.0.0.2.0  Software Application Program</a><br>
	&nbsp;&nbsp;
						</div>
			<br><br>
			</body>
</html> 