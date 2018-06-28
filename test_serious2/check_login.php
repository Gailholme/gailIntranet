<?php
	session_start();
	$con = mysqli_connect("localhost","gail","password");
	mysqli_select_db($con, 'user') or die(mysqli_error($con));
	$strSQL = "SELECT * FROM member WHERE Username = '".mysqli_real_escape_string($con,$_POST['txtUsername'])."'
	and Password = '".mysqli_real_escape_string($con,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	$SESSiON['$objResult'];

	if(is_null($objResult))
	{
			echo "Username and Password Incorrect!"; // should change to be alert
	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();

			if($objResult["Status"] == "ADMIN")
			{

				header("location:admin_page.php");
			}
			else
			{
				header("location:user_page.php");
			}
	}
	mysqli_close($con);
?>
