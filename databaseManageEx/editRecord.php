<html> 
<head> 
<title>PHP & MySQL Tutorial</title> 
</head> 
<body>  
<?php include 'config.php';
$objConnect = mysqli_connect($host,$user,$password,$database) or die("Error Connect to Database");
//$objDB = mysql_select_db("registration"); 

//*** Update Condition ***// 
if($_GET["Action"] == "Save") 
{ 
    for($i=1;$i<=$_POST["hdnLine"];$i++) 
    { 
        $strSQL = "UPDATE takes SET "; 
        //$strSQL .="cid = '".$_POST["txtCourseID$i"]."' "; 
        $strSQL .="sect_id = '".$_POST["txtSectID$i"]."' "; 
        $strSQL .=",semester = '".$_POST["txtSemester$i"]."' "; 
        $strSQL .=",year = '".$_POST["txtYear$i"]."' "; 
        $strSQL .=",grade = '".$_POST["txtBuilding$i"]."' "; 
       
        $strSQL .="WHERE cid = '".$_POST["hdnCourseID$i"]."' "; 
        $strSQL .=" and student_id = '".$_POST["hdnStudentID$i"]."' "; 
        $strSQL .=" and sect_id='".$_POST["hdnSectID$i"]."' "; 
        $strSQL .=" and year='".$_POST["hdnYear$i"]."' "; 
        $strSQL .=" and semester= '".$_POST["hdnSemester$i"]."' "; 
        $strSQL .=" and grade= '".$_POST["hdnGrade$i"]."' "; 
         
        //echo $strSQL; 
        $objQuery = mysqli_query($objConnect, $strSQL); 
    } 
    //header("location:$_SERVER[PHP_SELF]"); 
    //exit(); 
} 

$strSQL = "SELECT * FROM takes "; 
$objQuery = mysqli_query($objConnect, $strSQL) or die ("Error Query [".$strSQL."]"); 
?> 
<form name="frmMain" method="post" action="editRecord.php?Action=Save"> 
<table width="600" border="1"> 
  <tr> 
   
    <th width="98"> <div align="center">Student ID </div></th> 
    <th width="20"> <div align="center">Course ID </div></th> 
    <th width="20"> <div align="center">Sect ID </div></th> 
    <th width="59"> <div align="center">Semester </div></th> 
    <th width="20"> <div align="center">Year </div></th> 
    <th width="20"> <div align="center">Grade </div></th> 
  </tr> 
<?php 
$i =0; 
while($objResult = mysqli_fetch_array($objQuery)) 
{ 
    $i = $i + 1; 
?> 
  <tr> 
    <td> 
    <input type="hidden" name="hdnStudentID<?php echo $i;?>" size="10" value="<?php echo $objResult["student_id"];?>"> 
    <? echo $objResult["student_id"];?> 
    </td> 
    <td> 
    <input type="hidden" name="hdnCourseID<?php echo $i;?>" size="10" value="<?php echo $objResult["cid"];?>"> 
    <? echo $objResult["cid"];?> 
    </td> 
    <td><input type="text" name="txtSectID<?php echo $i;?>" size="10" value="<?php echo $objResult["sect_id"];?>"></td> 
    <input type="hidden" name="hdnSectID<?php echo $i;?>" size="10" value="<?php echo $objResult["sect_id"];?>"> 
    <td><input type="text" name="txtSemester<?php echo $i;?>" size="20" value="<?php echo $objResult["semester"];?>"></td> 
    <input type="hidden" name="hdnSemester<?php echo $i;?>" size="10" value="<?php echo $objResult["semester"];?>"> 
    <td><div align="center"><input type="text" name="txtYear<?php echo $i;?>" size="10" value="<?php echo $objResult["year"];?>"></div></td> 
    <input type="hidden" name="hdnYear<?php echo $i;?>" size="10" value="<?php echo $objResult["year"];?>">  
    <td><div align="center"><input type="text" name="txtBuilding<?php echo $i;?>" size="40" value="<?php echo $objResult["grade"];?>"></div></td> 
    <input type="hidden" name="hdnGrade<?php echo $i;?>" size="10" value="<?php echo $objResult["grade"];?>">  
  </tr> 
<?php 
} 
?> 
</table> 
  <input type="submit" name="submit" value="submit"> 
  <input type="hidden" name="hdnLine" value="<?php echo $i;?>"> 
</form> 
<?php 
mysqli_close($objConnect); 
?> 
</body> 
</html>