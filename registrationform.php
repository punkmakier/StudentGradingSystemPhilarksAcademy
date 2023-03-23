 <!-- `IDNO`, `FNAME`, `LNAME`, `MNAME`, `SEX`, `BDAY`, `BPLACE`, `STATUS`, `AGE`, `NATIONALITY`,
 `RELIGION`, `CONTACT_NO`, `HOME_ADD`, `EMAIL`, `ACC_PASSWORD`, `student_status`, `schedID`, `course_year` -->
<?php
 error_reporting(0);

 if (isset($_POST['transsubmit'])) {

		// Upload Birth Cert images
		$birthCert_img_name = $_FILES['BIRTHCERT']['name'];
		$birthCert_tmp_name = $_FILES['BIRTHCERT']['tmp_name'];
	
		$birthCert_img_ext = pathinfo($birthCert_img_name, PATHINFO_EXTENSION);
		$birthCert_img_ex_lc = strtolower($birthCert_img_ext);
	
		$birthCert_new_name_image = uniqid("birthCert-",true).'.'.$birthCert_img_ex_lc;
	
		$birthCertimg_upload_path = "admin/enrollees/images/".$birthCert_new_name_image;


	$_SESSION['STUDID'] 	  =  $_POST['IDNO'];
	$_SESSION['FNAME'] 	      =  $_POST['FNAME'];
	$_SESSION['LNAME']  	  =  $_POST['LNAME'];
	$_SESSION['MI']           =  $_POST['MI'];
	$_SESSION['SUFFIX']           =  $_POST['SUFFIX'];
	$_SESSION['PADDRESS']     =  $_POST['PADDRESS'];
	$_SESSION['SEX']          =  $_POST['optionsRadios'];
	$_SESSION['BIRTHDATE']    = date_format(date_create($_POST['BIRTHDATE']),'Y-m-d'); 
	$_SESSION['NATIONALITY']  =  $_POST['NATIONALITY'];
	$_SESSION['BIRTHPLACE']   =  $_POST['BIRTHPLACE'];
	$_SESSION['RELIGION']     =  $_POST['RELIGION'];
	$_SESSION['CONTACT']      =  $_POST['CONTACT']; 
	$_SESSION['GUARDIAN']     =  $_POST['GUARDIAN'];
	$_SESSION['GCONTACT']     =  $_POST['GCONTACT'];
	$_SESSION['COURSEID'] 	  =  $_POST['COURSE'];
	// $_SESSION['SEMESTER']     =  $_POST['SEMESTER'];  
	$_SESSION['USER_NAME']    =  $_POST['USER_NAME']; 
	$_SESSION['EMAIL']    =  $_POST['EMAIL'];
	$_SESSION['PASS']    	  =  $_POST['PASS']; 


$student = New Student();
$res = $student->find_all_student($_POST['LNAME'],$_POST['FNAME'],$_POST['MI']);

if ($res) {
	# code...
	echo "<script>
	Swal.fire(
	  'Error!',
	  'Student already exist.',
	  'error'
	)
	</script>";
	// message("Student already exist.", "error");

 }else{
	$sql="SELECT * FROM tblstudent WHERE ACC_USERNAME='" . $_SESSION['USER_NAME'] . "'";
	$mydb->setQuery($sql); 		  
	$userStud =$mydb->num_rows($mydb->executeQuery()); 

// $sql="SELECT * FROM tblstudent WHERE ACC_USERNAME='" . $_SESSION['USER_NAME'] . "'";
// $userresult = mysql_query($sql) or die(mysql_error());
// $userStud  = mysql_fetch_assoc($userresult);

if($userStud){
	echo "<script>
	Swal.fire(
	  'Error!',
	  'Username is already taken.',
	  'error'
	)
	</script>";

	// message("Username is already taken.", "error");
    // redirect(web_root."index.php?q=enrol");
}else{


	if($_SESSION['COURSEID']=='Select' || $_SESSION['SEMESTER']=='Select' ){
		echo "<script>
	Swal.fire(
	  'Error!',
	  'Select course and semester exactly.',
	  'error'
	)
	</script>";
	// echo "<script>alert('Select course and semester exactly')</script>";

		// message("Select course and semester exactly"."error");
		// redirect("index.php?q=enrol");

	}else{

		$age = date_diff(date_create($_SESSION['BIRTHDATE']),date_create('today'))->y;
	
		if ($age < 3){
			echo "<script>
		Swal.fire(
		  'Error!',
		  'Cannot Proceed. Must be 3 years old and above to enroll.',
		  'error'
		)
		</script>";
			// echo "<script>alert('Cannot Proceed. Must be 3 years old and above to enroll.')</script>";
			// message("Cannot Proceed. Must be 3 years old and above to enroll."."error");
		//    redirect("index.php?q=enrol");
	
		}else{
    	$student = New Student();
		$student->IDNO 			= $_SESSION['STUDID'];
		$student->FNAME 		= $_SESSION['FNAME'];
		$student->LNAME 		= $_SESSION['LNAME'];
		$student->MNAME 		= $_SESSION['MI'];
		$student->Suffix 		= $_SESSION['SUFFIX'];
		$student->SEX 			= $_SESSION['SEX'];
		$student->BDAY 			= $_SESSION['BIRTHDATE'];
		$student->BPLACE 		= $_SESSION['BIRTHPLACE']; 
		$student->NATIONALITY 	= $_SESSION['NATIONALITY'];
		$student->RELIGION 		= $_SESSION['RELIGION'];
		$student->CONTACT_NO	= $_SESSION['CONTACT'];
		$student->HOME_ADD 		= $_SESSION['PADDRESS'];
		$student->ACC_USERNAME	= $_SESSION['USER_NAME'];
		$student->ACC_EMAIL	= $_SESSION['EMAIL'];
		move_uploaded_file($birthCert_tmp_name, $birthCertimg_upload_path);
		$student->BIRTHCERT	= $birthCert_new_name_image;
		$student->ACC_PASSWORD 	= sha1($_SESSION['PASS']);
		$student->COURSE_ID   	= $_SESSION['COURSEID'];
		$student->SEMESTER   	= $_SESSION['SEMESTER']; 
		$student->student_status ='Transferee';
		// $student->YEARLEVEL   	= $_SESSION['COURSELEVEL']; 
		$student->NewEnrollees  = 1; 
		$student->create();

		$studentdetails = New StudentDetails();
		$studentdetails->IDNO = $_SESSION['STUDID'];
		$studentdetails->GUARDIAN = $_SESSION['GUARDIAN'];
		$studentdetails->GCONTACT = $_SESSION['GCONTACT']; 
		$studentdetails->create(); 

		$studAuto = New Autonumber();
		$studAuto->studauto_update();


		@$_SESSION['IDNO'] = $_SESSION['STUDID'];
		redirect("index.php?q=profile");
    }

		
	}

}


 	# code...
// unset($_SESSION['STUDID']);
// unset($_SESSION['FNAME']);
// unset($_SESSION['LNAME']);
// unset($_SESSION['MI']);
// unset($_SESSION['PADDRESS']);
// unset($_SESSION['SEX']);
// unset($_SESSION['BIRTHDATE']); 
// unset($_SESSION['BIRTHPLACE']);
// unset($_SESSION['RELIGION']);
// unset($_SESSION['CONTACT']);
// unset($_SESSION['CIVILSTATUS']);
// unset($_SESSION['GUARDIAN']);
// unset($_SESSION['GCONTACT']);
// unset($_SESSION['COURSEID']);
// unset($_SESSION['SEMESTER']); 
// unset($_SESSION['USER_NAME']);
// unset($_SESSION['PASS']); 


 }

}


	$currentyear = date('Y');
	$nextyear =  date('Y') + 1;
	$sy = $currentyear .'-'.$nextyear;
	$_SESSION['SY'] = $sy; 


	$studAuto = New Autonumber();
	$autonum = $studAuto->stud_autonumber();
?>

<form action="" class="form-horizontal well" method="post" enctype="multipart/form-data">
	<div class="table-responsive">
	<div class="col-md-8"><h2>PreRegistration Form</h2></div>
	<div class="col-md-4"><label>Academic Year: <?php echo $_SESSION['SY'] ; ?></label></div>
	<div class="table-responsive"> 
		<table class="table">
			<tr>
				<td><label>Id</label></td>
				<td >
					<input class="form-control input-md" readonly id="IDNO" name="IDNO" placeholder="Student Id" type="text" value="<?php echo isset($_SESSION['STUDID']) ? $_SESSION['STUDID'] : $autonum->AUTO; ?>">
				</td>
				<td colspan="4"></td>

			</tr>
			<tr>
				<td><label>Firstname</label></td>
				<td>
					<input required="true" class="form-control input-md" id="FNAME" name="FNAME" placeholder="First Name" type="text" value="<?php echo isset($_SESSION['FNAME']) ? $_SESSION['FNAME'] : ''; ?>">
 				</td>
				<td><label>Lastname</label></td>
				<td colspan="1">
					<input required="true" class="form-control input-md" id="LNAME" name="LNAME" placeholder="Last Name" type="text" value="<?php echo isset($_SESSION['LNAME']) ? $_SESSION['LNAME'] : ''; ?>">
				</td> 
				<td>
					<input class="form-control input-md" id="MI" name="MI" placeholder="MI" maxlength="1" type="text" value="<?php echo isset($_SESSION['MI']) ? $_SESSION['MI'] : ''; ?>">
				</td>
				<td>
					<input class="form-control input-md" id="SUFFIX" name="SUFFIX" placeholder="SUFFIX"  maxlength="3" type="text" value="<?php echo isset($_SESSION['SUFFIX']) ? $_SESSION['SUFFIX'] : ''; ?>">
				</td>
			</tr>
			<tr>
				<td><label>Address</label></td>
				<td colspan="5"  >
				<input required="true" class="form-control input-md" id="PADDRESS" name="PADDRESS" placeholder="Permanent Address" type="text" value="<?php echo isset($_SESSION['PADDRESS']) ? $_SESSION['PADDRESS'] : ''; ?>">
				</td> 
			</tr>
			<tr>
				<td ><label>Sex </label></td> 
				<td colspan="2">
					<label>
						<input checked id="optionsRadios1" name="optionsRadios" type="radio" value="Female">Female 
						 <input id="optionsRadios2" name="optionsRadios" type="radio" value="Male"> Male
					</label>
				</td>
				<td    ><label>Date of birth</label></td>
				<td colspan="2"> 
				<div class="input-group" >
             
                  <input required="true" name="BIRTHDATE"  type="date" class="form-control input-md" value="<?php echo isset($_SESSION['BIRTHDATE']) ? $_SESSION['BIRTHDATE'] : ''; ?>">
				   </div>             
				</td>
				 
			</tr>
			<tr><td><label>Place of Birth</label></td>
				<td colspan="5">
				<input required="true" class="form-control input-md" id="BIRTHPLACE" name="BIRTHPLACE" placeholder="Place of Birth" type="text" value="<?php echo isset($_SESSION['BIRTHPLACE']) ? $_SESSION['BIRTHPLACE'] : ''; ?>">
			   </td>
			</tr>
			<tr>
				<td><label>Nationality</label></td>
				<td colspan="2"><input required="true" class="form-control input-md" id="NATIONALITY" name="NATIONALITY" placeholder="Nationality" type="text" value="<?php echo isset($_SESSION['NATIONALITY']) ? $_SESSION['NATIONALITY'] : ''; ?>">
							</td>
				<td><label>Religion</label></td>
				<td colspan="2"><input required="true" class="form-control input-md" id="RELIGION" name="RELIGION" placeholder="Religion" type="text" value="<?php echo isset($_SESSION['RELIGION']) ? $_SESSION['RELIGION'] : ''; ?>">
				</td>
				
			</tr>
			<tr>
			<td><label>Contact No.</label></td>
				<td colspan="2"><input required="true" class="form-control input-md" id="CONTACT" name="CONTACT" placeholder="09XXXXXXXXX" type="tel" pattern="[0-9]{11}" maxlength="11"   value="<?php echo isset($_SESSION['CONTACT']) ? $_SESSION['CONTACT'] : ''; ?>">
							</td>
				
				
	 
			 	<td><label>Grade Level</label></td>
				<td colspan="2">
					
					<select class="form-control input-sm" name="COURSE" required>
								<?php
								if(isset($_SESSION['COURSEID'])){
									$course = New Course();
  								    $singlecourse = $course->single_course($_SESSION['COURSEID']);
  								    echo '<option value='.$singlecourse->COURSE_ID.' >'.$singlecourse->COURSE_LEVEL.' </option>';

								}else{
									echo '<option value="Select" hidden>- Select -</option>';
								}
								
								?>
								<?php 

								$mydb->setQuery("SELECT * FROM `course`");
								$cur = $mydb->loadResultList();

								foreach ($cur as $result) {
								  echo '<option value='.$result->COURSE_ID.' >'.$result->COURSE_LEVEL.' </option>';

								}
								?>
								</select> 


				</td>
 
			</tr>
			<tr>
				<td><label>Username</label></td>
				<td colspan="2">
				  <input required="true" class="form-control input-md" id="USER_NAME" name="USER_NAME" placeholder="Username" type="text"value="<?php echo isset($_SESSION['USER_NAME']) ? $_SESSION['USER_NAME'] : ''; ?>">
				</td>
				<td><label>Password</label></td>
				<td colspan="2" class="password-container">
						<input required="true" class="form-control input-md" id="U_PASS1" name="PASS" placeholder="Password" type="password"value="<?php echo isset($_SESSION['PASS']) ? $_SESSION['PASS'] : ''; ?>">
						 <i class="far fa-eye" id="togglePassword1" style="margin-left: 0px; cursor: pointer; margin-top: 8px;"></i>
				</td>
			</tr>
			<tr>
				<td><label>Email Address</label></td>
				<td colspan="2">
				  <input required="true"  class="form-control input-md" id="EMAIL" name="EMAIL" placeholder="Email" type="email"value="<?php echo isset($_SESSION['EMAIL']) ? $_SESSION['EMAIL'] : ''; ?>">
				</td>
				<td><label>Upload Grade</label></td>
				<td colspan="2"><input  required="true" name="BIRTHCERT" class="form-control input-md" type="file"></td>
			</tr>
			<tr>
				<td><label>Guardian</label></td>
				<td colspan="2">
					<input class="form-control input-md" id="GUARDIAN" name="GUARDIAN" placeholder="Parents/Guardian Name" type="text"value="<?php echo isset($_SESSION['GUARDIAN']) ? $_SESSION['GUARDIAN'] : ''; ?>">
				</td>
				<td><label>Contact No.</label></td>
				<td colspan="2"><input required="true" class="form-control input-md" id="GCONTACT" name="GCONTACT" placeholder="09XXXXXXXXX" type="tel" pattern="[0-9]{11}" maxlength="11"  value="<?php echo isset($_SESSION['GCONTACT']) ? $_SESSION['GCONTACT'] : ''; ?>"></td>
			</tr>
			<tr>
			<td></td>
				<td colspan="5">	
					<button  class="btn btn-success btn-lg" name="transsubmit" type="submit">Submit</button>
				</td>
			</tr>
		</table>
	</div>
	</div>
</form>