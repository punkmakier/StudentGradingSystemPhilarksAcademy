<?php
require_once("../include/initialize.php");
$view_form = isset($_GET['login']) ? $_GET['login'] : '';
 ?>
  <?php



 if (isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     } 
  ?>
 
 <?php  
if(isset($_POST['a_login'])){
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $h_upass = sha1($upass);
  
   if ($email == '' OR $upass == '') {

      message("Invalid Username and Password!", "error");
      redirect("login.php");
         
    } else {  
  //it creates a new objects of member
    $user = new User();
    //make use of the static function, and we passed to parameters
    $res = $user::userAuthentication($email, $h_upass);
    if ($res==true) { 
       message("You logon as ".$_SESSION['ACCOUNT_TYPE'].".","success");
       
       $sql="INSERT INTO `tbllogs` (`USERID`, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) 
          VALUES (".$_SESSION['ACCOUNT_ID'].",'".date('Y-m-d H:i:s')."','".$_SESSION['ACCOUNT_TYPE']."','Logged in')";
          $mydb->setQuery($sql);
          $mydb->executeQuery();

      if ($_SESSION['ACCOUNT_TYPE']=='Administrator'){ 
         redirect(web_root."admin/index.php");
      }elseif($_SESSION['ACCOUNT_TYPE']=='Registrar'){
          redirect(web_root."admin/index.php");

      }else{
           redirect(web_root."admin/login.php");
      }
    }else{
        echo "<script>alert('Account does not exist! Please contact Administrator.')</script>";
       redirect(web_root."admin/login.php?login=admin"); 
    }
 }
 } 
 ?>  
  <?php  
if(isset($_POST['t_login'])){
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $h_upass = sha1($upass);
  
   if ($email == '' OR $upass == '') {

      message("Invalid Username and Password!", "error");
      redirect("login.php");
         
    } else {  
  //it creates a new objects of member
    $inst = new Instructor();
    //make use of the static function, and we passed to parameters
    $res = $inst::userAuthentication($email, $h_upass);
    if ($res==true) { 
       message("You logon as ".$_SESSION['ACCOUNT_TYPE'].".","success");
       
       $sql="INSERT INTO `tbllogs` (`USERID`, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) 
          VALUES (".$_SESSION['ACCOUNT_ID'].",'".date('Y-m-d H:i:s')."','".$_SESSION['ACCOUNT_TYPE']."','Logged in')";
          $mydb->setQuery($sql);
          $mydb->executeQuery();
 
           redirect(web_root."admin/");  
    }else{
      echo "<script>alert('Account does not exist! Please contact Administrator.')</script>";

      // message("Account does not exist! Please contact Administrator.", "error");
       redirect(web_root."admin/login.php?login=teacher"); 
    }
 }
 } 
 ?>  
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php SiteTitle();?></title>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
.actives {
   background-color: #19222C;
   color: #fff;
}
</style>
<body>

    <div id="login">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link btn-primary btn <?php echo ($view_form=='admin') ? 'actives':'';?>" href="login.php?login=admin">Login Admin</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link btn btn-primary <?php echo ($view_form=='teacher') ? 'actives':'';?>"  href="login.php?login=teacher">Login Teacher</a>
        </li> 
      </ul>
        <h3 class="text-center text-white pt-5">LOGIN <?php echo strtoupper($view_form);?> </h3>
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" style="height: auto;" class="col-md-12">

                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>

                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="user_email" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="user_pass" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                              <a href="reset-password.php" style="float: right; margin-top: -10px;">Forgot Password</a>
                            </div>
                            <div class="form-group mt-4"> 
                               <?php if ($view_form == 'admin') { ?>
                                <input type="submit" name="a_login" style="width: 30%;" class="btn btn-info btn-md" value="Submit">
                              <?php } ?>
                               <?php if ($view_form == 'teacher') { ?>
                                <input type="submit" name="t_login" style="width: 30%;" class="btn btn-info btn-md" value="Submit">
                              <?php } ?>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>