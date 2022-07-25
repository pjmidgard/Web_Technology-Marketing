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
		<title>About_us_and_Roles</title>
		<link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="css/style.css">
 
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
	&nbsp;&nbsp; <marquee> Web Technology </marquee><br>
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
					    <!-- <li class="s"><a href="Listing_function_faleritics.php">
						<font style="font-size:20px"> Listing_function_faleritics <font></a></li>
						<!-- Listing function of all student broken by faleritics --> 
						<!-- <li class="s"><a href="CRUD-faleritics.php">
						<font style="font-size:20px"> CRUD-faleritics </font></a></li> -->
						<!-- faleritics (admin user only) /////////////////////////////--> 
						<!-- <li class="s"><a href="Register.php">
						<font style="font-size:20px"> Register <font></a></li> -->
						<!-- button click at form Register inputjoin to sport -->
					    <!-- <li class="s"><a href="Gallery2.php"><font style="font-size:20px"> Gallery2 <font>
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
			<?php 
			
			if(isset($_SESSION["lg"]) && $_SESSION["fg"]=="1"){
				echo'
			&nbsp;&nbsp;&nbsp;&nbsp;
			<ul>
			<li> <font style="font-size: 12pt">  On  <u>Gallery2 </u> This page for buy the Web Technolgy </font> </li>
			</ul>';
			}?>
			</div>  
			<div id="Bofore_Content" style="border-style: solid; border-width: 1px; padding-left: 1px; 
			padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
							<p align="center"><b><font color ="#FFF8D2"><br> Web Technology
				</font></b></p></div>
				<div id="section" style="border-style: solid; border-width: 1px; padding-left: 1px; 
				padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
				<br>
				<!--/////////////////////////////////////////////////////////////////////////////////-->
<table width="500" height="100" bgcolor="#FFFFFF" style="border-color: #C0C0C0" align="center">
<tr><td>
<form method="POST" action="Gallery2.php">
<?php
if($_SESSION["fg"]=="0"){
	echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/index.php">';
}
unset($_SESSION['lfgf']);
session_destroy($_SESSION['lfgf']);
unset($_SESSION['lghjd']);
session_destroy($_SESSION['lghjd']);
if(isset($_SESSION["lfg"])=="You successful Update")
{
echo '<font color="#28F000" style="font-size: 10pt">
		&nbsp;&nbsp;'  .$_SESSION["lfg"]. '!!! </font>';
		usleep(200000);


unset($_SESSION['lghj']);
session_destroy($_SESSION['lghj']);
$Timecount=0;
while ($Timecount<=1677216)
{
	$Timecount++;
}
unset($_SESSION['lfg']);
session_destroy($_SESSION['lfg']);
echo '<meta http-equiv="refresh" content="0; url=Gallery2.php">';
}




if(!isset($_SESSION["fg"]))
{
	echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/index.php">';
}
if(!isset($_SESSION["lg"])  &&  $_SESSION["fg"]=="1" || !isset($_SESSION["lj"])   &&  $_SESSION["fg"]=="1" || !isset($_SESSION["fg"])  &&  $_SESSION["fg"]=="1") //die('');
{
if(!isset($_SESSION["lfg"]) || $as==2)
{
echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/index.php">';}
elseif(isset($_SESSION["lfg"])=="You successful Update")
{

$_SESSION["lfg"]="You successful Update";
if(isset($_SESSION["lfg"]))
{
echo '<font color="#28F000" style="font-size: 10pt">
		&nbsp;&nbsp;'  .$_SESSION["lfg"]. '!!! </font>';


usleep(200000);
echo '<meta http-equiv="refresh" content="0; url=Gallery2.php">';

if(isset($_SESSION["lg"]) && isset($_SESSION["lj"]) && !isset($_SESSION["lfg"])=="You successful Update" || $_SESSION["fg"]=="0") //die('');
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

echo '<font color="#28F000" style="font-size: 10pt">
		&nbsp;&nbsp;'  .$_SESSION["lfg"]. '!!! </font>';
$as=1;



if(!isset($_SESSION["lgi"]) || $_SESSION["fg"]=="0") //die('');
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
 
 
 
 }

if(isset($_SESSION["lg"])  &&  $_SESSION["fg"]=="1"  || isset($_SESSION["lj"]) &&  $_SESSION["fg"]=="1" || isset($_SESSION["fg"])  &&  $_SESSION["fg"]=="1") //die('');
{
$ddd=$_SESSION["lj"];
	$varN22=$_SESSION["lghjrr"];
echo '
<p>&nbsp;&nbsp; &nbsp;<font color ="black" style="font-size: 12pt">Seach</font>
<br>&nbsp;&nbsp;&nbsp;
<input type="text"  name="Name_of_Product" size="50" maxlength="500" value='.$varN22.'></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<br>
<input type="submit" value="OK" ></input>
&nbsp;
<input type="reset" value="Reset"></input>
</font>
';




  		$cond = mysqli_connect($mysql_host,$mysql_username,$mysql_password,$mysql_database);

		$varN22 = mysqli_real_escape_string($cond, $_POST["Name_of_Product"]);
		$dlin22=strlen($varN22);
		if ($dlin22>0)
		{
	
			$_SESSION["lghjrr"]=$varN22;
			echo '<meta http-equiv="refresh" content="0; url=Gallery2.php">';
         
		}

mysql_connect($mysql_host,$mysql_username,$mysql_password) or die (mysql_error());
mysql_select_db($mysql_database) or die (mysql_error());
$varN22=$_SESSION["lghjrr"];
$varN22 = "%".$varN22."%";
$dlin22=strlen($varN22);
//////////////  QUERY THE MEMBER DATA INITIALLY LIKE YOU NORMALLY WOULD
$sql = mysql_query("SELECT * FROM Product WHERE Name_of_Product LIKE '$varN22' or 
Adminid LIKE '$varN22' or Price LIKE '$varN22'");
//////////////////////////////////// Pagination Logic ////////////////////////////////////////////////////////////////////////
$nr = mysql_num_rows($sql); // Get total of Num rows from the database query
if (isset($_GET['pn'])) { // Get pn from URL vars if it is present
    $pn = preg_replace('#[^0-9]#i', '', $_GET['pn']); // filter everything but numbers for security(new)
    //$pn = ereg_replace("[^0-9]", "", $_GET['pn']); // filter everything but numbers for security(deprecated)
} else { // If the pn URL variable is not present force it to be value of page number 1
    $pn = 1;
}
//This is where we set how many database items to show on each page
if($_SESSION["fg"]=="1")
{
$itemsPerPage = 1;
}
else
{
$itemsPerPage = 3;
}
// Get the value of the last page in the pagination result set
$lastPage = ceil($nr / $itemsPerPage);
// Be sure URL variable $pn(page number) is no lower than page 1 and no higher than $lastpage
if ($pn < 1) { // If it is less than 1
    $pn = 1; // force if to be 1
} else if ($pn > $lastPage) { // if it is greater than $lastpage
    $pn = $lastPage; // force it to be $lastpage's value
}
// This creates the numbers to click in between the next and back buttons
// This section is explained well in the video that accompanies this script
$centerPages = 1;
$sub1 = $pn - 1;
$sub2 = $pn - 2;
$add1 = $pn + 1;
$add2 = $pn + 2;
if ($pn == 1) {
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
	
    $centerPages .= '&nbsp; <a href="' . $_SERVER['Gallery2.php'] . '?pn=' . $add1 . '">  <button type="button" class="btn btn-success">' . $add1 . '</button></a> &nbsp;';
	
	
} else if ($pn == $lastPage) {
    $centerPages .= '&nbsp; <a href="' . $_SERVER['Gallery2.php'] . '?pn=' . $sub1 . '">  <button type="button" class="btn btn-success">' . $sub1 . '</button></a> &nbsp;';

    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
	echo $centerPages;
} else if ($pn > 2 && $pn < ($lastPage - 1)) {
    $centerPages .= '&nbsp; <a href="' . $_SERVER['Gallery2.php'] . '?pn=' . $sub2 . '"><button type="button" class="btn btn-success">' . $sub2 . '</button></a> &nbsp;';
	
    $centerPages .= '&nbsp; <a href="' . $_SERVER['Gallery2.php'] . '?pn=' . $sub1 . '"><button type="button" class="btn btn-success">' . $sub1 . '</button></a> &nbsp;';
	
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
	
	
    $centerPages .= '&nbsp; <a href="' . $_SERVER['Gallery2.php'] . '?pn=' . $add1 . '"><button type="button" class="btn btn-success">' . $add1 . '</button></a> &nbsp;';
	
    $centerPages .= '&nbsp; <a href="' . $_SERVER['Gallery2.php'] . '?pn=' . $add2 . '"><button type="button" class="btn btn-success">' . $add2 . '</button></a> &nbsp;';
	
	echo $centerPages;
	
	
} else if ($pn > 1 && $pn < $lastPage) {
    $centerPages .= '&nbsp; <a href="' . $_SERVER['Gallery2.php'] . '?pn=' . $sub1 . '"><button type="button" class="btn btn-success">' . $sub1 . '</button></a> &nbsp;';
	
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
	
    $centerPages .= '&nbsp; <a href="' . $_SERVER['Gallery2.php'] . '?pn=' . $add1 . '"><button type="button" class="btn btn-success">' . $add1 . '</button></a> &nbsp;';
	echo $centerPages;
}
// This line sets the "LIMIT" range... the 2 values we place to choose a range of rows from database in our query
$limit = 'LIMIT ' .($pn - 1) * $itemsPerPage .',' .$itemsPerPage;
// Now we are going to run the same query as above but this time add $limit onto the end of the SQL syntax
// $sql2 is what we will use to fuel our while loop statement below
$sql2 = mysql_query("SELECT * FROM Product WHERE Name_of_Product LIKE '$varN22' or 
Adminid LIKE '$varN22' or Price LIKE '$varN22' ORDER BY Adminid ASC $limit"); 
//////////////////////////////// END Pagination Logic ////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////// Pagination Display Setup /////////////////////////////////////////////////////////////////////
$paginationDisplay = 1; // Initialize the pagination output variable
// This code runs only if the last page variable is ot equal to 1, if it is only 1 page we require no paginated links to display
if ($lastPage != "1"){
    // This shows the user what page they are on, and the total number of pages
    $paginationDisplay .= 'Page <strong>' . $pn . '</strong> of ' . $lastPage. '&nbsp;  &nbsp;  &nbsp; ';
    // If we are not on page 1 we can place the Back button
    if ($pn != 1) {////echo "<a href='Gallery.php?page=".($page-1)."' class='btn btn-danger'>Previous</a>";
        $previous = $pn - 1;
        $paginationDisplay .=  '&nbsp;  <a href="' . $_SERVER['Gallery2.php'] . '?pn=' . $previous . '"> <button type="button" class="btn btn-danger"> Back </button></a> ';
		echo $paginationDisplay;
    }
    // Lay in the clickable numbers display here between the Back and Next links
    $paginationDisplay .= '<span class="paginationNumbers">' . $centerPages . '</span>';
	echo $paginationDisplay;
    // If we are not on the very last page we can place the Next button
    if ($pn != $lastPage) {
        $nextPage = $pn + 1;
        $paginationDisplay .=  '&nbsp;  <a href="' . $_SERVER['Gallery2.php'] . '?pn=' . $nextPage . '"> <button type="button" class="btn btn-danger">Next</button></a> ';
		echo $paginationDisplay;
    }
}
///////////////////////////////////// END Pagination Display Setup ///////////////////////////////////////////////////////////////////////////
// Build the Output Section Here
$outputList = "SELECT * FROM Product WHERE Name_of_Product LIKE '$varN22' or 
Adminid LIKE '$varN22' or Price LIKE '$varN22'";#
$rowg[0]="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID of product";
$rowg[1]="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;img1";
$rowg[2]="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;img2";
$rowg[3]="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;img3";
$rowg[4]="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name_of_Product";
$rowg[5]="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price";

echo '<br>';
if($_SESSION["fg"]=="1"){
echo '<div align="center"><font color ="black" style="font-size: 10pt"> Your Details </div>';
}


while($row = mysql_fetch_array($sql2)){

for($u=0; $u<6; $u++)
{
	
	$ur=$row['Adminid'];
echo '<div align="center"><font color ="black" style="font-size: 10pt">' .$rowg[$u]. 
"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
 .$row[$u]."</font></div></td></tr><tr><td>";
 
}

} // close while loop

	
if (!isset($_SESSION["lghj"]) && $_SESSION["fg"]=="1" || $_SESSION["lghj"]!="Gallery2" && $_SESSION["fg"]=="1"){
echo '<div align="center"><form method="POST" action="Gallery2.php">
<input type="submit" name="Update_Details_Delete" value="UPDATE Details or Delete"></input>
</form></div><br>';

   	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Update_Details_Delete'])) 
	{
	$_SESSION["lghj"]="Gallery2";
	echo '<meta http-equiv="refresh" content="0; url=Gallery2.php">';
}
}		
if (!isset($_SESSION["lghj"])){}
elseif (isset($_SESSION["lghj"])){
if($_SESSION["lghj"]=="Gallery2" && $_SESSION["fg"]=="1")
{
	
echo '



&nbsp;&nbsp;&nbsp;<font color ="black" style="font-size: 10pt"> Please enter ID of Product<br>
&nbsp;&nbsp;&nbsp;
<input type="number"  name="Adminid" size="50" maxlength="50" value="'.$ur.'"></input>
</p>
<p>
&nbsp;&nbsp;&nbsp;<font color ="black" style="font-size: 10pt"> Please enter img1<br>
&nbsp;&nbsp;&nbsp;
<input type="text"  name="img1" size="50" maxlength="50"></input>
</p>
<p>
<p>
&nbsp;&nbsp;&nbsp;<font color ="black" style="font-size: 10pt"> Please enter img2<br>
&nbsp;&nbsp;&nbsp;
<input type="text"  name="img2" size="50" maxlength="50"></input>
</p>
<p>
&nbsp;&nbsp;&nbsp;<font color ="black" style="font-size: 10pt"> Please enter img3<br>
&nbsp;&nbsp;&nbsp;
<input type="text"  name="img3" size="50" maxlength="50"></input>
</p>
<p>
&nbsp;&nbsp;&nbsp;<font color ="black" style="font-size: 10pt"> Please enter Name_of_Product<br>
&nbsp;&nbsp;&nbsp;
<input type="text"  name="Name_of_Product" size="50" maxlength="500"></input>
</p>
<p>
&nbsp;&nbsp;&nbsp;<font color ="black" style="font-size: 10pt"> Please enter Price of Product<br>
&nbsp;&nbsp;&nbsp;
<input type="text"  name="Price" size="20" maxlength="20"></input>
</p>
<br>
<p>
&nbsp;&nbsp;&nbsp;<font color ="black" style="font-size: 10pt"> If delete type Yes<br>
&nbsp;&nbsp;&nbsp;
<input type="text"  name="Deletes" size="50" maxlength="500"></input>
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
	$varN7 = $_POST["Adminid"];
	
	$dlin7=strlen($varN7);
	
/* password 5 */
//echo $row[4]." <br> "; 
///////////

	}

         	if ($_SERVER["REQUEST_METHOD"] == "POST") 
				
			
	{
	$df=0;$gh=0;
	    
	    $cond = mysqli_connect($mysql_host,$mysql_username,$mysql_password,$mysql_database);


	
		$varN7 = $_POST["Adminid"];
		$varN8 = mysqli_real_escape_string($cond, $_POST["img1"]);
        $varN4 = mysqli_real_escape_string($cond, $_POST["img2"]);	
        $varN5 = mysqli_real_escape_string($cond, $_POST["img3"]);
        $varN6 = mysqli_real_escape_string($cond, $_POST["Name_of_Product"]);
		$varN9 = mysqli_real_escape_string($cond, $_POST["Deletes"]);
		$varN10 = mysqli_real_escape_string($cond, $_POST["Price"]);
		$i=0; $add;$h=0;$addg=" ";
        
		$varN4 = '<img src="'.$varN4.'" width="422" height="344" hspace="15" vspace="15">';
		$varN5 = '<img src="'.$varN5.'" width="422" height="344" hspace="15" vspace="15">';
		$varN8 = '<img src="'.$varN8.'" width="422" height="344" hspace="15" vspace="15">';

		
$dlin8=strlen($varN8);		
$dlin2=strlen($varN2);
$dlin3=strlen($varN3);$dlin4=strlen($varN4);
$dlin5=strlen($varN5);$dlin6=strlen($varN6);
$dlin9=strlen($varN9);
$dlin10=strlen($varN10);
	
	if($df==0){		
if(is_numeric($varN7)){
if($dlin7>0)
{
$dfe=$_SESSION["lj"];

$sql8t1= "Adminid ='$varN7'";
$sql8t2 = "Adminid ='$varN7'";
$sql8t3 = "Adminid ='$varN7'";
$sql8t4 = "Adminid ='$varN7'";
$sql8t5 = "Adminid ='$varN7'";

if($dlin8>63)
{

$sql8t2 = "img1 ='$varN8'";
}

if($dlin4>63)
{

$sql8t3= "img2 ='$varN4'";

}

if($dlin5>63)
{

$sql8t4 = "img3 ='$varN5'";

}

if($dlin6>0)
{

$sql8t1 = "Name_of_Product = '$varN6'";
}

if($dlin10>0)
{

$sql8t5 = "Price = '$varN10'";
}

$sql3 = "DELETE FROM Product WHERE Adminid ='$varN7'";


if ($varN9!="Yes")
{		

$sql8 = "
update Product
set $sql8t1 
where Adminid ='$varN7'
";

$sql7 = "
update Product
set $sql8t2
where Adminid ='$varN7'
";

$sql6 = "
update Product
set $sql8t3
where Adminid ='$varN7'
";

$sql5 = "
update Product
set $sql8t4
where Adminid ='$varN7'
";

$sql10 = "
update Product
set $sql8t5
where Adminid ='$varN7'
";
}




}
}
/*
Product` (`Adminid`,`img2`,`img3`,`Name_of_Product`,`password`,`admin`) VALUES
   					   ('20101234'  ,'Brian'   , "O'Driscoll", 'Brian@cctstudent.ie','1111'    ,0),
	$varN1 = $_POST["login"];
		$varN2 = $_POST["pass1"];
        $varN3 = $_POST["pass2"];
        $varN4 = $_POST["img2"];	
        $varN5 = $_POST["img3"];
        $varN6 = $_POST["Name_of_Product"];	
		*/

if($dlin7>0 && is_numeric($varN7))
{
if ($varN9!="Yes")
{		
$items = $dbConnection->prepare("$sql8");
$items->execute();
$items = $dbConnection->prepare("$sql7");
$items->execute();
$items = $dbConnection->prepare("$sql6");
$items->execute();
$items = $dbConnection->prepare("$sql5");
$items->execute();
$items = $dbConnection->prepare("$sql10");
$items->execute();
}
if ($varN9=="Yes")
{	
$items = $dbConnection->prepare("$sql3");
$items->execute();
}
$asd=1;
}



		if($dlin7==0 && !is_numeric($varN7))
		{echo '<font color="#E2000D" style="font-size: 10pt">
		&nbsp;&nbsp;  Please, try fill our UPDATE form again!!! </font>';$as=1;} 
		if (!is_numeric($varN7))
		{
		echo '<font color="#E2000D" style="font-size: 10pt">
		&nbsp;&nbsp;  Please, try fill our UPDATE form again!!! Must be numbers </font>';$as=1;
			
		}
		//////
if($dlin7>0 && is_numeric($varN7))
{
//session
//echo  $row[0]." <br> "; 
$as=1;
if ($varN9!="Yes")
{
$_SESSION["lfg"]="You successful Update";
}
if ($varN9=="Yes")
{
$_SESSION["lfg"]="You successful Delete";
}
 echo '<meta http-equiv="refresh" content="0; url=Gallery2.php">';
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
			&nbsp;<font style="font-size: 22pt">  </font>
	   </div>
        <div id="side_bar_2" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px; 
		padding-top: 1px; padding-bottom: 1px">
        <!--Form -->
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<table width="197" height="150" border="1" bgcolor="#C0C0C0" style="border-color: #C0C0C0" align="center">
		<tr> <td>
		<br>
		<form method="POST" action="Gallery2.php">
<?php
if(isset($_SESSION["lg"]) && isset($_SESSION["lj"]))
{
echo '<div align="center">
<font color green style="font-size:15pt">';if($_SESSION["fg"]=="1"){echo "Admin <br>";}else{echo "USER <br>";} 
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
			<script>
  <?php echo json_encode($data); ?>;
</script>
</td></tr>
</table>

		
		</div>
						<div id="footer" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right:
						1px; padding-top: 1px; padding-bottom: 1px"><br>
						
					<?php 		if(isset($_SESSION["lg"]) && $_SESSION["fg"]=="1"){
	echo'&nbsp;&nbsp; <marquee> Created by Jurijus Pacalovas  </marquee> <br>
					&nbsp;&nbsp;'; }?>
						</div>
			<br><br>
<?php
// Assuming session is already started
$uri = md5($_SERVER['REQUEST_URI']);
$exp = 3; // 3 seconds
$hash = $uri .'|'. time();
if (!isset($_SESSION['ddos'])) {
    $_SESSION['ddos'] = $hash;
}

list($_uri, $_exp) = explode('|', $_SESSION['ddos']);
if ($_uri == $uri && time() - $_exp < $exp) {
    header('HTTP/1.1 503 Service Unavailable');
    // die('Easy!');
    die;
}

// Save last request
$_SESSION['ddos'] = $hash;
?>
			</body>
</html> 