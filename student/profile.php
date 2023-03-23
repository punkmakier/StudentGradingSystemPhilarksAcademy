<?php  
 error_reporting(0);

 if (!isset($_SESSION['IDNO'])){
      redirect("index.php");
     }


    $student = New Student();
    $res = $student->single_student($_SESSION['IDNO']);

    $image = $res->STUDPHOTO;

    if ($image=='-' || $image == '') {
      // code...
      $image_loc = 'img/primarypic.png';
    }else{
      $image_loc ='student/'. $res->STUDPHOTO;

    }

    $course = New Course();
    $resCourse = $course->single_course($res->COURSE_ID);
	?>
    
  <style type="text/css">
  #img_profile{
    width: 100%;
    height:auto;
  }
    #img_profile >  a > img {
    width: 100%;
    height:auto;
}


  </style>
   <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs"  >
      <div class="container">
        <h2>Student Profile</h2>
      
      </div>
    </div><!-- End Breadcrumbs -->


       <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">
  <?php 

  if($res->ENROLLED == "0"){
    if($res->student_status == "New"){
?>
      <div class="alert alert-danger" role="alert">Your account is <b>Pending</b>. Please follow up your requirements</div>
    <?php }}?>
        <div class="row">
  		<div class="col-sm-3">
 
          <div class="panel">    
          
            <div id="img_profile" class="panel-body">
            <a id="uploadPic" href="" data-target="#myModal" data-toggle="modal" >
            <img title="profile image" class="img-hover"   src="<?php echo web_root.   $image_loc; ?>">
            </a>
             </div>
          <ul class="list-group  ">
               <li class="list-group-item pull-right"><span class="pull-left"><strong>Real name:</strong>&nbsp;</span><?php echo $res->FNAME .' '.$res->LNAME; ?> </li>
               <li class="list-group-item pull-right"><span class="pull-left"><strong>Grade Level:</strong>&nbsp;</span><?php echo  $resCourse->COURSE_LEVEL; ?> </li>
               <li class="list-group-item pull-right"><span class="pull-left"><strong>Status:</strong>&nbsp;</span> <?php echo $res->student_status; ?> </li>
               <li class="list-group-item pull-right"><span class="pull-left"><strong>Username:</strong>&nbsp;</span> <?php echo $res->ACC_USERNAME; ?> </li>
               
            
          </ul> 
                
        </div>
    </div>
         
        <!--/col-3-->
<div class="col-sm-9"> 

<div class="panel">            
  <div class="panel-body">
   <?php
       check_message();   
       ?>
  <ul class="nav nav-tabs" id="myTab">
    
    <li class="active"><a href="#home" data-toggle="tab">List of Subjects</a></li> 
    <li><a href="#grades" data-toggle="tab">Grades</a></li>

    <li><a href="#settings" data-toggle="tab">Update Account</a></li>
  </ul>
              
  <div class="tab-content">
    <div class="tab-pane active" id="home">
    <br/>
    <div class="col-md-12">
      <h5 class="page-header">Student Subjects and Schedule</h5>
    </div> 
    <?php $sql ="SELECT * 
                          FROM   tblstudent st, studentsubjects ss, `subject` sub, `tblschedule` s, tblinstructor i
                          WHERE  st.IDNO=ss.IDNO AND ss.`SUBJ_ID` = sub.`SUBJ_ID` AND sub.`SUBJ_ID` = s.`SUBJ_ID`
                          AND s.INST_ID=i.INST_ID 
                          AND STUDSECTION=SECTION AND OUTCOME !='Drop'  
                          AND ss.`IDNO`=" .$_SESSION['IDNO']." AND SECTION='".$res->STUDSECTION."' AND sub.COURSE_ID='".$resCourse->COURSE_ID."'";

                      $mydb->setQuery($sql);

			  $subjRows = $mydb->num_rows($sql);

        
      if($subjRows > 0){

      ?>
                 <form action="customer/controller.php?action=delete" Method="POST">  					
            				<table id="dash-table"  class="table table-striped table-bordered table-hover "  style="font-size:12px" cellspacing="0"  > 
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
                            echo "<td class='text-center' style='padding-top:10%;' rowspan='".count($cur)."'>".$result->sched_room .'</td>';
                            $checkloop2 = false;
                          }

                        }
                        if($result->SECTION == $sectionName){
                          if($checkloop){
                            echo "<td class='text-center' style='padding-top:10%;' rowspan='".count($cur)."'>".$result->SECTION .'</td>';
                            $checkloop1 = false;
                          }

                        }
                        if($result->INST_NAME == $teacherName){
                          if($checkloop){
                            echo "<td class='text-center' style='padding-top:10%;' rowspan='".count($cur)."'>".$result->INST_NAME .'</td>';
                            $checkloop = false;
                          }

                        }
                      
                        echo '</tr>';
                      }
                    ?> 

                    
            				</tbody>
            					<!-- <footer>
                        <tr>
                          <td colspan="7"><a class="btn btn-primary btn-sm" href="">Print</a></td>
                        </tr>     
                      </footer> -->
            				 	
            				</table>
                     
            		 </form>
                  <form action="student/printschedule.php" method="POST" target="_blank">
                <input type="hidden" name="Course" value="<?php echo $resCourse->COURSE_LEVEL; ?>">
                <!-- this row will not appear when printing -->
                    <div class="row no-print">
                      <div class="col-xs-12">
                       <span class="pull-right"> <button type="submit" name="submit" class="btn btn-primary"  ><i class="fa fa-print"></i> Print</button></span>  
                    </div>
                    </div> 
                  </form>       
                  <?php }
                  else{
                    echo "<h3 class='text-center mt-5 text-danger'>No subjects available</h3>";
                  }
                  
                  ?>
               
             </div><!--/tab-pane-->
            <div class="tab-pane" id="grades">
    <br/>
         
              <?php  require_once  ("studentgrades.php"); ?>
          
       
            </div>
             <div class="tab-pane" id="adddrop">
         
              
              <?php //require_once  ("changingdropping.php"); ?>
          
       
            </div>
             <div class="tab-pane" id="settings">
    		 
              <?php require_once  ("updateyearlevel.php"); ?>
          
       
            </div><!--/tab-pane-->
  </div><!--/tab-content-->
 </div>
</div><!--/col-9--> 
</div>
</div>
</div>
</section>
 


    <!-- Modal photo -->
          <div class="modal hide  fade" id="myModal" tabindex="-1"  >
            <div class=" modal-dialog ">
              <div class="modal-content">
                <div class="modal-header"> 
                        Choose Profile Picture
                                   </div>

                <form action="student/controller.php?action=photos" enctype="multipart/form-data" method=
                "post">
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="rows">
                        <div class="col-md-12">
                          <div class="rows">
                            <div class="col-md-8">
                              <input name="MAX_FILE_SIZE" type=
                              "hidden" value="1000000"> <input id=
                              "photo" name="photo" type=
                              "file">
                            </div>

                            <div class="col-md-4"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">  <button class="btn btn-primary"
                    name="savephoto" type="submit">Upload Photo</button>
                  </div>
                </form>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->

