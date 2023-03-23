<?php
require_once("../include/initialize.php");
    if(($_POST['new_password'] == $_POST['confirm_password']))
    {
        $sql = "UPDATE `useraccounts` SET `ACCOUNT_PASSWORD`='".sha1($_POST['new_password'])."' WHERE  `ACCOUNT_ID`='".$_POST['token']."'";
        $mydb->setQuery($sql);
        $res = $mydb->executeQuery();

         ?>
           <title><?php SiteTitle();?></title>
          <link href="<?php echo web_root; ?>assets/css/style.css" rel="stylesheet">

        <div class="container" style="margin-top: 200px; margin-left: 40% ;">
            <div class="alert alert-success fade in"> 
                <strong>Success!</strong> Password has been changed. <a href="index.php?q=login">Click here to Login</a>
            </div>
          </div>
          <?php
    }
    else{
        ?>
           <title><?php SiteTitle();?></title>
          <link href="<?php echo web_root; ?>assets/css/style.css" rel="stylesheet">

            <div class="container" style="margin-top: 200px; margin-left: 40% ;">
                <div class="alert alert-error fade in"> 
                    <i class="bi bi-exclamation-circle"></i>
                    <strong>Failed!</strong> <label>Password not matched.</label> <a href="verify.php">Click here to retry.</a>
                </div>
              </div>
        <?php

    }
?>