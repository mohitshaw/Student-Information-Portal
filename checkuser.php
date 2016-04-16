

<?php
$q = ($_GET['q']);
$con = mysqli_connect('localhost','root','root','group9');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"group9");
$sql="SELECT * FROM student WHERE username = '$q'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)==0)
  echo "Username available";
else
  echo " $q Username not available .Please try a different one";

mysqli_close($con);
?>
