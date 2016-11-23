<html>

	<head>
		<title>Students information</title>
		
		
	</head>
	<br>
	
	<body background="images/bdg.jpg">
	
	
	<h1><b><center><u>Class Six(6) Students</u></center></b></h1>
	<table width='100%' align='center' border='20%' bgcolor='#00ffff' BORDERCOLOR=#0099ff>
	
	<tr  bgcolor='#0099ff'>
	
	<th>Roll No</th>
	<th>Students Name</th>
	<th>Mobile No</th>
	<th>Class</th>
	<th>Exam & <br>Result-></th>
	<th>Bangla</th>
	<th>English</th>
	<th>Mathematics</th>
	<th>Science</th>
	<th>Religion</th>
	<th>Information<br> technology</th>
	<th>Art and Crafts</th>
	<th>Bangladesh<br> Studies</th>
	<th>Physical<br> Education</th>
	<th>Agriculture</th>
	
	</tr>
	
	
	<?php
	mysql_connect("localhost","root","");
	mysql_select_db("department");
	
	$query="select * from students";
	$run=mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
		$roll=$row[0];
		$name=$row[1];
		$mobile=$row[2];
		$class=$row[3];
		$exam=$row[4];
		$bangla=$row[5];
		$english=$row[6];
		$math=$row[7];
		$science=$row[8];
		$islam=$row[9];
		$information=$row[10];
		$art=$row[11];
		$bangladesh_studies=$row[12];
		$physical_education=$row[13];
		$Agriculture=$row[14];
		
	?>
	<tr align=center>
	<td><?php echo $roll; ?></td>
	<td><?php echo $name; ?></td>
	<td><?php echo $mobile; ?></td>
	<td><?php echo $class; ?></td>
	<td><?php echo $exam; ?></td>
	<td><?php echo $bangla; ?></td>
	<td><?php echo $english; ?></td>
	<td><?php echo $math; ?></td>
	<td><?php echo $science; ?></td>
	<td><?php echo $islam; ?></td>
	<td><?php echo $information; ?></td>
	<td><?php echo $art; ?></td>
	<td><?php echo $bangladesh_studies; ?></td>
	<td><?php echo $physical_education; ?></td>
	<td><?php echo $Agriculture; ?></td>
	</tr>
	<?php } ?>
	</table>
	
	</body>


        
      </p>
  <p align="center">&nbsp;</p>
      <p align="center"> 
	  <a href="admin/index.php"><img border="0" src="admin/images/cooltext457954941.png" 
	   /></a>
	  <a href="admin/classes.php"><img border="0"
	  src="admin/images/cooltext457951615.png" 
	   /></a></p>
      <center>
        <a href="admin/about.php"><img src="admin/images/ahmad.jpg" alt="Developed by Tanvir Shaikat"  /></a>
      </center>
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>