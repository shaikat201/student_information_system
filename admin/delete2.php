<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Information Panel</title>
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
    <td><h1 align="center" class="heading">Deleted Successfully:</h1>
  <p align="center">
    <?php 
	 $id=$_REQUEST['roll']; 
	 
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("department",$link) or die ("Cannot select the database!");
	 $query="DELETE FROM students WHERE roll='".$id."'";
		
		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
		  else
		 {
		  echo "Record ".$id." removed successfully!";}
	 ?>

      </p>
      <p align="center"><a href="delete.php"><img border="0" src="images/cooltext457951462.png"  /><a href="../"></a><a href="./"><img border="0" src="images/cooltext457951615.png"  /></a></p>
      <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>