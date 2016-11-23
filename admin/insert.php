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

<body background="images/bd.jpg">
<table align="center" cellpadding="0" bgcolor="#00ffff" width="50%" border="2px" BORDERCOLOR=#0099ff>
  <tr>
    <td><h1 align="center" class="heading">Insert your information:</h1>
      <p align="center">&nbsp;</p>
      <form id="form1" name="form1" method="get" action="insert2.php">
        <table align="center" width="70%" border="5" BORDERCOLOR=#0099ff>
		
		 <tr align="center">
            <td><strong>Roll No:</strong></td>
            <td><input type="text" name="roll" id="textfield" /></td>
          </tr>
          <tr>
          <tr align="center">
            <td><strong>Name of Student:</strong></td>
            <td width="40%"><label>
              <input type="text" name="name" id="textfield2" />
            </label></td>
          </tr>
          <tr align="center">
            <td><strong>Contact No:</strong></td>
            <td><input type="text" name="mobile" id="textfield3" /></td>
          </tr>
          <tr align="center">
            <td><strong>Class Name:</strong></td>
            <td><input type="text" name="class" id="textfield4" /></td>
          </tr>
		  <tr align="center">
            <td><strong>Exam Name:</strong></td>
            <td><input type="text" name="exam" id="textfield5" /></td>
          </tr>
          <tr align="center">
            <td><strong>Bangla:</strong></td>
            <td><input type="text" name="bangla" id="textfield6" /></td>
          </tr>
		  <tr align="center">
            <td><strong>English:</strong></td>
            <td><input type="text" name="english" id="textfield7" /></td>
          </tr>
		  <tr align="center">
            <td><strong>Mathematics:</strong></td>
            <td><input type="text" name="math" id="textfield8" /></td>
          </tr>
		  <tr align="center">
            <td><strong>Science:</strong></td>
            <td><input type="text" name="science" id="textfield9" /></td>
          </tr>
		  <tr align="center">
            <td><strong>Religion:</strong></td>
            <td><input type="text" name="islam" id="textfield10" /></td>
          </tr>
		  <tr align="center">
            <td><strong>Information Technology:</strong></td>
            <td><input type="text" name="information" id="textfield11" /></td>
          </tr>
		  <tr align="center">
            <td><strong>Art & Craft:</strong></td>
            <td><input type="text" name="art" id="textfield12" /></td>
          </tr>
		  <tr align="center">
            <td><strong>Bangladesh Studies:</strong></td>
            <td><input type="text" name="bangladesh_studies" id="textfield13" /></td>
          </tr>
		   <tr align="center">
            <td><strong>Physical Education:</strong></td>
            <td><input type="text" name="physical_education" id="textfield14" /></td>
          </tr>
		   <tr align="center">
            <td><strong>Agriculture:</strong></td>
            <td><input type="text" name="Agriculture" id="textfield15" /></td>
          </tr>
		  
        </table>
        <p align="center">
          <label>
            <input type="submit" name="button" id="button" value="Submit" />
          </label>
        </p>
        <p align="center"><a href="./"><img border="0" src="images/cooltext457951462.png" alt="Go Back" /></a></p>
      </form>
</td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>