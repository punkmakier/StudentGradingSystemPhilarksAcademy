<?php
$q = $_GET['q'];
if($q=='enrol'){   
  if(isset($_SESSION['IDNO'])){ 
  
    $student = New Student();
    $stud  = $student->single_student($_SESSION['IDNO']);
 
 
     if ($stud->NewEnrollees == 1) {
      # code...
       message("You cannot enroll now. For more information, please contact registrar office.","error");
      redirect('index.php?q=profile');
     }else if ($stud->ENROLLED == 1) {
      # code...
       message("You cannot enroll now. For more information, please contact registrar office.","error");
      redirect('index.php?q=profile');
      }else{ 
         # code...
        redirect('index.php?q=subject'); 
 
    }

  
  }else{
  ?>

  <style type="text/css"> 
  </style>
     <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2><?php echo     $title;?></h2> 
      </div>
    </div><!-- End Breadcrumbs -->

        <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

<ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#New" data-toggle="tab">New</a></li> 
    <li><a href="#Old" data-toggle="tab">Old</a></li>
    <li id="TransfereesPan"><a href="#Transferees" data-toggle="tab">Transferees</a></li>
  </ul>
  <div class="tab-content"><br/>
    <div class="tab-pane active" id="New">

     <?php include  "regform.php"; ?> 
               
    </div><!--/tab-pane-->
       
     <div class="tab-pane" id="Old">
      
  <?php check_message();?>

        <div class="panel panel-success">
          <div class="panel-heading">Login</div>
          <div class="panel-body p-5">  
                  <form class="form-horizontal well" action="login.php" method="POST">
                      <div class="form-group">
                        <div class="col-md-12">
                          <label class="control-label mb-2" for=
                          "U_USERNAME"><b>Username</b></label> 
                                <input required="true" style="width: 30%;"   id="U_USERNAME" name="U_USERNAME" placeholder="Username" type="text" class="form-control input" >  
                        </div> 
       
                        </div>
                      <div class="form-group">
                        <div class="col-md-12">
                          <label class="control-label mb-2" for=
                          "U_PASS"><b>Password</b></label> 
                           <input required="true" style="width: 30%;"  name="U_PASS" id="U_PASS" placeholder="Password" type="password" class="form-control input ">
                   
                        </div> 
                        <br/>
                        <div class="form-group">
                        <div class="col-md-12"> 
                          <button type="submit" id="oldLogin" name="oldLogin"  class="btn btn-success ms-3" style="width: 15%;"><span class="glyphicon glyphicon-logged-in "></span>   Login</button> 
                           
                        </div>
                      </div>


                  </form>
                </div>
              </div> 
        </div>
    </div><!--/tab-pane-->
     <div class="tab-pane" id="Transferees"><br/> 
      <?php include  "registrationform.php"; ?> 
    </div><!--/tab-pane-->

  </div><!--/tab-content-->
</div>
</section>
<?php
}
 }else{
  include 'coursesubject.php';
 } 
?>


 