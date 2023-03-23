<?php
require_once("include/initialize.php");
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

$n=6;
      function getName($n) {
          $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
          $randomString = '';
       
          for ($i = 0; $i < $n; $i++) {
              $index = rand(0, strlen($characters) - 1);
              $randomString .= $characters[$index];
          }
       
          return $randomString;
      }

        $code = getName($n); 

 ?>
<style type="text/css">
  .form-gap {
    padding-top: 70px;
}
</style>

 <style type="text/css">
.password-container{ 
  position: relative;
}
.password-container input[type="password"],
.password-container input[type="text"]{
  width: 100%;
  padding: 12px 36px 12px 12px;
  box-sizing: border-box;
}
.fa-eye{
  position: absolute;
  top: 28%;
  right: 4%;
  cursor: pointer;
  color: lightgray;
}
</style>
  <title><?php SiteTitle();?></title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <div class="form-gap"></div>
 <?php if (!isset($_POST['email'])) { ?>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
    
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post" action="">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user color-blue"></i></span>
                          <input id="email" name="email" placeholder="Email" class="form-control"  type="email" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                      </div> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
  </div>
</div>
<?php
 }else{
  $_SESSION['email'] = $_POST['email'];

  $sql = "SELECT * FROM `tblstudent` WHERE `ACC_EMAIL`='{$_POST['email']}'";
  $mydb->setQuery($sql);
  $res = $mydb->executeQuery();
  $maxrow = $mydb->num_rows($res);

  if ($maxrow>0) {
      $result = $mydb->loadSingleResult();

      $message = 'Here is the verification code you need to verify your account:<b><h4>'.$code.'</h4></b>';
      $subject = 'Account Verification';

      $query = "UPDATE tblstudent SET CODE='$code' WHERE `ACC_EMAIL`='{$_POST['email']}'";
          $mydb->setQuery($query);
  $res1 = $mydb->executeQuery();
      if ($res1){
            $_SESSION['email'] = $_POST['email'];

                $mail = new PHPMailer();
                      $mail->IsSMTP();

                      $mail->SMTPDebug  = 0;  
                      $mail->SMTPAuth   = TRUE;
                      $mail->SMTPSecure = "ssl";
                      $mail->Port       = 465; //587
                      $mail->Host       = "smtp.gmail.com";
                      $mail->Username   = "philarkchristianacademy.inc1@gmail.com";
                      $mail->Password   = "hqlbynmbunnmepyh";

                      $mail->IsHTML(true);
                      $mail->AddAddress($_POST['email']);
                      $mail->SetFrom("philarkchristianacademy.inc1@gmail.com", "no-reply@philark.com");
                      //$mail->AddReplyTo("reply-to-email", "reply-to-name");    
                      //$mail->AddCC("cc-recipient-email", "cc-recipient-name");
                      $mail->Subject = $subject;
                      $mail->Body = $message;
                      $mail->send();

            }

?> 


<div class="col-md-4 col-md-offset-4">
      <form class="" method="POST" action="verify.php" onsubmit="return validate()">
    <div class="modal-header">
      <label id="errormsg" class="label label-danger col-md-12"></label>
        <h3>Enter Verification Code<span class="extra-title muted"></span></h3>
    </div>
    <div class="modal-body form-horizontal"> 
        <div class="control-group">
            <label for="new_password" class="control-label">Enter Verification Code</label>
            <div class="controls password-container">
                <input class="form-control" id="code" name="code" type="text">
            </div>
        </div>
    </div>
    <div class="modal-footer">
      <input type="hidden" class="hide" name="token" value="<?php echo $result->IDNO;?>">
        <button name="resend" class="btn btn-default" type="submit">Resend Code</button>
        <button  class="btn btn-primary" name="verif">Submit</button>
    </div>
  </form>
</div>

<?php  }

else{

?>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <label class="label col-md-12 label-danger text-center">Can't find email!</label>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
    
                    <form id="register-form" role="form" autocomplete="off" class="form" method="POST" action="">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user color-blue"></i></span>
                          <input id="email" name="email" placeholder="Email" class="form-control"  type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <button name="recover-submit" class="btn btn-lg btn-primary btn-block"  type="submit">Reset Password</button>
                      </div> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
  </div>
</div>

<?php  }


}
  ?>
  <script src="<?php echo WEB_ROOT; ?>admin/jquery/jquery.min.js"></script>

  <script type="text/javascript">
    function validate() {
 
      var newpass;
      var confirmpass;

      newpass = $("#new_password").val();
      confirmpass = $("#confirm_password").val(); 


      if (newpass==confirmpass) {
         $("#errormsg").hide();
         return true;

      }else{
          $("#errormsg").hide();
          $("#errormsg").fadeIn();
          $("#errormsg").html("Password does not match!");
          return false;
      }
    }


const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#new_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

  const togglePassword1 = document.querySelector('#togglePassword1');
  const cpassword = document.querySelector('#confirm_password');

  togglePassword1.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    cpassword.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
  </script>