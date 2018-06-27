<?php include 'config.php';
	$objConnect = mysqli_connect($host,$user,$password,"user") or die("Error Connect to Database");
//	$strSQL = "SELECT * FROM member WHERE Username = '".mysql_real_escape_string($_POST['txtUsername'])."'
  //	and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";

  $struser = isset($_GET["txtUsername"]) ? $_GET["txtUsername"] : '';
  $strpass = isset($_GET["txtPassword"]) ? $_GET["txtPassword"] : '';
  $strSQL = "SELECT * FROM member WHERE(Username LIKE '.$struser.' AND Password LIKE '.$strpass.')";
	$objQuery = mysqli_query($objConnect, $strSQL) or die ("Error Query [".$strSQL."]");
   $objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
		//	$_SESSION["UserID"] = $objResult["UserID"];
		//	$_SESSION["Status"] = $objResult["Status"];

			//session_write_close();

			if($objResult["Status"] == "ADMIN")
			{
				 include ("admin_page.php");
			}
			else
			{
				include ("user_page.php");
			}
	}

?>
