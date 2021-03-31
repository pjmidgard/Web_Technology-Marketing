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
		<title>Update_Details</title>
<link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="css/style.css">
  
	<meta name="google-site-verification" content="nbt7LtXHfEjhx5UnP4W4GobW4jmPBahajSPmw1M0p1w" />
    </head>
			<body>
			<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


			<?php session_start(); error_reporting(0); $df=0; $ds=0; $as=0; $asi=0; $asd=0;
		$_SESSION["qwe"]="";
		$_SESSION["derk"]="ok";
		
		  ?>
						<div id="header" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right:
						1px; padding-top: 1px; padding-bottom: 1px"><br>
	&nbsp;&nbsp; <marquee> Web Technology/Marketing  </marquee><br>
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
			<?php
			if(isset($_SESSION["lg"])){
			echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If, you want <br>&nbsp;to update, you&nbsp;
			<br>&nbsp;need click button. <br>&nbsp;Update Details.&nbsp; 
			<br>&nbsp;Then <br>
			&nbsp;you need fill all <br>&nbsp;all five columns. </font> <br>
			';}?></div>
			<div id="Bofore_Content" style="border-style: solid; border-width: 1px; padding-left: 1px; 
			padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
							<p align="center"><b><font color ="#FFF8D2"><br> faleristics
				</font></b></p></div>
				<div id="section" style="border-style: solid; border-width: 1px; padding-left: 1px; 
				padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
				<br>
				<!--/////////////////////////////////////////////////////////////////////////////////-->
<table width="500" height="100" bgcolor="#FFFFFF" style="border-color: #C0C0C0" align="center">
<tr><td>
<form method="POST" action="Update_Details.php">
<?php
unset($_SESSION['lfgf']);
session_destroy($_SESSION['lfgf']);
unset($_SESSION['lghjd']);
session_destroy($_SESSION['lghjd']);
if(!isset($_SESSION["lg"]) || !isset($_SESSION["lj"]) || !isset($_SESSION["fg"])) //die('');
{
if(!isset($_SESSION["lfg"]) || $as==2)
{
echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/index.php">';}
if(isset($_SESSION["lfg"])=="You successful Update")
{
session_start();
$_SESSION["lfg"]="You successful Update";
if(isset($_SESSION["lfg"]))
{
echo '<font color="#28F000" style="font-size: 12pt">
		&nbsp;&nbsp;'  .$_SESSION["lfg"]. '!!! </font>';
		echo
'<form method="POST" action="Update_Details.php">
<input type="submit" name="OK" value="OK"></input>
</form>'; 

if(isset($_SESSION["lg"]) && isset($_SESSION["lj"])) //die('');
{
        	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	if($as==0)
	{
	session_unset();
	session_destroy();
	echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/index.php">';
	}
		}
	}
$as=1;
  usleep(5000000);
   session_unset();
 session_destroy();$as=2;usleep(5000000);
 echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/index.php">';
 }
 }
}
if(!isset($_SESSION["lfg"]))
{}
elseif(isset($_SESSION["lfg"])=="You successful Update")
{
echo '<font color="#28F000" style="font-size: 12pt">
		&nbsp;&nbsp;'  .$_SESSION["lfg"]. '!!! </font>';
$as=1;
echo
'<form method="POST" action="Update_Details.php">
<input type="submit" name="OK" value="OK"></input>
</form>';
if(!isset($_SESSION["lgi"])!="check") //die('');
{
        	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['OK'])) 
	{
	
	session_unset();
	session_destroy();
	echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/index.php">';
	
		}
	}
 session_unset();
 session_destroy();
 }

if(isset($_SESSION["lg"]) || isset($_SESSION["lj"]) || isset($_SESSION["fg"])) //die('');
{
$ddd=$_SESSION["lj"];
		{$sqlj = "SELECT * FROM Students WHERE student_id = '$ddd'";}
$items = $dbConnection->prepare("$sqlj");
$items->execute();
//(`student_id`,`first_name`,`last_name`,`email`,`password`,`admin`)
$rowg[0]="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user_id";
$rowg[1]="first_name";
$rowg[2]="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;last_name";
$rowg[3]="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;email";
$rowg[4]="&nbsp;password encrypted";
$rowg[5]="admin";
echo '<br>';
echo '<div align="center"><font color ="black" style="font-size: 12pt"> Your Details </div>';
foreach ($items as $row) 
{
for($u=0; $u<4; $u++)
{
echo '<div align="center"><font color ="black" style="font-size: 12pt">' .$rowg[$u]. 
"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
 .$row[$u]."</font></div></td></tr><tr><td>";
}
}

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
password &nbsp;&nbsp;".$_SESSION["lgr"]."<br>";

$rowwwhash=$row[4];

/*
if(isset($_SESSION["lgrr"]) && $_SESSION["lgrr"]!="$")
{
if($_SESSION["fg"]=="1"){

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
password crack &nbsp;&nbsp;".$_SESSION["lgrr"]."<br>";
}

}
*/


$roww=$row[0];
echo '<br>';
if (!isset($_SESSION["lghj"]) || $_SESSION["lghj"]!="Update_Details"){
echo '<div align="center"><form method="POST" action="Update_Details.php">
<input type="submit" name="Update_Details" value="Update Details"></input>
</form></div><br>';

   	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Update_Details'])) 
	{
	$_SESSION["lghj"]="Update_Details";
    //$_SESSION["lgrr"]="$";
	echo '<meta http-equiv="refresh" content="0; url=Update_Details.php">';
}
}		
if (!isset($_SESSION["lghj"])){}
elseif (isset($_SESSION["lghj"])){
if($_SESSION["lghj"]=="Update_Details")
{
echo '
<p>&nbsp;&nbsp; &nbsp;<font color ="black" style="font-size: 12pt">Please enter password two times to proof it</font>
<br>&nbsp;&nbsp;&nbsp;
<input type="password"  name="pass1" size="25" maxlength="25"></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input type="password"  name="pass2" size="25" maxlength="25"></input>
<p>
&nbsp;&nbsp;&nbsp;<font color ="black" style="font-size: 12pt"> Please enter first_name<br>
&nbsp;&nbsp;&nbsp;
<input type="text"  name="first_name" size="50" maxlength="50"></input>
</p>
&nbsp;&nbsp;&nbsp;<font color ="black" style="font-size: 12pt"> Please enter last_name<br>
&nbsp;&nbsp;&nbsp;
<input type="text"  name="last_name" size="50" maxlength="50"></input>
</p>
<p>
&nbsp;&nbsp;&nbsp;<font color ="black" style="font-size: 12pt"> Please enter email<br>
&nbsp;&nbsp;&nbsp;
<input type="text"  name="email" size="50" maxlength="100"></input>
</p>
<br>
<input type="submit" value="OK" ></input>
&nbsp;
<input type="reset" value="Reset"></input>
</font>
';
///insert into instructor values




         	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	$df=0;$gh=0;
	
	    $cond = mysqli_connect($mysql_host,$mysql_username,$mysql_password,$mysql_database);

		$varN2 = mysqli_real_escape_string($cond, $_POST["pass1"]);
        $varN3 = mysqli_real_escape_string($cond, $_POST["pass2"]);
        $varN4 = mysqli_real_escape_string($cond, $_POST["first_name"]);	
        $varN5 = mysqli_real_escape_string($cond, $_POST["last_name"]);
        $varN6 = mysqli_real_escape_string($cond, $_POST["email"]);
		$i=0; $add;$h=0;$addg=" ";
		$dlin7=strlen($varN6);
		$dlin8=$dlin7-1;
		$dt=0;$de=0;
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
		<font color="#E2000D" style="font-size: 12pt">
		&nbsp;&nbsp;  You wrong fill the email column, please, try again !!! </font>';
		$as=1;$asi=1;
		}		
if($dt!=3)
{			
$dlin2=strlen($varN2);
$dlin3=strlen($varN3);$dlin4=strlen($varN4);
$dlin5=strlen($varN5);$dlin6=strlen($varN6);
/* password 5 */
//echo $row[4]." <br> "; 
////////////	
	if($df==0){		
if($dlin2>0 && $dlin3>0 && $dlin4>0 && $dlin5>0 && $dlin6>0 && $varN2==$varN3)
{//$sql = "insert into Students values('$varN1','$varN4','$varN5','$varN6','$varN3',1)";
$dfe=$_SESSION["lj"];
$sql = "
update Students
set first_name = '$varN4' 
where student_id ='$dfe'
";
$sql1 = "
update Students
set last_name = '$varN5' 
where student_id ='$dfe'
";
$sql2 = "
update Students
set email = '$varN6'
where student_id ='$dfe'
";


$hashs = password_hash($varN3, PASSWORD_DEFAULT);


$sql3 = "
update Students
set password = '$hashs' 
where student_id ='$dfe'
";

}
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
if($dlin2>0 && $dlin3>0 && $dlin4>0 && $dlin5>0 && $dlin6>0 && $varN2==$varN3)
{
$items = $dbConnection->prepare("$sql");
$items->execute();
$items = $dbConnection->prepare("$sql1");
$items->execute();
$items = $dbConnection->prepare("$sql2");
$items->execute();
$items = $dbConnection->prepare("$sql3");
$items->execute();
$asd=1;
}


elseif($varN2!=$varN3)
{
echo '<font color="#E2000D" style="font-size: 12pt">
&nbsp;&nbsp;  The password you typed don not match, please, try again!!! </font>';$as=1;
}
		elseif($dlin2==0 || $dlin3==0 || $dlin4==0 || $dlin5==0 || $dlin6==0 || $varN2!=$varN3)
		{echo '<font color="#E2000D" style="font-size: 12pt">
		&nbsp;&nbsp;  Please, try fill our UPDATE form again!!! </font>';$as=1;} 
		//////
if($dlin2>0 && $dlin3>0 && $dlin4>0 && $dlin5>0 && $dlin6>0 && $varN2==$varN3)
{
//session
//echo  $row[0]." <br> "; 
$as=1;
$_SESSION["lfg"]="You successful Update";
 echo '<meta http-equiv="refresh" content="0; url=Update_Details.php">';
}
}
}
}//if ($_SERVER["REQUEST_METHOD"] == "POST")
}
}
}
?>
</td></tr>
</form>
</table>
			</div>			
	   <div id="After_Content" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px; 
	   padding-top: 1px; padding-bottom: 1px">
	   		<br>
			<!--/////////////////////////////////////////////////////////////////////////////////-->
			<?php if(isset($_SESSION["lg"])){echo'&nbsp;<font style="font-size: 12pt"> You can update your details at any time. </font>
			';}?></div>
        <div id="side_bar_2" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px; 
		padding-top: 1px; padding-bottom: 1px">
        <!--Form -->
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<table width="197" height="150" border="1" bgcolor="#C0C0C0" style="border-color: #C0C0C0" align="center">
		<tr> <td>
		<br>
		<form method="POST" action="Update_Details.php">
<?php
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
'<form method="POST" action="http://www.faleristics4eforever.epizy.com/index.php">
<input type="submit" name="Sign_out" value="Sign out"></input>
</form>'; 
if(isset($_SESSION["lg"]) && isset($_SESSION["lj"])) //die('');
{
        	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Sign_out'])) 
	{
	if($as==0)
	{
	session_unset();
	session_destroy();
	echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/index.php">';
	}
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
	&nbsp;&nbsp; <marquee> faleristics4forever </marquee><br>
	&nbsp;&nbsp; 
						</div>
			<br><br>
				<script>
  <?php echo json_encode($data); ?>;
</script>
<?php

/*
		{$sqlj = "SELECT * FROM Students WHERE student_id = '$ddd'";}
$items = $dbConnection->prepare("$sqlj");
$items->execute();


foreach ($items as $row) 
{
for($u=0; $u<4; $u++)
{
}
}


$rowwwhash=$row[4];


if($_SESSION["fg"]=="1"){
if(!isset($_SESSION["lgrr"]))
{

$uu=0;
if(isset($_SESSION["numberc"]))
{
	$uu=$_SESSION["numberc"];
}
$uue=$uu+150;


while($uu<=$uue) {

 

$pass1=base_convert($uu, 10, 36);

if (password_verify($pass1, $rowwwhash)) {
	$pass2=$pass1;
	$_SESSION["lgrr"]="$pass2";
	echo '<meta http-equiv="refresh" content="0; Update_Details.php">';
	
}

$uu++;


$_SESSION["numberc"]="$uu";
echo '<meta http-equiv="refresh" content="0; Update_Details.php">';


}
}
}
*/
?>
			</body>
</html> 