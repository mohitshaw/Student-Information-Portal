<?php
$link=mysqli_connect('localhost','root','root','group9');
//mysql_select_db('group9');

$id = $_GET['id'];
$valid = $_GET['valid'];

if($valid==0){
	mysqli_query($link,"UPDATE student SET valid=1 WHERE id='$id'");
	header('location: adminpanel2.php?valid=user');	
}

?>