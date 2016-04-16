<?php
mysql_connect('localhost','root','root');
mysql_select_db('group9');

$delete_id = $_GET['del'];

$query = "delete from student where id='$delete_id'";

if(mysql_query($query))
{
	echo "<script>window.open('adminpanel2.php','_self')</script>";	
}

?>