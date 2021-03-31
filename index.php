<?php>
	require_once('config.php');
?>
<!DOCTYPE html>
<html>
<!--Crated: Jurijus Pacalovas-->
	<head>
	     <meta charset="UTF-8">

		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<title>Web Technology/Marketing </title>
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

<h2>External JavaScript</h2>

<p id="demo">A Paragraph.</p>

<button type="button" onclick="myFunction()">Try it</button>

<p>(myFunction is stored in an external file called "myScript.js")</p>

<script src="https://www.w3schools.com/js/myScript.js"></script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


			
 <a href='https://www.symptoma.it/'>Symptoma®</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=083b29a6b0bf0f365a6b1eff1e58e772f4bfa527'></script>
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/694708/t/0"></script>
			 
			<?php session_start(); $df=0; $ds=0; $dfq=0;
			error_reporting(0);

			$_SESSION["qwe"]="";
			$_SESSION["derk"]="ok";
			if (!isset($_SESSION["lghjas"])){}
elseif (isset($_SESSION["lghjas"])){
$_SESSION["lghjas"]="click";}
			if (!isset($_SESSION["lghj"])){}elseif($_SESSION["lghj"]=="Clickh")
			{$_SESSION["lghj"]="Click";}
			elseif (isset($_SESSION["lghj"])){$_SESSION["lghj"]="Click";}
            //"ldfd"
            if (!isset($_SESSION["ldfd"])){}elseif($_SESSION["ldfd"]=="Clickh")
			{$_SESSION["ldfd"]="Click";}
			elseif (isset($_SESSION["ldfd"])){$_SESSION["ldfd"]="Click";}		
          if (!isset($_SESSION["lghlk"])){} elseif (!isset($_SESSION["lghj"])){if($_SESSION["lghlk"]=="Update_faleristics")
		  {$_SESSION["lghlk"]="Click";}}
		  if (!isset($_SESSION["lfg"])){} 
		    elseif (isset($_SESSION["lfg"])){$_SESSION["lfg"]="in";} 
			 if (!isset($_SESSION["lghld"])){} elseif (!isset($_SESSION["lghld"])){if($_SESSION["lghld"]=="Update_faleristics")
		  {$_SESSION["lghld"]="Click";}}
		  	  if (!isset($_SESSION["dert"])){} 
		    elseif (isset($_SESSION["dert"])){$_SESSION["dert"]="in";}
		   			?> 
						<div id="header" style="border-style: solid; border-width: 1px; padding-left: 1px;
						padding-right: 1px; padding-top: 1px; padding-bottom: 1px"><br>
						
	&nbsp;&nbsp; <marquee> Web Technology/Marketing  </marquee><br>
	&nbsp;&nbsp; 
						</div>
<div id="horizontal_menu" style="border-style: solid; border-width: 1px; padding-left: 1px;
 padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
				<nav>
				<br>
				<div align="center">
					<ul>
						&nbsp;&nbsp; <li class="s"><a href="index.php">
						<font style="font-size:12px"> Home </font></a></li> <!-- login page -->
						&nbsp;&nbsp; <li class="s"><a href="About_us_and_Roles.php">
						<font style="font-size:12px"> About_us_and_Roles </font></a></li> <!-- About us and Roles page -->
					    <!-- <li class="s"><a href="Listing_function_faleristics.php">
						<font style="font-size:20px"> Listing_function_faleristics <font></a></li>
						<!-- Listing function of all st upiudent broken by faleristics --> 
						<!-- <li class="s"><a href="CRUD-faleristics.php">
						<font style="font-size:20px"> CRUD-faleristics </font></a></li> -->
						<!-- faleristics (admin user only) /////////////////////////////--> 
						<!-- <li class="s"><a href="Register.php">
						<font style="font-size:20px"> Register <font></a></li> -->
						<!-- button click at form Register inputjoin to sport -->
					    <!-- <li class="s"><a href="Update_Details.php">
						<font style="font-size:20px"> Update_Details <font></a></li> -->
						<!-- Update Details page -->
						 <!-- <li class="s"><a href="Manage_Users.php">
						 <font style="font-size:20px"> Manage_Users </font></a></li> --> 
						 <!-- Manage User (admin user only) //////////////////////-->
						<?php
						//echo $_SESSION["lg"];		
                        //fg
		//////////////////////////////////////////////////////
                     
                       if(isset($_SESSION["lg"])  &&  $_SESSION["fg"]=="0"){
						echo '
						&nbsp;&nbsp;  <li class="s"><a href="Game.html">
						<font style="font-size:12px"> Game </font></a></li>    
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
						&nbsp;&nbsp;  <li class="s"><a href="game.html">
						<font style="font-size:12px"> Game </font></a></li> 
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
						<font style="font-size:12px"> Gallery </font></a></li> 
						&nbsp;&nbsp;  <li class="s"><a href="game.html">
						<font style="font-size:12px"> Game </font></a></li> ';
                        }
					
					?>
					</ul>
					</div>
	</nav>
			</div>	
			<div id="side_bar_1" style="border-style: solid; border-width: 1px; padding-left: 1px; 
			padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
			<br><br><br><br>
			
			
			&nbsp;&nbsp;Please, read roles. <br>&nbsp; After <br>&nbsp;please, register and <br>&nbsp;after you <br>
			&nbsp;can manage your <br>&nbsp;details and choose <br>&nbsp; the Web Technology. </font> <br>
			
			</div>  
			<div id="Bofore_Content" style="border-style: solid; border-width: 1px; padding-left: 1px; 
			padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
							<p align="center"><img src="img/JavaScript.jfif" width="50" height="50" hspace="15" vspace="15">
				</p></div>
				<div id="section" style="border-style: solid; border-width: 1px; padding-left: 1px; 
				padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
	        <dl>
			<dt> <font style="font-size: 30pt"> &nbsp;&nbsp; Web Technology </font> <br> <br> <br>
			<img src="img/JavaScript.jfif"  width="530" height="344" hspace="15" vspace="15">
			<br>
			<br>
			&nbsp;&nbsp;<img src="img/JavaScript.jfif"  align="right" width="50" height="50" hspace="15" vspace="15">
			
			</div>		
	   <div id="After_Content" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px; 
	   padding-top: 1px; padding-bottom: 1px">
	   		<br>
            <font style="font-size: 10pt">   
			
			
			&nbsp;&nbsp;&nbsp;&nbsp;
			<ul>
			<li> <font style="font-size: 12pt">  To enter the Update_Details you must register. </font> </li>
			</ul>
			
            </font>
	   </div>
        <div id="side_bar_2" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px; 
		padding-top: 1px; padding-bottom: 1px">
        <!--Form -->
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<table width="197" height="150" border="1" bgcolor="#C0C0C0" style="border-color: #C0C0C0" align="center">
		<tr> <td>
		<br>
		<?php 

if(!isset($_SESSION["lg"]) && !isset($_SESSION["lg"]) && !isset($_SESSION["fg"])) //die('');
{
echo '&nbsp;&nbsp;&nbsp;&nbsp;
<font style="font-size: 12pt"><a href="Register.php"><input type="submit" method="Register.php" value="Register">
</input></a></font>';
}
?>

		<form method="POST" action="index.php">
<?php
unset($_SESSION['lfgf']);
session_destroy($_SESSION['lfgf']);
unset($_SESSION['lghjr']);
session_destroy($_SESSION['lghjr']);
unset($_SESSION['lghjrr']);
session_destroy($_SESSION['lghjrr']);
unset($_SESSION['lghjre']);
session_destroy($_SESSION['lghjre']);
unset($_SESSION['lghjd']);
session_destroy($_SESSION['lghjd']);
if(!isset($_SESSION["lg"]) && !isset($_SESSION["lj"])) //die('');
{

echo '
<p>&nbsp;&nbsp;&nbsp;<font style="font-size: 10pt"> Please enter login<br>
&nbsp;&nbsp;&nbsp;

<input type="text"  name="login" size="20" maxlength="30"></input>
</p>
<p>&nbsp;&nbsp; &nbsp; Please enter password<br>&nbsp;&nbsp;&nbsp;
<input type="password"  name="pass" size="20" maxlength="30"></input>
<br>
&nbsp;
</p>
&nbsp;
<input type="submit" value="OK" ></input>
&nbsp;
<input type="reset" value="Reset">
</font>';
$ds=1;
}
if(isset($_SESSION["lg"]) && isset($_SESSION["lj"]))
{
echo '<div align="center">
<font color green style="font-size:12pt">';if($_SESSION["fg"]=="1"){echo "Admin <br>";}else{echo "USER <br>";} 
echo "</font></div>";
echo "You are welcome ";
echo $_SESSION["lj"]. " <br> ";
}
?>
</form>
<?php


$ip = $_SERVER['REMOTE_ADDR'];
//The value of $ip at this point would look something like: "192.0.34.166"


//The $ip would now look something like: 1073732954

$sql4 = "insert into IP (IP) values('$ip')";
$items = $dbConnection->prepare("$sql4");
$items->execute();
	

if(isset($_SESSION["lg"])) //die('');
{
echo
'<form method="POST" action="index.php">
<input type="submit" name="Sign_out" value="Sign out"></input>
</form>';

        	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Sign_out'])) 
	{
	session_unset();
	session_destroy();
	echo '<meta http-equiv="refresh" content="0; url=index.php">';
		}
	}

?>
<br>
<?php
function You_have_Sign_in(){
$df=2;
echo '<b><font color ="green"> You have Sign in </font></b>';
}
if(!isset($_SESSION["lg"]) && !isset($_SESSION["lj"]) && $ds==1) //die('');
{
        	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	
	    $cond = mysqli_connect($mysql_host,$mysql_username,$mysql_password,$mysql_database);
	
	    $varN1 = mysqli_real_escape_string($cond, $_POST["login"]);
		$varN2 = mysqli_real_escape_string($cond, $_POST["pass"]);	
		
		$df=0;
    $df=0; $login=$varN1;
$pass=$varN2;
//echo $login." <br> "; 
//echo $pass." <br> "; 
$dlin1=strlen($varN2);
$dlin2=strlen($varN1);
if($dlin1>0 && $dlin2>0)
{$sql = "SELECT * FROM Students WHERE student_id = '$login'";}
if($dlin1>0 && $dlin2>0)
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
$df=1;

/* password 5 */
//echo $row[4]." <br> "; 
////////////	
			}//foreach
			
		/////
}
if($df==1)
{
 $US4i=$row[0];
 $US6i = $US4i;
 $dlin3i=strlen($US6i);
 $dlin3l=strlen($login);
 $US4d=$row[4];
 $US6d = $US4d;
 $dlin3d=strlen($US6d);
 $dlin3li=strlen($pass);

 



if($US6i==$login)
{
	$hash=$US6d;
    if (password_verify($pass, $hash)) {
    echo 'Password is valid!';
	$_SESSION["lgr"]="$pass";
	$df=1;
	
$hashs = password_hash($pass, PASSWORD_DEFAULT);


$sqlt = "
update Students
set password = '$hashs' 
where student_id ='$login'
";

$items = $dbConnection->prepare("$sqlt");
$items->execute();

} else {
    echo 'Invalid password.';$df=0;
}
	
}

}
 
		if($df==0){
			
			
			
			echo '<font color="#E2000D"> <br> Password or login wrong please try again !!! </font>';} 
		//////
if($df==1)
{
//session
//echo  $row[0]." <br> "; 
 $US1=$row[1];
 $US2=$row[2];
 $US3 = $US1 . ' ' . $US2;
 $US4=$row[0];
 $US6 = $US4;  
 $_SESSION["lg"]="$US3";
 $_SESSION["lj"]="$US6";
 ((int) $row['admin'] == 1 ? $US7="1" : $US7="0"); $_SESSION["fg"]="$US7";
 echo '<meta http-equiv="refresh" content="0; url=index.php">';
}
}//if ($_SERVER["REQUEST_METHOD"] == "POST")
}

if(isset($_SESSION["lg"])) //die('');
{
 echo '<div align="center">';
 You_have_Sign_in();
 echo $_SESSION["lg"]. " <br> ";
 $_SESSION["lgi"]="check";
}

		?>
		
		<script>
  <?php echo json_encode($data); ?>;
</script>
		
</td></tr>
</table>

		
		</div>
						<div id="footer" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right:
						1px; padding-top: 1px; padding-bottom: 1px"><br>
						
	&nbsp;&nbsp; <marquee> Created by Jurijus Pacalovas </marquee><br>
	&nbsp;&nbsp; 
						</div>
					
			<br><br>
			</body>
</html> 