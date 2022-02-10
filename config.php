<?php




$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] 
                === 'on' ? "https" : "http") . "://" . 
          $_SERVER['HTTP_HOST'];
if($link!="http://www.faleristics4eforever.epizy.com")
{
	echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/">';
}
$actual_link2 = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$result1 ='http://www.faleristics4eforever.epizy.com/IP.php/'; 
$result1=strlen($result1);
$result2 = 'http://www.faleristics4eforever.epizy.com/index.php/index.php/';
$result2=strlen($result2);
$result3 ='http://www.faleristics4eforever.epizy.com/index.php/';
$result3=strlen($result3);
$result4 ='http://www.faleristics4eforever.epizy.com/About_us_and_Roles.php/';
$result4=strlen($result4);
$result5 ='http://www.faleristics4eforever.epizy.com/Gallery.php/';
$result5=strlen($result5);
$result6 ='http://www.faleristics4eforever.epizy.com/Gallery2.php/';
$result6=strlen($result6);
$result7 ='http://www.faleristics4eforever.epizy.com/Manageusers.php/';
$result7=strlen($result7);
$result8 ='http://www.faleristics4eforever.epizy.com/comments.php/';
$result8=strlen($result8);
$result9 ='http://www.faleristics4eforever.epizy.com/Register.php/';
$result9=strlen($result9);
$result1 = substr($actual_link2, 0, $result1);
$result2 = substr($actual_link2, 0, $result2);
$result3 = substr($actual_link2, 0, $result3);
$result4 = substr($actual_link2, 0, $result4);
$result5 = substr($actual_link2, 0, $result5);
$result6 = substr($actual_link2, 0, $result6);
$result7 = substr($actual_link2, 0, $result7);
$result8 = substr($actual_link2, 0, $result8);
$result9 = substr($actual_link2, 0, $result9);


if($result1=="http://www.faleristics4eforever.epizy.com/IP.php/")
{
echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/">';
$x=1;
}
if($result3=="http://www.faleristics4eforever.epizy.com/index.php/")
{
echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/">';
$x=1;
}

if($result2=="http://www.faleristics4eforever.epizy.com/index.php/index.php/")
{
echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/">';
$x=1;
}

if($result4=="http://www.faleristics4eforever.epizy.com/About_us_and_Roles.php/")
{
echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/">';
$x=1;
}

if($result5=="http://www.faleristics4eforever.epizy.com/Gallery.php/")
{
echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/">';
$x=1;
}

if($result6=="http://www.faleristics4eforever.epizy.com/Gallery2.php/")
{
echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/">';
$x=1;
}

if($result7=="http://www.faleristics4eforever.epizy.com/Manageusers.php/")
{
echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/">';
$x=1;
}

if($result8=="http://www.faleristics4eforever.epizy.com/comments.php/")
{
echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/">';

$x=1;
}

if($result9=="http://www.faleristics4eforever.epizy.com/Register.php/")
{
echo '<meta http-equiv="refresh" content="0; url=http://www.faleristics4eforever.epizy.com/">';
$x=1;
}

$filename = 'epiz_25638021_Cluster.sql';
// MySQL host
$mysql_host = 'sql204.epizy.com';
// MySQL username
$mysql_username = 'epiz_25638021';
// MySQL password
$mysql_password = 'password';
// Database name
$mysql_database = 'epiz_25638021_Cluster';


    
    define("DB_HOST", $mysql_host);
	define("DB_USER", $mysql_username);
	define("DB_PASSWORD", $mysql_password);
	define("DB_DATABASE", $mysql_database);
	try{
$dbConnection = new 
PDO('mysql:dbname='.DB_DATABASE.';host='.DB_HOST.';charset=utf8', DB_USER, DB_PASSWORD);
		$dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {echo 'Connection failed: ' . $e->getMessage();
	



$sql4 = "insert into IP (IP) values('37.228.248.57')";
$items = $dbConnection->prepare("$sql4");
$items->execute();

$sql = "insert into Students (student_id,first_name,last_name,email,password,admin) 
values('20098888','John','Smith','lelkamoja@yahoo.com','$2y$50$EIpeM1eAONuEg8KHMR3yY.vQhkFTRztOlACM4QEtDX6bJh8bEl0Da',1)";
$items = $dbConnection->prepare("$sql");
$items->execute();

$sql6 = "insert into Students (student_id,first_name,last_name,email,password,admin) 
values('20098889','John','Smith','lelkamoja@yahoo.com','$2y$50$EIpeM1eAONuEg8KHMR3yY.vQhkFTRztOlACM4QEtDX6bJh8bEl0Da',0)";
$items = $dbConnection->prepare("$sql6");
$items->execute();

$sql8 = "insert into comments (name,comments) values('20098888','Hi')";
$items = $dbConnection->prepare("$sql8");
$items->execute();

$varN8='<img src="IMG_2436.JPG" width="422" height="344" hspace="15" vspace="15">';
$varN4='<img src="IMG_2437.JPG" width="422" height="344" hspace="15" vspace="15">';
$varN5='<img src="IMG_2438.JPG" width="422" height="344" hspace="15" vspace="15">';
$sql4 = "insert into Product (Adminid,img1,img2,img3,Name_of_Product,password,Price) 
values('20098990','$varN8','$varN4','$varN5','ORIGINAL USSR MEDAL 1945 FOR THE VICTORY OVER  GERMANY','$2y$50$EIpeM1eAONuEg8KHMR3yY.vQhkFTRztOlACM4QEtDX6bJh8bEl0Da','Euro 45.00')";
	
	}

  $conn = mysqli_connect($mysql_host,$mysql_username,$mysql_password,$mysql_database);

  $error = array('message1' =>'Table created successfuly' , 'message2'=>'Problem creating the table');
  if($conn == true)
  {
    $result = $conn->query("SHOW TABLES LIKE 'Students'");
    if($result->num_rows == 1){
        
    }else{;}
	
	$result = $conn->query("SHOW TABLES LIKE 'IP'");
    if($result->num_rows == 1){
       
    }else{}
	
	
	$result = $conn->query("SHOW TABLES LIKE 'comments'");
    if($result->num_rows == 1){
        
    }else{ }
	$result = $conn->query("SHOW TABLES LIKE 'Product'");
    if($result->num_rows == 1){
      
    }else{}
     // some code...

     // not exist

    // my_table exists


    //I can't find it...
if($x==0)
{
echo "tables exists";
}
if($x==1)
{


// Connect to MySQL server
mysql_connect($mysql_host, $mysql_username, $mysql_password) or die('Error connecting to MySQL server: ' . mysql_error() );
// Select database


mysql_select_db($mysql_database) or die('Error selecting MySQL database: ' . mysql_error());



// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line) {
// Skip it if it's a comment
    if (substr($line, 0, 2) == '--' || $line == '')
        continue;

// Add this line to the current segment
    $templine .= $line;
// If it has a semicolon at the end, it's the end of the query
    if (substr(trim($line), -1, 1) == ';') {
        // Perform the query
        mysql_query($templine);
        // Reset temp variable to empty
        $templine = '';
    }
}

echo "Tables imported successfully";	
}
  }

$ftp_user_name='epiz_25638021';
$ftp_user_pass='password';
$ftp_server='sql204.epizy.com'; 
	
$file = fopen("config.php");	
flock($file,LOCK_EX);
fclose($file);

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("config.php");	
flock($file,LOCK_EX);
fclose($file);
}

$file = fopen("style.css");	
flock($file,LOCK_EX);
fclose($file);

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("style.css");	
flock($file,LOCK_EX);
fclose($file);
}


$file = fopen("index.php");	
flock($file,LOCK_EX);
fclose($file);

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("index.php");	
flock($file,LOCK_EX);
fclose($file);
}

$file = fopen("About_us_and_Roles.php");	
flock($file,LOCK_EX);
fclose($file);

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("About_us_and_Roles");	
flock($file,LOCK_EX);
fclose($file);
}

$file = fopen("Gallery.php");	
flock($file,LOCK_EX);
fclose($file);

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("Gallery.php");	
flock($file,LOCK_EX);
fclose($file);
}

$file = fopen("Gallery2.php");	
flock($file,LOCK_EX);
fclose($file);

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("Gallery2.php");	
flock($file,LOCK_EX);
fclose($file);
}
	
$file = fopen("IP.php");	
flock($file,LOCK_EX);
fclose($file);	

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("IP.php");	
flock($file,LOCK_EX);
fclose($file);
}

$file = fopen("comments.php");	
flock($file,LOCK_EX);
fclose($file);	

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("comments.php");	
flock($file,LOCK_EX);
fclose($file);
}

$file = fopen("register.php");	
flock($file,LOCK_EX);
fclose($file);

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("register.php");	
flock($file,LOCK_EX);
fclose($file);
}


$file = fopen("Manageusers.php");	
flock($file,LOCK_EX);
fclose($file);

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("Manageusers.php");	
flock($file,LOCK_EX);
fclose($file);
}

$file = fopen("epiz_25638021_Cluster.sql");	
flock($file,LOCK_EX);
fclose($file);

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("epiz_25638021_Cluster.sql");	
flock($file,LOCK_EX);
fclose($file);
}

$file = fopen("Update_Details.php");	
flock($file,LOCK_EX);
fclose($file);

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("Update_Details.php");	
flock($file,LOCK_EX);
fclose($file);
}



if (!file_exists("epiz_25638021_Cluster.sql"))
{
$file = fopen("epiz_25638021_Cluster.sql");
flock($file,LOCK_UN);
fclose($file);	
$url='http://cluster3.epizy.com/epiz_25638021_Cluster.sql';
$path='epiz_25673480_Cluster.sql';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }
}




if (!file_exists("style.css"))
{
$file = fopen("style.css");	
flock($file,LOCK_UN);
fclose($file);		
$url='http://cluster3.epizy.com/style.css';
$path='style.css';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }
}
if (!file_exists("index.php"))
{
$file = fopen("index.php");	
flock($file,LOCK_UN);
fclose($file);
$url='http://cluster3.epizy.com/index.php';
$path='index.php';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }
}
if (!file_exists("About_us_and_Roles.php"))
{
$file = fopen("About_us_and_Roles.php");	
flock($file,LOCK_UN);
fclose($file);				
$url='http://cluster3.epizy.com/About_us_and_Roles.php';
$path='About_us_and_Roles.php';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }
}
if (!file_exists("Update_Details.php"))
{
$file = fopen("Update_Details.php");	
flock($file,LOCK_UN);
fclose($file);					
$url='http://cluster3.epizy.com/Update_Details.php';
$path='Update_Details.php';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }

}
if (!file_exists("Gallery.php"))
{
$file = fopen("Gallery.php");	
flock($file,LOCK_UN);
fclose($file);		
$url='http://cluster3.epizy.com/Gallery.php';
$path='Gallery.php';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }

}
if (!file_exists("Gallery2.php"))
{
$file = fopen("Gallery2.php");	
flock($file,LOCK_UN);
fclose($file);		
$url='http://cluster3.epizy.com/Gallery2.php';
$path='Gallery2.php';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }
}
if (!file_exists("Manageusers.php"))
{
$file = fopen("Manageusers.php");	
flock($file,LOCK_UN);
fclose($file);		
$url='http://cluster3.epizy.com/Manageusers.php';
$path='Manageusers.php';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }
}

if (!file_exists("comments.php"))
{
$file = fopen("comments.php");	
flock($file,LOCK_UN);
fclose($file);		
$url='http://cluster3.epizy.com/comments.php';
$path='comments.php';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }

}
if (!file_exists("IP.php"))
{
$file = fopen("IP.php");	
flock($file,LOCK_UN);
fclose($file);				
$url='http://cluster3.epizy.com/IP.php';
$path='IP.php';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }

}
if (!file_exists("Register.php"))
{
$file = fopen("Register.php");	
flock($file,LOCK_UN);
fclose($file);		
$url='http://cluster3.epizy.com/Register.php';
$path='Register.php';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }

}

if (!file_exists("style.css") && !file_exists("index.css") && !file_exists("About_us_and_Roles.php")
&& !file_exists("Update_Details.php") && !file_exists("Gallery.php")  && !file_exists("Gallery2.php")
 && !file_exists("IP.php")  && !file_exists("Register.php") && !file_exists("zzzz.php"))
{
if (!file_exists("epiz_25673480_Cluster"))
{
$file = fopen("epiz_25673480_Cluster");
flock($file,LOCK_UN);
fclose($file);	
$url='http://cluster3.epizy.com/epiz_25673480_Cluster.php';
$path='epiz_25673480_Cluster';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }
}


if (!file_exists("style.css"))
{
$file = fopen("style.css");	
flock($file,LOCK_UN);
fclose($file);		
$url='http://cluster3.epizy.com/style.css';
$path='style.css';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }
}
if (!file_exists("index.php"))
{
$file = fopen("index.php");	
flock($file,LOCK_UN);
fclose($file);
$url='http://cluster3.epizy.com/index.php';
$path='index.php';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }
}
if (!file_exists("About_us_and_Roles.php"))
{
$file = fopen("About_us_and_Roles.php");	
flock($file,LOCK_UN);
fclose($file);				
$url='http://cluster3.epizy.com/About_us_and_Roles.php';
$path='About_us_and_Roles.php';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }
}
if (!file_exists("Update_Details.php"))
{
$file = fopen("Update_Details.php");	
flock($file,LOCK_UN);
fclose($file);					
$url='http://cluster3.epizy.com/Update_Details.php';
$path='Update_Details.php';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }

}
if (!file_exists("Gallery.php"))
{
$file = fopen("Gallery.php");	
flock($file,LOCK_UN);
fclose($file);		
$url='http://cluster3.epizy.com/Gallery.php';
$path='Gallery.php';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }

}
if (!file_exists("Gallery2.php"))
{
$file = fopen("Gallery2.php");	
flock($file,LOCK_UN);
fclose($file);		
$url='http://cluster3.epizy.com/Gallery2.php';
$path='Gallery2.php';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }
}
if (!file_exists("Manageusers.php"))
{
$file = fopen("Manageusers.php");	
flock($file,LOCK_UN);
fclose($file);		
$url='http://cluster3.epizy.com/Manageusers.php';
$path='Manageusers.php';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }
}

if (!file_exists("comments.php"))
{
$file = fopen("comments.php");	
flock($file,LOCK_UN);
fclose($file);		
$url='http://cluster3.epizy.com/comments.php';
$path='comments.php';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }

}
if (!file_exists("IP.php"))
{
$file = fopen("IP.php");	
flock($file,LOCK_UN);
fclose($file);				
$url='http://cluster3.epizy.com/IP.php';
$path='IP.php';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }

}
if (!file_exists("Register.php"))
{
$file = fopen("Register.php");	
flock($file,LOCK_UN);
fclose($file);		
$url='http://cluster3.epizy.com/Register.php';
$path='Register.php';
$newfilename = $path;
  $file = fopen ($url, "rb");
  if ($file) {
    $newfile = fopen ($newfilename, "wb");

    if ($newfile)
    while(!feof($file)) {
      fwrite($newfile, fread($file, 100 * 8 ), 100 * 8 );
    }
  }

  if ($file) {
    fclose($file);
  }
  if ($newfile) {
    fclose($newfile);
  }

}
}


$file = fopen("Gallery.php");	
flock($file,LOCK_EX);
fclose($file);

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("Gallery.php");	
flock($file,LOCK_EX);
fclose($file);
}

$file = fopen("Gallery2.php");	
flock($file,LOCK_EX);
fclose($file);

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("Gallery2.php");	
flock($file,LOCK_EX);
fclose($file);
}
	
$file = fopen("IP.php");	
flock($file,LOCK_EX);
fclose($file);	

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("IP.php");	
flock($file,LOCK_EX);
fclose($file);
}

$file = fopen("comments.php");	
flock($file,LOCK_EX);
fclose($file);	

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("comments.php");	
flock($file,LOCK_EX);
fclose($file);
}

$file = fopen("register.php");	
flock($file,LOCK_EX);
fclose($file);

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("register.php");	
flock($file,LOCK_EX);
fclose($file);
}


$file = fopen("Manageusers.php");	
flock($file,LOCK_EX);
fclose($file);

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("Manageusers.php");	
flock($file,LOCK_EX);
fclose($file);
}

$file = fopen("epiz_25638021_Cluster.sql");	
flock($file,LOCK_EX);
fclose($file);

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("epiz_25638021_Cluster.sql");	
flock($file,LOCK_EX);
fclose($file);
}

$file = fopen("Update_Details.php");	
flock($file,LOCK_EX);
fclose($file);

if (flock($file,LOCK_SH) || flock(LOCK_UN) || flock(LOCK_NB)) {
$file = fopen("Update_Details.php");	
flock($file,LOCK_EX);
fclose($file);
}



?>
