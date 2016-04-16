<?php
session_start();

if(!$_SESSION['username']){

	header('location: admin_login.php');

}
?>
<html>
<head>
	<meta charset="utf-8">
		<title>Admin Panel</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link href="css/bootstrap-social.css" rel="stylesheet">
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<link rel="stylesheet" href="mystyle.css">

</head>
<body>
	

	<nav class="nav navbar-inverse" >
  <div class="container ">
    
     <div class="navbar-header"> 
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
                </button>
                <a class="visible-lg navbar-brand" href="#"></a>
            </div>
			<div class="collapse navbar-collapse" id="nav1" >
			<div class="nav navbar-nav ">
				 <li class="h4"><a href="adminlogout.php" class="btn btn-primary"><font color="white">Logout</font>&nbsp;&nbsp;</a></li>

      
    </div>

  </div>
  </div>

 </nav>
		

	<center><div class="panel panel-primary">
                  <div class="panel-heading"><h1 class="text-center">User Information</h1></div>
              </div></center>

	
	
	<table width="900" align="center" border="10" style="margin-left:140px;">
		<tr bgcolor="green">
			<th>Serial No</th>
			<th>Name</th>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>Contact</th>
			<th>Department</th>
			<th>Registration No</th>
			<th>Roll No</th>
			<th>Semester</th>
			<th>10th(%)</th>
			<th>12th(%)</th>
			<th>CGPA</th>
			<th>Action</th>
			<th>View Details</th>
		</tr>
		<?php
		$link=mysqli_connect("localhost","root","root","group9");
		//mysql_select_db("group9");
		$query = "select * from student";
		$run = mysqli_query($link,$query);

		while($row=mysqli_fetch_array($run))
		{
			$id=$row['id'];
			$fname=$row['fname'];
	        $contact=$row['contact'];
	        $reg_no=$row['reg_no'];
	        $dept=$row['dept'];
	        $roll_no=$row['roll_no'];
	        $sem=$row['sem'];
	        $percent1=$row['percent1'];
			$percent2=$row['percent2'];
			$cgpa=$row['cgpa'];
			$email=$row['email'];
	        $username=$row['username'];
	        $password=$row['password'];
	        $valid = $row['valid'];
		?>

		<tr align='center' >
		<td ><?php echo $id; ?></td>
		<td ><?php echo $fname; ?></td>
		<td ><?php echo $username; ?></td>
		<td ><?php echo $password; ?></td>
		<td ><?php echo $email; ?></td>
		<td ><?php echo $contact; ?></td>
		<td ><?php echo $dept; ?></td>
		<td ><?php echo $reg_no; ?></td>
		<td ><?php echo $roll_no; ?></td>
		<td ><?php echo $sem; ?></td>
		<td ><?php echo $percent1; ?></td>
		<td ><?php echo $percent2; ?></td>
		<td ><?php echo $cgpa; ?></td>
		<td >
			<?php
			if($valid==1)
			{
			?>
				<a href='delete.php?del=<?php echo $id ?>'>Delete</a>
			<?php
			}
			else
			{
				echo "<a href='approveuser.php?id=$id&&valid=$valid'>Approve</a>";
			}
			?>
		</td>
		<td><?php echo "<a href='viewdetails1.php?id=$id'>Details</a>"; ?></td>
		</tr>
		<?php
		}
		?> 
	</table>
	
	<br><br><br><br><br><br><br><br><br><br><br><br>
	<div class="container site-footer-container" >
    <ul class="site-footer-links">
     
        
      <p><font color="white">© National Institute of Technology, Durgapur ® All Rights Reserved </font><span ></p>
      <br/><br/>
           
              <div class="row">
               
              <div class="col-md-1"><li><a href="notice.php" data-ga-click="Footer, go to blog, text:blog"><span>
                    <i class="glyphicon glyphicon-pencil"></i>
                  </span>Notice</a></li></div>
         <div class="col-md-1">
          <li><a href="aboutus.html" data-ga-click="Footer, go to about, text:about"><span>
                    <i class="glyphicon glyphicon-user"></i>
                  </span>About</a></li>
          </div>
         <div class="col-md-1">
        <li><a href="terms.html" data-ga-click="Footer, go to terms, text:terms"><span>
                    <i class="glyphicon glyphicon-asterisk"></i>
                  </span>Terms</a></li>
        </div>
      <div class="col-md-1">
        <li><a href="help.html" data-ga-click="Footer, go to help, text:help">
          <span>
              <i class="glyphicon glyphicon-phone-alt"></i>
          </span>Help
        </a></li>
      </div></br></br>
    </div>
     
  
    </ul>
</div>

</body>
</html>