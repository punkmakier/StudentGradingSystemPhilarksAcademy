<?php  
    $student = New Student();
    $res = $student->single_student($_GET['id']);

    $studentdetails = New StudentDetails();
    $resguardian = $studentdetails->single_StudentDetails($_GET['id']);

    $course = New Course();
    $resCourse = $course->single_course($res->COURSE_ID);
    
  $image = $res->STUDPHOTO;
   if ($image=='-' || $image == '') {
      // code...
      $image_loc = 'img/primarypic.png';
    }else{
      $image_loc ='student/'. $res->STUDPHOTO;

    }


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
  		<div class="col-sm-3">
 
          <div class="panel">            
            <div id="img_profile" class="panel-body">
            <a href="" data-target="#myModal" data-toggle="modal" >
            <img title="profile image" class="img-hover"   src="<?php echo web_root. $image_loc; ?>">
            </a>
             </div>
          <ul class="list-group">
          
         
               <li class="list-group-item text-right"><span class="pull-left"><strong>Real name</strong></span> <?php echo $res->FNAME .' '.$res->LNAME; ?> </li>
              <li class="list-group-item text-right"><span class="pull-left"><strong>Grade Level</strong></span> <?php echo  $res->YEARLEVEL; ?> </li>
              <li class="list-group-item text-right"><span class="pull-left"><strong>Status</strong></span> <?php echo $res->student_status; ?> </li>
               <li class="list-group-item text-right"><span class="pull-left"><strong>Username</strong></span> <?php echo $res->ACC_USERNAME; ?></li>
                
            
          </ul> 
                
        </div>
    </div>
         
        <!--/col-3-->
<div class="col-sm-9"> 
   <!-- `IDNO`, `FNAME`, `LNAME`, `MNAME`, `SEX`, `BDAY`, `BPLACE`, `STATUS`, `AGE`, `NATIONALITY`,
 `RELIGION`, `CONTACT_NO`, `HOME_ADD`, `EMAIL`, `ACC_PASSWORD`, `student_status`, `schedID`, `course_year` -->
<?php
  $currentyear = date('Y');
  $nextyear =  date('Y') + 1;
  $sy = $currentyear .'-'.$nextyear;
  $_SESSION['SY'] = $sy;
  // $newDate    = Carbon::createFromFormat('Y-m-d',$_SESSION['SY'] )->addYear(1);

?>

<form action="controller.php?action=edit" class="form-horizontal" method="post" >
  <div class="table-responsive">
  <div class="col-md-8"><h2>Student Information</h2></div>
    <table class="table"> 
    <tr>
        <td><label>Id</label></td>
        <td >
          <input class="form-control input-md" readonly id="IDNO" name="IDNO" placeholder="Student Id" type="text" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
        </td>
        <td colspan="4"></td>

      </tr>
        <tr>
        <td><label>Name</label></td>
        <td>
          <input required="true"   class="form-control input-md" id="FNAME" name="FNAME" placeholder="First Name" type="text" value="<?php echo $res->FNAME; ?>">
          <i>Firstname</i>
        </td> 
        <td colspan="2">
          <input required="true"  class="form-control input-md" id="LNAME" name="LNAME" placeholder="Last Name" type="text" value="<?php echo $res->LNAME; ?>">
          <i>Lastname</i>
        </td> 
        <td>
          <input class="form-control input-md" id="MI" name="MI" placeholder="MI" type="text" value="<?php echo $res->MNAME; ?>">
          <i>Middle Name</i>
        </td>
        <td>
         <input class="form-control input-md" id="Suffix" name="SUFFIX" placeholder="Suffix" type="text" value="<?php echo $res->Suffix; ?>">
          <i>Suffix</i>
        </td>
      </tr>
      <tr>
        <td><label>Address</label></td>
        <td colspan="5"  >
        <input required="true"  class="form-control input-md" id="PADDRESS" name="PADDRESS" placeholder="Permanent Address" type="text" value="<?php echo $res->HOME_ADD; ?>">
        </td> 
      </tr>
      <tr>
        <td ><label>Sex </label></td> 
        <td colspan="2">
          <label>
          <?php
            if ($res->SEX=='Male') {
              # code...
              echo '<input checked id="optionsRadios1" name="optionsRadios" type="radio"   value="Female">Female 
             <input id="optionsRadios2" name="optionsRadios" type="radio"  CHECKED="true"  value="Male"> Male';
            }else{
                 echo '<input checked id="optionsRadios1" name="optionsRadios" type="radio"  CHECKED="true"  value="Female">Female 
             <input id="optionsRadios2" name="optionsRadios" type="radio"   value="Male"> Male';
            }

          ?>
            
          </label>
        </td>
        <td><label>Date of birth</label></td>
        <td colspan="2"> 
        <div class="input-group " >
                  <div class="input-group-addon"> 
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input  required="true" name="BIRTHDATE"  id="BIRTHDATE"  type="text" class="form-control input-md"   data-inputmask="'alias': 'mm/dd/yyyy'" data-mask value="<?php echo date_format(date_create($res->BDAY),'m/d/Y'); ?>">
           </div>             
        </td>
         
      </tr>
      <tr><td><label>Place of Birth</label></td>
        <td colspan="5">
        <input required="true"  class="form-control input-md" id="BIRTHPLACE" name="BIRTHPLACE" placeholder="Place of Birth" type="text" value="<?php echo $res->BPLACE; ?>">
         </td>
      </tr>
      <tr>
        <td><label>Nationality</label></td>
        <td colspan="2"><input required="true"  class="form-control input-md" id="NATIONALITY" name="NATIONALITY" placeholder="Nationality" type="text" value="<?php echo $res->NATIONALITY; ?>">
              </td>
        <td><label>Religion</label></td>
        <td colspan="2"><input  required="true" class="form-control input-md" id="RELIGION" name="RELIGION" placeholder="Religion" type="text" value="<?php echo $res->RELIGION; ?>">
        </td>
        
      </tr>
      <tr>
      <td><label>Contact No.</label></td>
        <td colspan="7"><input required="true"  class="form-control input-md" id="CONTACT" name="CONTACT" placeholder="Contact Number" type="text" value="<?php echo $res->CONTACT_NO; ?>">
              </td>
        
      </tr> 
      <td><label>Username</label></td>
				<td colspan="2">
				<input required="true"  class="form-control input-md" id="ACC_USERNAME" name="ACC_USERNAME" placeholder="Username" type="text" value="<?php echo $res->ACC_USERNAME; ?>">
				</td>

				<td colspan="2">
				<input required="true"  class="form-control input-md" id="ACC_PASSWORD" name="ACC_PASSWORD" placeholder="Password" type="hidden">
				</td>
			</tr> 
      <tr>
        <td><label>Gaurdian</label></td>
        <td colspan="2">
          <input required="true"  class="form-control input-md" id="GUARDIAN" name="GUARDIAN" placeholder="Parents/Guardian Name" type="text"value="<?php echo isset($resguardian->GUARDIAN) ? $resguardian->GUARDIAN : ''; ?>">
        </td>
        <td><label>Contact No.</label></td>
        <td colspan="2"><input  required="true" class="form-control input-md" id="GCONTACT" name="GCONTACT" placeholder="Contact Number" type="text"value="<?php echo isset($resguardian->GCONTACT) ? $resguardian->GCONTACT : ''; ?>"></td>
      </tr>
         <!-- <tr>
        <td><label>Set New Username</label></td>
        <td colspan="2">
          <input   class="form-control input-md" id="ACC_USERNAME" name="ACC_USERNAME" placeholder="Username" type="text"value="">
        </td>
        <td><label>Set New Password</label></td>
        <td colspan="2"><input class="form-control input-md" id="ACC_PASSWORD" name="ACC_PASSWORD" placeholder="Set new Password" type="password" value=""></td>
      </tr>-->
      <tr>
        <td><label>Email Address</label></td>
        <td colspan="6">
          <input class="form-control input-md" id="EMAIL" name="EMAIL" placeholder="Email" type="Email"value="<?php echo isset($res->ACC_EMAIL) ? $res->ACC_EMAIL : ''; ?>">
        </td>
      </tr>
      <tr>
      <td></td>
        <td colspan="5">  
          <button class="btn btn-success btn-lg" name="save" type="submit">Save</button>
        </td>
      </tr>
    </table>
  </div>
</form>
</div>


 