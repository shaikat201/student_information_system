<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Control Panel :: Student Information Panel:: Institute of Information Technology, BZU</title>
<style type="text/css">
<!--
.heading {
	color: #0099ff;
	font-family: "Comic Sans MS", cursive;
}
.options {
	font-family: "Comic Sans MS", cursive;
	font-size: 16px;
	font-style: oblique;
	color: #F93;
}
-->
</style>
</head>
<body background="images/bdg.jpg">

<br />
<br />
<br />
<table align="center" cellpadding="0" bgcolor="#00ffff" width="70%" border="5" BORDERCOLOR=#0099ff>
  <tr>
    <td><h1 align="center" class="heading">Modified Successfully:</h1>
  <p align="center">
    <?php 
	 $roll=$_REQUEST['roll'];
	 $name=$_REQUEST['name']; 
	 $mobile=$_REQUEST['mobile'];
	 $class=$_REQUEST['class'];
	 $exam=$_REQUEST['exam']; 
	 $bangla=$_REQUEST['bangla'];
	 $english=$_REQUEST['english']; 
	 $math=$_REQUEST['math'];
	 $science=$_REQUEST['science'];
	 $islam=$_REQUEST['islam'];
	 $information=$_REQUEST['information'];
	 $art=$_REQUEST['art']; 
	 $bangladesh_studies=$_REQUEST['bangladesh_studies'];
	 $physical_education=$_REQUEST['physical_education'];
	 $Agriculture=$_REQUEST['Agriculture'];
	 
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("department",$link) or die ("Cannot select the database!");
	 $query="UPDATE students SET 
	 roll=	'".$roll."',
	 name='".$name."',
	 mobile='".$mobile."',
	 class=	'".$class."',
	 exam='".$exam."',
	 bangla='".$bangla."',
	 english='".$english."',
	 math='".$math."',
	 science='".$science."',
	 islam=	'".$islam."',
	 information='".$information."',
	 art='".$art."',
	 bangladesh_studies='".$bangladesh_studies."',
	 physical_education='".$physical_education."',
	 Agriculture='".$Agriculture."' WHERE roll='".$roll."'";
		
		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
		  echo "Record updated successfully!";}
	 ?>

      </p>
      <p align="center"><a href="./"><img border="0" src="images/cooltext457951462.png"/></a><a href="../"><img border="0" src="images/cooltext457951615.png"  /></a></p>
      <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>