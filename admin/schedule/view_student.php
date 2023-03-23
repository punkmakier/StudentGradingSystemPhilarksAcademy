 <?php  
     if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

  @$schedID = $_GET['id'];
    if($schedID==''){
  redirect("index.php");
}
 

  $schedule = New Schedule();
  $res = $schedule->single_schedule($schedID); 
   $sql = "SELECT * FROM `tblschedule`  s,`course` c  WHERE  s.`COURSE_ID`=c.`COURSE_ID`  AND `schedID`='{$schedID}'";
  $mydb->setQuery($sql);  
  $res = $mydb->loadSingleResult();


      $gradeID =$res->COURSE_ID;

  // $sql = "SELECT * FROM `studentschedule`  sc,`course` c  WHERE  sc.`COURSE_ID`=c.`COURSE_ID`  AND `schedID`='{$schedID}'";
  // $mydb->setQuery($sql);
  //  $max_sched =$mydb->num_rows($mydb->executeQuery());

   // if ($max_sched > 0) {
   //   // code...
   //    $singleSchedule = $mydb->loadSingleResult();
   //    $grade_level =$singleSchedule->COURSE_LEVEL;
   //    $gradeID =$res->COURSE_ID;
   // }else{
   //   $grade_level ='none';
   //    $gradeID ='0';
   // }


?> 

  
   <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i  class="fa fa-globe">List Of Students Enrolled</i>
              <small class="pull-right"> 
                <!-- SELECT `schedID`, `TIME_FROM`, `TIME_TO`, `sched_time`, `sched_day`, `sched_semester`, `sched_sy`, `sched_room`, `SECTION`, `COURSE_ID`, `SUBJ_ID`, `INST_ID` FROM `tblschedule` WHERE 1 -->
                 Grade Level: <?php echo $res->COURSE_LEVEL ;?> || 
                 Section: <?php echo $res->SECTION ;?> ||
                 Time: <?php echo $res->sched_time ;?> ||
                 Days: <?php echo $res->sched_day ;?> ||
                 Room: <?php echo $res->sched_room ;?>
                  </small>
          </h2>
        </div> 
      </div> 
   

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 col-md-12 table-responsive">
          <table id="dash-table" class="table table-bordered table-striped"   cellspacing="0" >
            <thead>
            <tr>
              <th>IdNo.</th>
              <th>Name</th> 
              <th>Address</th>
              <th>Sex</th> 
              <th>AGE</th>
              <th>Contact No.</th> 
              <!--<th>Status</th>-->
              <th>Grades</th>
            </tr>
            </thead>
            <tbody>
              <?php
                $tot = 0; 
           
                 $sql ="SELECT * FROM   `tblstudent`  s, tblschedule sc
                        WHERE  s.COURSE_ID=sc.COURSE_ID AND `schedID`='{$schedID}'";

                $mydb->setQuery($sql);
                $res = $mydb->executeQuery();
                $row_count = $mydb->num_rows($res);
                $cur = $mydb->loadResultList();
               
                  if ($row_count > 0){
                    foreach ($cur as $result) {
                      $dbirth =  date($result->BDAY);
                      $today = date('Y-M-d'); 
              ?>
                      <tr> 
                        <td><?php echo $result->IDNO;?></td>
                        <td><?php echo $result->FNAME . ' ' .  $result->MNAME . '  ' .  $result->LNAME;?></td>
                        <td><?php echo $result->HOME_ADD;?></td>
                        <td><?php echo $result->SEX;?></td>
                        <td><?php echo  date_diff(date_create($dbirth),date_create($today))->y;?></td>
                        <td><?php echo $result->CONTACT_NO;?></td> 
                        <!--<td><?php echo $result->student_status;?></td>-->
                        <td><a title="View Grades" href="index.php?view=grades&id=<?php echo $result->IDNO;?>" class="btn btn-primary btn-xs" >View <span class="fa fa-info-circle fw-fa"></span> </a></td>
                      </tr>
              <?php  
                         $tot =  count($cur);
                        
                    } 
                       // $_SESSION['tot'] = $tot;
                  } 
  
              ?>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="6" align="right"><h2>Total Number of Student/s : </h2></td><td><h2><?php echo $tot ; ?></h2></td>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
 
</form>
    <form action="print_student.php" method="POST" target="_blank">
    <input type="hidden" name="id" value="<?php echo $schedID; ?>"> 
          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
             <span class="pull-right"> <button type="submit" class="btn btn-primary"  ><i class="fa fa-print"></i> Print</button></span>  
          </div>
          </div> 
    </form>
    <!-- /.content -->
    <div class="clearfix"></div>
 
</div>
<!-- ./wrapper -->
  