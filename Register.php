<?php>
	require_once('config.php');
?>
<!DOCTYPE html>
<html>
	<head>
	     <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<title>Register</title>
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


			<?php session_start();  $df=0; $ds=0; error_reporting(0);?>
						<div id="header" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right:
						1px; padding-top: 1px; padding-bottom: 1px"><br>
	&nbsp;&nbsp; <marquee> Web Technology/Marketing </marquee><br>
	&nbsp;&nbsp; 
						</div>
<div id="horizontal_menu" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px;
 padding-top: 1px; padding-bottom: 1px">
				<nav>
				<br>
				<div align="center">
					<ul>
						&nbsp;&nbsp; <li class="s"><a href="http://www.faleristics4eforever.epizy.com/index.php"><font style="font-size:12px"> Home </font></a></li> 
						<!-- login page -->
						&nbsp;&nbsp; <li class="s"><a href="About_us_and_Roles.php">
						<font style="font-size:12px"> About_us_and_Roles </font></a></li> 
						<!-- About us and Roles page -->
					    <!-- <li class="s"><a href="Listing_function_faleristics.php">
						<font style="font-size:20px"> Listing_function_faleristics <font></a></li>
						<!-- Listing function of all student broken by faleristics --> 
						<!-- <li class="s"><a href="CRUD-faleristics.php">
						<font style="font-size:20px"> CRUD-faleristics </font></a></li> -->
						<!-- faleristics (admin user only) /////////////////////////////--> 
						<!-- <li class="s"><a href="Register.php">
						<font style="font-size:20px"> Register <font></a></li> -->
						<!-- button click at form Register inputjoin to sport -->
					    <!-- <li class="s"><a href="Update_Details.php"><font style="font-size:20px"> Update_Details <font>
						</a></li> --> <!-- Update Details page -->
						 <!-- <li class="s"><a href="Manage_Users.php">
						 <font style="font-size:20px"> Manage_Users </font></a></li> -->
						 <!-- Manage User (admin user only) //////////////////////-->
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
			<?php if(!isset($_SESSION["lg"])){
				echo'
			&nbsp;&nbsp; <font style="font-size: 12pt">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please, fill <br>&nbsp;our register form. <br> 
			&nbsp;You need fill <br>&nbsp;all six columns.
			';}?>	</div>
		
			<div id="Bofore_Content" style="border-style: solid; border-width: 1px; padding-left: 1px; 
			padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
							<p align="center"><b><font color ="#FFF8D2"><br>Web Technology/Marketing 
				</font></b></p></div>
				<div id="section" style="border-style: solid; border-width: 1px; padding-left: 1px; 
				padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
				<br>
				<!--/////////////////////////////////////////////////////////////////////////////////-->
<table width="500" height="100" border="1" bgcolor="#FFFFFF" style="border-color: #C0C0C0" align="center">
<tr><td>
<form method="POST" action="Register.php">
<?php

if(isset($_SESSION["lg"])) //die('');
{echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/index.php">';}
if(!isset($_SESSION["lg"])) //die('');
{
echo '
<p>&nbsp;&nbsp;&nbsp;<font color ="black" style="font-size: 10pt"> Please enter user_id not more 10 numbers<br>
&nbsp;&nbsp;&nbsp;
<input type="number"  name="student_id" size="10" maxlength="10"></input>
</p>
<p>&nbsp;&nbsp; &nbsp;Please enter password two times to proof it<br>&nbsp;&nbsp;&nbsp;
<input type="password"  name="pass1" size="25" maxlength="25"></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input type="password"  name="pass2" size="25" maxlength="25"></input>
<p>
&nbsp;&nbsp;&nbsp;<font color ="black" style="font-size: 10pt"> Please enter first_name<br>
&nbsp;&nbsp;&nbsp;
<input type="text"  name="first_name" size="50" maxlength="50"></input>
</p>
&nbsp;&nbsp;&nbsp;<font color ="black" style="font-size: 10pt"> Please enter last_name<br>
&nbsp;&nbsp;&nbsp;
<input type="text"  name="last_name" size="50" maxlength="50"></input>
</p>
<p>
&nbsp;&nbsp;&nbsp;<font color ="black" style="font-size: 10pt"> Please enter email<br>
&nbsp;&nbsp;&nbsp;
<input type="email"  name="email" size="50" maxlength="100"></input>
</p>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Are you agree with Our Roles 
&nbsp;&nbsp;&nbsp;<input type="checkbox"  name="Roles" size="25" maxlength="25"></input></p>
</font>
</font>
<input type="submit" value="OK" ></input>
&nbsp;
<input type="reset" value="Reset"></input>
';
///insert into instructor values

         	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	$df=0;$gh=0;
	
	    $cond = mysqli_connect($mysql_host,$mysql_username,$mysql_password,$mysql_database);

		$varN1 = mysqli_real_escape_string($cond, $_POST["student_id"]);
		$varN2 = mysqli_real_escape_string($cond, $_POST["pass1"]);
        $varN3 = mysqli_real_escape_string($cond, $_POST["pass2"]);
        $varN4 = mysqli_real_escape_string($cond, $_POST["first_name"]);	
        $varN5 = mysqli_real_escape_string($cond, $_POST["last_name"]);
        $varN6 = mysqli_real_escape_string($cond, $_POST["email"]);
		$varN7 = mysqli_real_escape_string($cond, $_POST["pass3"]);
		$i=0; $add;$h=0;$addg=" ";
		$dlin7=strlen($varN6);
		$dlin8=$dlin7-1;
		$dt=0;$de=0;
		$df=0;
		
			
		if($dlin8==0){$de=1;$i=0;}
		if($dlin8>0)
	    {
		do
	    {
		$i++;
		$add=$varN6[$i];
		if($add=="@"){$h=1;$addg=$varN6[$i];}
		if($i<$dlin8){$h=1;}
		}while($h<1 || $i<$dlin8);
         }		
		if($addg!="@" && $i<$dlin8 || $addg!="@" && $i<$dlin7)
		{
		$dt=3;
		 echo '
		<font color="#E2000D" style="font-size: 10pt">
		&nbsp;&nbsp;  You wrong fill the email column, please, try again !!! </font>';
		}
		
		
		if ( (!isset($_POST["Roles"]))  == "on" )
		$RUL = 0; 
	else
		$RUL = 1;
		
		if($RUL==0) {
		$dt=3;
		 echo '
		<font color="#E2000D" style="font-size: 7pt">
		&nbsp;&nbsp;  Sorry, but you cannot register because you need to choose that you agree our Roles !!! </font>';
		}
		
		

if($dt!=3)
{

	
		
		
if($dt!=3)
{

$dlin1=strlen($varN1);$dlin2=strlen($varN2);
$dlin3=strlen($varN3);$dlin4=strlen($varN4);
$dlin5=strlen($varN5);$dlin6=strlen($varN6);


/* password 5 */
//echo $row[4]." <br> "; 
////////////	
		





/*
Students` (`student_id`,`first_name`,`last_name`,`email`,`password`,`admin`) VALUES
   					   ('20101234'  ,'Brian'   , "O'Driscoll", 'Brian@cctstudent.ie','1111'    ,0),
	$varN1 = $_POST["login"];
		$varN2 = $_POST["pass1"];
        $varN3 = $_POST["pass2"];
        $varN4 = $_POST["first_name"];	
        $varN5 = $_POST["last_name"];
        $varN6 = $_POST["email"];	
		*/
//

if($dlin1>0 && $dlin2>0 && $dlin3>0 && $dlin4>0 && $dlin5>0 && $dlin6>0 && $varN2==$varN3)
{
$sql = "SELECT * FROM Students WHERE student_id = '$varN1%'";
}


if($dlin1>0 && $dlin2>0 && $dlin3>0 && $dlin4>0 && $dlin5>0 && $dlin6>0 && $varN2==$varN3)
{
$items = $dbConnection->prepare("$sql");
$items->execute();
foreach ($items as $row) 
{
//////
/* login 1 */ 
//echo $row[0]." <br> "; 
$row1=$row[0]; $ty2=$row[0];
$ty3[0]=$ty2[0];$ty4=$ty3[0];
$dlin3=strlen($ty4);
if($dlin3==1){$df=1;}


}
}
if($df==1){echo '<font color="#E2000D" style="font-size: 10pt">
&nbsp;&nbsp; This ID already exist please, try again !!! </font>';} 


/* password 5 */
//echo $row[4]." <br> "; 
////////////	
	if($df==0){	





		//////
if($dlin1>0 && $dlin2>0 && $dlin3>0 && $dlin4>0 && $dlin5>0 && $dlin6>0 && $varN2==$varN3 && $dlin1!=8 && $dlin1<=10)
{
$varN3f = password_hash($varN3, PASSWORD_DEFAULT);
$sql = "insert into Students (student_id,first_name,last_name,email,password,admin) values('$varN1','$varN4','$varN5','$varN6','$varN3f',0)";
           

}
	

//session
if($varN2!=$varN3)
{
echo '<font color="#E2000D" style="font-size: 12pt">
&nbsp;&nbsp;  The password you typed don not match, please, try again!!! </font>';
}       
        elseif($dlin1==8 || $dlin1>=10)
		{echo '<font color="#E2000D" style="font-size: 12pt">
		&nbsp;&nbsp;  Please, try fill our Register form again!!! Too much numbers!!! </font>';} 
		elseif($dlin1>10 || $dlin1==0 || $dlin2==0 || $dlin3==0 || $dlin4==0 || $dlin5==0 || $dlin6==0 || $varN2!=$varN3)
		{echo '<font color="#E2000D" style="font-size: 12pt">
		&nbsp;&nbsp;  Please, try fill our Register form again!!! </font>';} 
		//////
		else if (!is_numeric($varN1))
		{
		echo '<font color="#E2000D" style="font-size: 10pt">
		&nbsp;&nbsp;  Please, try fill our UPDATE form again!!! Must be numbers </font>';$as=1;
			
		}
else
{

if($df==0){	
$items = $dbConnection->prepare("$sql");
$items->execute();

 echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/index.php">';
}
if($df==1){echo '<font color="#E2000D" style="font-size: 10pt">
&nbsp;&nbsp; This ID already exist please, try again !!! </font>';} 
//session
//echo  $row[0]." <br> "; 

}

}
}
	}
	}
//if ($_SERVER["REQUEST_METHOD"] == "POST")

}
?>

  

  <div class="textbox text-center"> password </div>
</td></tr>
</form>
<form class="center-block">

    <input type="text" id="password" autocomplete="off" class="form-control input-lg">

    <progress max="100" value="0" id="meter"></progress>

    <button class="btn btn-success btn-lg btn-block">Show Password Strength</button>

  </form>

  <div class="textbox text-center"> password </div>
<script>
var code = document.getElementById("password");

var strengthbar = document.getElementById("meter");
var display = document.getElementsByClassName("textbox")[0];

code.addEventListener("keyup", function() {
  checkpassword(code.value);
});


function checkpassword(password) {
  var strength = 0;
  if (password.match(/[a-z]+/)) {
    strength += 1;
  }
  if (password.match(/[A-Z]+/)) {
    strength += 1;
  }
  if (password.match(/[0-9]+/)) {
    strength += 1;
  }
  if (password.match(/[$@#&!]+/)) {
    strength += 1;

  }

  if (password.length < 8) {
    display.innerHTML = "minimum number of characters is 8";
  }

 
  switch (strength) {
    case 0:
      strengthbar.value = 0;
      break;

    case 1:
      strengthbar.value = 25;
      break;

    case 2:
      strengthbar.value = 50;
      break;

    case 3:
      strengthbar.value = 75;
      break;

    case 4:
      strengthbar.value = 100;
      break;
  }
}
</script>
</table>
			</div>			
	   <div id="After_Content" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px; 
	   padding-top: 1px; padding-bottom: 1px">
	   		<br>
			<!--/////////////////////////////////////////////////////////////////////////////////-->
			<?php
			if(!isset($_SESSION["lg"])){
				echo'
			&nbsp;<font style="font-size: 12pt"> Thank you that you fill our Registration Form.</font>
			';}?></div>
        <div id="side_bar_2" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px; 
		padding-top: 1px; padding-bottom: 1px">
        <!--Form -->
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<table class="one"  align="center">
		<tr> <td>
		<br>
		<form method="POST" action="http://www.faleristics4eforever.epizy.com/index.php">



<p>&nbsp;</p>

</form>

<br>

</td></tr>
</table>

		
		</div>
						<div id="footer" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right:
						1px; padding-top: 1px; padding-bottom: 1px"><br>
						<?php
						if(!isset($_SESSION["lg"])){
							echo'
	&nbsp;&nbsp; <marquee> Created by Jurijus Pacalovas </marquee><br>
						&nbsp;&nbsp;';
						}?>						
						</div>
			<br><br>
			</body>
</html> 