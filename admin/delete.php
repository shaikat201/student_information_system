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



<table align="center" cellpadding="0" bgcolor="#00FFFF" width="98%" border="0"BORDERCOLOR=#0099ff>
  <tr>
    <td><h1 align="center" class="heading"><u>Delete data:</h1>
  <p align="center">
    <?php 
	 	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("department",$link) or die ("Cannot select the database!");
	 $query="SELECT * FROM students";
		
		  $resource=mysql_query($query,$link);
		  echo "
		<table width='100%' align='center' border='20%' bgcolor='#00FFFF' BORDERCOLOR=#0099ff>
		
			<tr bgcolor='#0099ff'>
			
		<th><b>Roll No</b></th> 
		<th><b>Name</b></th>
		<th><b>Mobile No</b></th>
		<th><b>Class</b></th>
		<th><b>Exam</b></th>
		<th><b>Bangla</b></th> 
		<th><b>English</b></th>
		<th><b>Mathematics</b></th>
		<th><b>Science</b></th>
		<th><b>Religion</b></th>
		<th><b>Information<br> technology</b></th> 
		<th><b>Art and Crafts</b></th>
		<th><b>Bangladesh<br> Studies</b></th>
		<th><b>Physical<br> Education</b></th>
		<th><b>Agriculture</b></th>
		<th><b>Action</b></th>
			</tr>

		";
while($result=mysql_fetch_array($resource))
	{ 
	echo 
	"<tr align=center>
	<td>".$result[0]."</td>
	<td>".$result[1]."</td>
	<td>".$result[2]."</td>
	<td>".$result[3]."</td>
	<td>".$result[4]."</td>
	<td>".$result[5]."</td>
	<td>".$result[6]."</td>
	<td>".$result[7]."</td>
	<td>".$result[8]."</td>
	<td>".$result[9]."</td>
	<td>".$result[10]."</td>
	<td>".$result[11]."</td>
	<td>".$result[12]."</td>
	<td>".$result[13]."</td>
	<td>".$result[14]."</td>
	<td>
	
	<a href=\"delete2.php?roll=".$result[0]."\"><img border=\"0\" src=\"images/cooltext457952800.png\" onmouseover=\"this.src='images/cooltext457952800MouseOver.png';\" onmouseout=\"this.src='images/cooltext457952800.png';\" /></a>
	</td></tr>";
	} echo "</table>";
	 ?>

      </p>
  <p align="center">&nbsp;</p>
      <p align="center"><a href="./"><img border="0" src="images/cooltext457951462.png" /></a></p>
      
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>