<?php
$currentyear = date('Y');
$nextyear =  date('Y') + 1;
$sy = $currentyear .'-'.$nextyear;
$_SESSION['SY'] = $sy;


if (isset($_POST['submit'])){  

    $student = New Student(); 
    $student->COURSE_ID     = $_POST['gradeLevel']; 
    $student->student_status ='Regular'; 
    $student->NewEnrollees  = 1; 
    $student->update($_SESSION['IDNO']);  

    message("Enrollment form has been submitted. Please wait for the confirmation of the registrar.","success");
    redirect("index.php?q=profile");  
 }

?>
 <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2><?php echo     $title;?></h2> 
      </div>
    </div><!-- End Breadcrumbs -->

        <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">


<form action="" method="POST">
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 <!-- Main content -->
 <?php   //check_message();  ?> 
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h3 class="page-header">
            <i class="fa fa-user"></i> Student Information 
          </h3>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-8 invoice-col"> 
          <address>
            <b>Name : <?php echo $_SESSION['LNAME']. ', ' .$_SESSION['FNAME'] .' ' .$_SESSION['MI'];?></b><br>
            Address : <?php echo $_SESSION['PADDRESS'];?><br> 
            Contact No.: <?php echo $_SESSION['CONTACT'];?><br>
            
          </address>
        </div>
    
        <div class="col-sm-4 invoice-col">
          <b>Grade Level:  <?php 

            $student = New Student();
            $res = $student->single_student($_SESSION['IDNO']);
            $_SESSION['COURSEID'] = $res->COURSE_ID;

            $course = New Course();
            $singlecourse = $course->single_course($_SESSION['COURSEID']);
            echo $singlecourse->COURSE_LEVEL;
 
         
            ?></b><br> 
          <b>Academic Year : <?php echo $_SESSION['SY']; ?></b><br> 
          <b>Date Enroll: <?php echo date('m/d/Y'); ?></b>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <?php
            $mydb->setQuery("SELECT SUM(`AVERAGE`) as overallgrades,count(*) as num_subject FROM `studentsubjects` ss ,subject s WHERE ss.SUBJ_ID=s.SUBJ_ID AND COURSE_ID='{$_SESSION['COURSEID']}' AND IDNO='{$_SESSION['IDNO']}'");
            $studgrades = $mydb->loadSingleResult();

            $ave = $studgrades->overallgrades / $studgrades->num_subject;
            if ($ave>= 75 ) {
              // code...

              $rem = 'Passed';
            }else{

              $rem = 'Failed';
            }




            $newGradeLevel =  validateGradeLevel($_SESSION['COURSEID'],$_SESSION['IDNO']);

            $course = New Course();
            $newsinglecourse = $course->single_course($newGradeLevel);
            $newLevel = $newsinglecourse->COURSE_LEVEL;



           
 
?>
<style type="text/css">
  .line {
    border-bottom: 1px solid #ddd;
    text-align: left;
    padding-left: 5px;
    font-weight: bold;
  }
  .fits {
    white-space: nowrap;
    width: 1px;
  }
</style>
<br> 
<br> 
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <h3 class="page-header">
            <i class="fa fa-book"></i> Moving Up
            <!-- <small class="pull-right">Date: 2/10/2014</small> -->
          </h3>
        </div>
        <!-- /.col -->
      </div>
<br> 
      <div class="row">
        <div class="col-xs-12">
           <table style="width:100%">
              <thead>
              <tr> 
                <td class="fits">Average:</td>
                <td class="line"><?php echo $ave;?></td>
                <td class="fits">Remarks:</td> 
                <td class="line"><?php echo $rem;?></td> 
                <td class="fits">Become Grade Level:</td> 
                <td class="line"><?php echo $newLevel;?></td>  
              </tr> 
            </thead>
          </table>
        </div>
        <!-- /.col -->
      </div>
<br> <br> <br> 
            <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <h3 class="page-header">
            <i class="fa fa-book"></i> List of Subjects
            <!-- <small class="pull-right">Date: 2/10/2014</small> -->
          </h3>
        </div>
        <!-- /.col -->
      </div>
 <br> 
 
<!-- Table row -->
<div class="row">
  <div class="col-xs-12 table-responsive">
   
    <table class="table table-striped">
      <thead>
      <tr> 
        <th>Id</th>
        <th>Subject</th>
        <th>Description</th> 
        <th>Grade Level</th> 

      </tr>
      </thead>
      <tbody>
      <?php 

          $mydb->setQuery("SELECT * FROM `subject` s, `course` c   WHERE s.COURSE_ID=c.COURSE_ID AND c.COURSE_ID ='{$newGradeLevel}'");

          $cur = $mydb->loadResultList();

          foreach ($cur as $result) {
          echo '<tr>';
          echo '<td>'.$result->SUBJ_ID.'</td>';
          echo '<td>'.$result->SUBJ_CODE.'</td>'; 
          echo '<td>'.$result->SUBJ_DESCRIPTION.'</td>'; 
          echo '<td>'.$result->COURSE_LEVEL.'</td>'; 
          echo '</tr>';
 
          } 
      ?> 
      </tbody>
     </table>  
 
<br> <br> <br> 
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-9"> 
          <input type="hidden" name="gradeLevel" value="<?php echo $newGradeLevel;?>">
          <button type="hidden" name="submit" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Enrollment
          </button>
      </div> 

      </div>
    </section> 
  </div>
  </form>
</div>
</section>
