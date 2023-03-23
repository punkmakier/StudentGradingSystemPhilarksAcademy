<?php 
require_once ("../include/initialize.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title><?php SiteTitle();?></title>

     <!-- Bootstrap Core CSS -->
 <link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Fonts -->
    <link href="<?php echo web_root; ?>font/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="<?php echo web_root; ?>font/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet">
 
     <!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
 
 <link href="<?php echo web_root; ?>css/modern.css" rel="stylesheet">
 <link href="<?php echo web_root; ?>css/costum.css" rel="stylesheet">
  <body onload="window.print();" onafterprint="window.close()">


      <table >
        <tr>
          <td width="600"><i class="fa fa-user"></i> Student Information
            <small class="pull-right">Date: <?php echo date('m/d/Y'); ?></small></td>
            <td> <img src="deped.png" alt="" width="180"></td>
        </tr>
      </table>


      <?php 
      $currentyear = date('Y');
      $nextyear =  date('Y') + 1;
      $sy = $currentyear .'-'.$nextyear;
      $_SESSION['SY'] = $sy;


      $student = New Student();
      $stud = $student->single_student($_SESSION['IDNO']);
      $course = New Course();
      $resCourse = $course->single_course($stud->COURSE_ID);

      ?>
      <table>
        <tr>
          <td width="75%" colspan="2" >
            <address>
            <b>Name : <?php echo $stud->LNAME. ', ' .$stud->FNAME .' ' .$stud->MNAME;?></b><br>
            Address : <?php echo $stud->HOME_ADD;?><br> 
            Contact No.: <?php echo $stud->CONTACT_NO;?><br>
            
          </address>
          </td>
          <td >
             <b>Grade Level:  <?php echo $resCourse->COURSE_LEVEL;;

            $course = New Course();
            $singlecourse = $course->single_course($stud->COURSE_ID); 
            $_SESSION['COURSEID'] =$stud->COURSE_ID;
            $_SESSION['COURSELEVEL'] = $stud->YEARLEVEL;
            ?></b><br>
          
          <b>Academic Year : <?php echo $_SESSION['SY']; ?></b>
          </td>
        </tr>
      </table>

  <div class="row">
    <h1  align="center">List of Subjects/Schedules</h1>
    <hr/>
  </div>
                    <table   class="table table-striped table-bordered table-hover "  style="font-size:12px;width:100%" cellspacing="0"  > 
                      <thead>
                        <tr> 
                          <th rowspan="2">Subject</th>
                          <th rowspan="2">Description</th>   
                          <th colspan="4">Schedule</th> 
                          <th rowspan="2">Instructor</th> 
                        </tr> 
                        <tr> 
                          <th>Day</th> 
                          <th>Time</th>
                          <th>Room</th> 
                          <th>Section</th>  
                        </tr>
                      </thead>   
                    <tbody>
                    <?php
                    $tot = 0;
                    // $sql ="SELECT * 
                    //       FROM  studentsubjects ss, `subject` sub, `tblschedule` s
                    //       WHERE  ss.`SUBJ_ID` = sub.`SUBJ_ID` AND sub.`SUBJ_ID` = s.`SUBJ_ID` AND OUTCOME !='Drop'  
                    //       AND ss.`IDNO`=" .$_SESSION['IDNO']."
                    //       AND s.sched_semester = '".$_SESSION['SEMESTER']."' AND LEVEL='".$_POST['Course']."'";
                      $sql ="SELECT * 
                          FROM  tblstudent st, studentsubjects ss, `subject` sub, `tblschedule` s, tblinstructor i
                          WHERE  st.IDNO=ss.IDNO AND ss.`SUBJ_ID` = sub.`SUBJ_ID` AND sub.`SUBJ_ID` = s.`SUBJ_ID`
                          AND s.INST_ID=i.INST_ID AND STUDSECTION=SECTION AND OUTCOME !='Drop'  
                          AND ss.`IDNO`=" .$_SESSION['IDNO']." AND sub.COURSE_ID=". $_SESSION['COURSEID'];

                      $mydb->setQuery($sql);
                      $cur = $mydb->loadResultList();
                      $checkloop = true;
                      $checkloop1 = true;
                      $checkloop2 = true;
                      foreach ($cur as $result) {
                        $teacherName = $result->INST_NAME;
                        $sectionName = $result->SECTION;
                        $roomNumber = $result->sched_room;
                        echo '<tr>'; 
                        echo '<td>'.$result->SUBJ_CODE.'</td>';
                        echo '<td>'.$result->SUBJ_DESCRIPTION.'</td>'; 
                        echo '<td>'.$result->sched_day  .'</td>';
                        echo '<td>'.$result->sched_time  .'</td>';
                        if($result->sched_room == $roomNumber){
                          if($checkloop){
                            echo "<td class='text-center' rowspan='".count($cur)."'>".$result->sched_room .'</td>';
                            $checkloop2 = false;
                          }

                        }
                        if($result->SECTION == $sectionName){
                          if($checkloop){
                            echo "<td class='text-center' rowspan='".count($cur)."'>".$result->SECTION .'</td>';
                            $checkloop1 = false;
                          }

                        }
                        if($result->INST_NAME == $teacherName){
                          if($checkloop){
                            echo "<td class='text-center' rowspan='".count($cur)."'>".$result->INST_NAME .'</td>';
                            $checkloop = false;
                          }

                        }
                      
                        echo '</tr>';

                        $tot += $result->UNIT;
                      }
                    ?> 
                    </tbody>
                      
                      
                    </table>
  </body>
</html>