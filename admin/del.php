<?php
mysql_connect("localhost","root","");
mysql_select_db("department");

$delete_id=$_GET['del'];
$query="delete from students where id='$delete_id'";

if (mysql_query($query)){
	
	echo"<script>window.open('admin/delete.php?deleted=user has been deleted!!!','_self')</script>";
}


?>