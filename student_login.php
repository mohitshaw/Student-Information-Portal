<?php
  session_start();
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Student Information System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="mystyle.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet"><script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="mystyle.css">

  </head>
  <body background="photo/NIT-Durgapur_Library.jpg" >
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
      <li class="h4"><a href="index.php" class="btn btn-success"><font color="white">Home </font>&nbsp;&nbsp;</a></li>
    <li class="h4"><a href="student_login.php" class="btn btn-success"><font color=white>Student Login</font>&nbsp;&nbsp;</a></li>
    <li class="h4"><a href="admin_login.php" class="btn btn-success"><font color=white>Administrator Login </font>&nbsp;&nbsp;</a></li>
    <li class="h4"><a href="stu_reg.html" class="btn btn-success"><font color=white>Student Registration </font>&nbsp;&nbsp;</a></li>
    </div>
  
  </div>
  </div>

 </nav>
  
    <div class="vertical-center">
      <div class="container">
        <div class="row">
          <!-- well is for setting the page in middle  search bootstrap/components/well -->
          <div class="col-md-4 col-md-offset-4 well">
                           <div class="panel panel-success">
      <div class="panel-heading"><h2 class="text-center"><h1 class="text-center">Student Login</h1></div>
    </div>
            
            <form method="post">
              <div class="form-group">
                <label>Student account </label>
                <div class="input-group">
                  <!-- this is for user icon search bootstrap/components -->
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                  </span>

                  <input type="text" name="username" class="form-control" placeholder="Your account"/>
                </div>  
              </div>
              <div class="form-group">
                <label>Password</label>
                <div class="input-group">
                  <!-- this is for user icon search bootstrap/components -->
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-lock"></i>
                  </span>
                  <input class="form-control" type="password" name="password" placeholder="your password"/>
                </div>
              </div>
              <div class="form-group">
                <tr><input type="submit" name="submit" value="Login" class="btn btn-success btn-block"/></tr>
                <li class="btn btn-success btn-block"><a href="stu_reg.html"><font color="white">Sign up</font></a></li>
              </div>
            </form>
                  
          </div>      
        </div>>
        
      </div>
  
    </div>

      



<?php
 
  if(isset($_POST['submit']))
  {
    $link=mysqli_connect('localhost','root','root','group9') or die(mysql_error());
 //mysql_select_db('group9') or die(mysql_error());
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username!=''&&$password!='')
    {
        $query=mysqli_query($link,"select * from student where username='$username' and password='$password'");
        if(mysqli_num_rows($query)>0)
        {
          $_SESSION['username']=$username;
        while($res=mysqli_fetch_array($query))
        {
          $fname=$res['fname'];
          $mname=$res['mname'];
          $lname=$res['lname'];
          $contact=$res['contact'];
          $birthday=$res['birthday'];
          $age=$res['age'];
          $gender=$res['gender'];
          $hobbies=$res['hobbies'];
          $reg_no=$res['reg_no'];
          $dept=$res['dept'];
          $roll_no=$res['roll_no'];
          $sem=$res['sem'];
          $percent1=$res['percent1'];
          $percent2=$res['percent2'];
          $cgpa=$res['cgpa'];
          $email=$res['email'];
          $username=$res['username'];
          $password=$res['password'];
          $image=$res['image'];
          $user_valid = $res['valid'];
        }

        if($user_valid==0)
        {
           echo "<script>alert('Pending User Approval !')</script>";
        }
        else
        {
          $count=mysqli_num_rows($query);
            if($count==1)
            {
           
              $_SESSION['fname']=$fname;
              $_SESSION['mname']=$mname;
              $_SESSION['lname']=$lname;
              $_SESSION['contact']=$contact;
              $_SESSION['birthday']=$birthday;
              $_SESSION['age']=$age;
              $_SESSION['gender']=$gender;
              $_SESSION['hobbies']=$hobbies;
              $_SESSION['reg_no']=$reg_no;
              $_SESSION['dept']=$dept;
              $_SESSION['roll_no']=$roll_no;
              $_SESSION['sem']=$sem;
	      $_SESSION['percent1']=$percent1;
	      $_SESSION['percent2']=$percent2;
	      $_SESSION['cgpa']=$cgpa;
              $_SESSION['email']=$email;
              $_SESSION['username']=$username;
              $_SESSION['password']=$password;
              $_SESSION['image']=$image;

              header('location:welcome.php');
            }
        }
    }
    else
    {
      echo "<script>alert('Incorrect username or password!!!!!!!')</script>";
    }
  }
    else
    {
      echo "<script>alert('Fill all the fields!!!!!!!')</script>";
    }
  }
?>
</br>
    <br/><br/>       <br/><br/><br/><br/><br/><br/><br/>
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
  

</body></html>
