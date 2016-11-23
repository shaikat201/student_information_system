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

	
<table align="center" cellpadding="0" bgcolor="#00FFFF" width="50%" border="0" BORDERCOLOR=#0099ff>
  <tr>
    <td><h1 align="center" class="heading"><u>Modify Data:</h1>
  <p align="center">
    <?php 
	 $id=$_REQUEST['roll']; 
	 
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("department",$link) or die ("Cannot select the database!");
	 $query="SELECT * FROM students WHERE roll='".$id."'";
		
		 $resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");
		  $result=mysql_fetch_array($resource);
		  
	 ?>
     <form id="form1" name="form1" method="get" action="modify3.php">
        <table align="center" width="90%" border="5" BORDERCOLOR=#0099ff>
          <tr align="center">
            <td width="129"><strong>Roll No:</strong></td>
            <td width="152">
            <input type="hidden" name="roll" value="<?php echo $result[0] ?>"  />
            <label>
              <input name="roll" type="text" id="textfield" value="<?php echo $result[0] ?>" />
            </label></td>
          </tr>
          <tr align="center">
            <td><strong>Students Name:</strong></td>
            <td><input name="name" type="text" id="textfield2" value="<?php echo $result[1] ?>" /></td>
          </tr>
          <tr align="center">
            <td><strong>Mobile No:</strong></td>
            <td><input type="text" name="mobile" id="textfield3" value="<?php echo $result[2] ?>" /></td>
          </tr>
          <tr align="center">
            <td><strong>Class</strong>:</td>
            <td><input type="text" name="class" id="textfield4" value="<?php echo $result[3] ?>" /></td>
          </tr>
		  <tr align="center">
            <td><strong>Exam</strong>:</td>
            <td><input type="text" name="exam" id="textfield5" value="<?php echo $result[4] ?>" /></td>
          </tr>
		  <tr align="center">
            <td><strong>Bangla</strong>:</td>
            <td><input type="text" name="bangla" id="textfield6" value="<?php echo $result[5] ?>" /></td>
          </tr>
		  <tr align="center">
            <td><strong>English</strong>:</td>
            <td><input type="text" name="english" id="textfield7" value="<?php echo $result[6] ?>" /></td>
          </tr>
		  <tr align="center">
            <td><strong>Mathematics</strong>:</td>
            <td><input type="text" name="math" id="textfield8" value="<?php echo $result[7] ?>" /></td>
          </tr>
		  <tr align="center">
            <td><strong>Science</strong>:</td>
            <td><input type="text" name="science" id="textfield9" value="<?php echo $result[8] ?>" /></td>
          </tr>
		  <tr align="center">
            <td><strong>Islam</strong>:</td>
            <td><input type="text" name="islam" id="textfield10" value="<?php echo $result[9] ?>" /></td>
          </tr>
		  <tr align="center">
            <td><strong>Information</strong>:</td>
            <td><input type="text" name="information" id="textfield11" value="<?php echo $result[10] ?>" /></td>
          </tr>
		  <tr align="center">
            <td><strong>Art & Craft</strong>:</td>
            <td><input type="text" name="art" id="textfield12" value="<?php echo $result[11] ?>" /></td>
          </tr>
		  <tr align="center">
            <td><strong>Bangladesh Studies</strong>:</td>
            <td><input type="text" name="bangladesh_studies" id="textfield13" value="<?php echo $result[12] ?>" /></td>
          </tr>
		  <tr align="center">
            <td><strong>Physical Education</strong>:</td>
            <td><input type="text" name="physical_education" id="textfield14" value="<?php echo $result[13] ?>" /></td>
          </tr>
		  <tr align="center">
            <td><strong>Agriculture</strong>:</td>
            <td><input type="text" name="Agriculture" id="textfield15" value="<?php echo $result[14] ?>" /></td>
          </tr>
        </table>
        <p align="center">
          <label>
            <input type="submit" name="button" id="button" value="Modify" />
          </label>
        </p>
        <p align="center"><img onClick="javascript: history.go(-1)" border="0" src="images/cooltext457951462.png" alt="Go Back" /><a href="./"><img border="0" src="images/cooltext457951615.png" /></a></p>
        
      </form>

      </p>
      <p align="center"><a href="delete.php"><a href="../"></a></p>
      <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>