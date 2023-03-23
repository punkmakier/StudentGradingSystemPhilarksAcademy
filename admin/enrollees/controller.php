<?php
require_once ("../../include/initialize.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	
case 'confirm' :
	doConfirm();
	break;
case 'doadd' :
	doAddsubject();
	break;
case 'removed' :
	doRemoveCart();
	break;
case 'addsubjecttrans' :
	doSubmitSubject();
	break;

case 'addcreditsubject' :
	doAddCreditSubject();
	break;
case 'reply' :
	doReply();
	break;
}
   
function doConfirm(){
global $mydb; 

$currentyear = date('Y');
$nextyear =  date('Y') + 1;
$sy = $currentyear .'-'.$nextyear;

	$_SESSION['SY'] = $sy;



		 
		 $sql = "SELECT * FROM tblstudent WHERE IDNO =" .$_GET['IDNO'];
		 $mydb->setQuery($sql); 		 
		 $studcourse = $mydb->loadSingleResult();
 
			$sql = "SELECT * FROM `subject` s, `course` c 
			WHERE s.COURSE_ID=c.COURSE_ID AND s.COURSE_ID=".$studcourse->COURSE_ID;
			$mydb->setQuery($sql);		 
			$resSubject = $mydb->loadResultList(); 
			foreach($resSubject as $row){

 					# code...
 					$studentsubject = New StudentSubjects();
					$studentsubject->IDNO 		= $_GET['IDNO'];
					$studentsubject->SUBJ_ID	= $row->SUBJ_ID;
					$studentsubject->LEVEL 		=  $studcourse->COURSE_ID; 
					$studentsubject->SY 		= $_SESSION['SY'];
					$studentsubject->ATTEMP 	= 1; 
					$studentsubject->create();


					$grade = New Grade();
					$grade->IDNO = $_GET['IDNO'];
					$grade->SUBJ_ID	 = $row->SUBJ_ID;;
					$grade->create();
 				}	
 			

				$sql = "INSERT INTO `schoolyr` (`AY`,   `COURSE_ID`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`) VALUES ('".$_SESSION['SY']."', '".$studcourse->COURSE_ID."','".$_GET['IDNO']."','ENROLLED','".date('Y-m-d')."','".date('Y-m-d')."','New');";
				 $mydb->setQuery($sql); 	 
				 $mydb->executeQuery();


				$query = "SELECT * FROM `tblstudent` WHERE `COURSE_ID`=".$studcourse->COURSE_ID;
				$mydb->setQuery($query); 		  
				$numrow =$mydb->num_rows($mydb->executeQuery()); 


				if ($numrow > 40) {
				# code...
				$student = New Student();  
				$student->NewEnrollees =0;  
				$student->ENROLLED =1;  
				$student->YEARLEVEL = $studcourse->COURSE_ID;
				$student->STUDSECTION = 2;
				$student->update($_GET['IDNO']);
			}else{
				$student = New Student();  
				$student->NewEnrollees =0;  
				$student->ENROLLED =1;  
				$student->YEARLEVEL = $studcourse->COURSE_ID;
				$student->STUDSECTION = 1;
				$student->update($_GET['IDNO']);
			}

		
 
			unset($_SESSION['SY']);

	
			require '../../phpmailer/src/Exception.php';
			require '../../phpmailer/src/PHPMailer.php';
			require '../../phpmailer/src/SMTP.php';

			$message = "Welcome to Phil-ark Christian Academy! We're thrilled to have you as part of our academic community. Your registration and required documentation have been accepted, and we're excited to help you achieve your academic and personal goals. As a new student, you'll have access to a variety of resources, including academic support services, extracurricular activities, and student organizations. Our faculty and staff are committed to providing you with a high-quality education and a rewarding experience.";
			$subject = "Approved";

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
			$mail->AddAddress($studcourse->ACC_EMAIL);
			$mail->SetFrom("philarkchristianacademy.inc1@gmail.com", "Philark Christian Academy Admin");
			$mail->Subject = $subject;
			$mail->Body = $message;
		    if($mail->send()){
				echo "<script>alert('Regular loads has been added to the new enrollees!')</script>";
				redirect("index.php?view=success&IDNO=".$_GET['IDNO']);

		
			}else{
				echo "<script>alert('Something went wrong...')</script>";
				redirect("index.php?view=success&IDNO=".$_GET['IDNO']);

			}
			
		 
	}
	 function doAddCreditSubject(){
global $mydb;
 
	 		 
	 		$subjid  = $_POST['SUBJ_ID'];
	 		$idno    = $_POST['IDNO'];
	 		$first   = $_POST['FIRSTGRADING'];
	 		$second  = $_POST['SECONDGRADING'];
	 		$third   = $_POST['THIRDGRADING'];
	 		$fourth  = $_POST['FOURTHGRADING'];
	 		$ave 	 = $_POST['AVERAGE'];
	 		$SEMESTER = $_POST['SEMESTER'];


	 		$sql = "SELECT * FROM studentsubjects WHERE IDNO = ". $idno ." AND SUBJ_ID=".$subjid;
	 		$result = mysqli_query($mydb->conn,$sql) or die(mysqli_error($mydb->conn));
	 		$maxrows = mysqli_num_rows($result);

	 		if ($maxrows > 0) {
	 			# code...
	 			message("Subject has already credited.", "error");
				redirect("index.php?view=addCredit&IDNO=".$idno);
	 		}else{

	 			if ($ave > 74.4) {
	 			# code...
		 

				$currentyear = date('Y');
				$nextyear =  date('Y') + 1;
				$sy = $currentyear .'-'.$nextyear;
				$_SESSION['SY'] = $sy;
 
				$studentsubject = New StudentSubjects();
				$studentsubject->IDNO 		= $idno;
				$studentsubject->SUBJ_ID	= $subjid;
				$studentsubject->LEVEL 		= 1;
				$studentsubject->SEMESTER 	= $SEMESTER;
				$studentsubject->SY 		= $_SESSION['SY'];
				$studentsubject->ATTEMP 	= 1; 
				$studentsubject->create();


				$grade = New Grade();
				$grade->IDNO 	 = $idno;
				$grade->SUBJ_ID	 = $subjid;
				$grade->FIRST 	 = $first;
				$grade->SECOND 	 = $second;
				$grade->THIRD 	 = $third;
				$grade->FOURTH 	 = $fourth;
				$grade->AVE 	 = $ave;
				$grade->create();
 
				unset($_SESSION['SY']);

				message("Subject has been credited.", "success");
				redirect("index.php?view=addCredit&IDNO=".$idno);
			 	}else{

			 		$currentyear = date('Y');
					$nextyear =  date('Y') + 1;
					$sy = $currentyear .'-'.$nextyear;
					$_SESSION['SY'] = $sy;
	 
					$studentsubject = New StudentSubjects();
					$studentsubject->IDNO 		= $idno;
					$studentsubject->SUBJ_ID	= $subjid;
					$studentsubject->LEVEL 		= 1;
					$studentsubject->SEMESTER 	= $SEMESTER;
					$studentsubject->SY 		= $_SESSION['SY'];
					$studentsubject->ATTEMP 	= 1; 
					$studentsubject->create();


					$grade = New Grade();
					$grade->IDNO 	 = $idno;
					$grade->SUBJ_ID	 = $subjid;
					$grade->FIRST 	 = $first;
					$grade->SECOND 	 = $second;
					$grade->THIRD 	 = $third;
					$grade->FOURTH 	 = $fourth;
					$grade->AVE 	 = $ave;
					$grade->create();
	 
					unset($_SESSION['SY']);


			 		message("The subject does not credit.", "error");
					redirect("index.php?view=addCredit&IDNO=".$idno);
			 	}

	 		}
	 		
 
	 }



	function doAddsubject(){
global $mydb;
if (isset($_GET['id'])) { 




$subject = New Subject();
$subj = $subject->single_subject($_GET['id']); 

	$sql = "SELECT * FROM `grades` g, `subject` s WHERE g.`SUBJ_ID`=s.`SUBJ_ID` AND `SUBJ_CODE`='" .$subj->PRE_REQUISITE. "' AND AVE < 75 AND IDNO=". $_GET['IDNO'];
 	$result = mysqli_query($mydb->conn,$sql) or die(mysqli_error($mydb->conn));
 	$row = mysqli_fetch_assoc($result);

 	if (isset($row['SUBJ_CODE'])) {
 	?>
		<script type="text/javascript">
			alert('You must take the pre-requisite first before taking up this subject.')
			window.location = "index.php?view=addCredit&IDNO=<?php echo  $_GET['IDNO']; ?>";
		</script>
 	<?php
	 }else{


	$sql = "SELECT * FROM `grades`  WHERE REMARKS !='Drop' AND `SUBJ_ID`='" .$_GET['id']. "'   AND IDNO=". $_GET['IDNO'];
	$result = mysqli_query($mydb->conn,$sql) or die(mysqli_error($mydb->conn));
 	$row = mysqli_fetch_assoc($result);



 		if (isset($row['SUBJ_ID'])) {
			# code...
		if ($row['AVE'] > 0 && $row['AVE'] < 75 ) {
			# code...
			?>
			<script type="text/javascript">
				alert('This subject is under taken.')
				window.location = "index.php?view=addCredit&IDNO=<?php echo  $_GET['IDNO']; ?>";
			</script>
	 	<?php
		}elseif ($row['AVE']==0) {
			# code...
			?>
			<script type="text/javascript">
				alert('This subject is under taken.')
			window.location = "index.php?view=addCredit&IDNO=<?php echo  $_GET['IDNO']; ?>";
			</script>
	 	<?php
		}elseif ($row['AVE'] > 74) {
			# code...
		
		?>
			<script type="text/javascript">
				alert('You have already taken this subject.')
				window.location = "index.php?view=addCredit&IDNO=<?php echo  $_GET['IDNO']; ?>";
			</script>
	 	<?php
	 }
	}else{
		 
				adminaddtocart($_GET['id']);

			 	redirect(web_root."admin/enrollees/index.php?view=addCredit&IDNO=".$_GET['IDNO']);
		 
	} 
	}
 }
}

		
	 

	function doDelete(){
global $mydb;
		
		// if (isset($_POST['selector'])==''){
		// message("Select the records first before you delete!","info");
		// redirect('index.php');
		// }else{

		// $id = $_POST['selector'];
		// $key = count($id);

		// for($i=0;$i<$key;$i++){

		// 	$course = New User();
		// 	$course->delete($id[$i]);

		
			$id = 	$_GET['id'];

			$course = New Course();
 		 	$course->delete($id);
			 
			message("Course already Deleted!","info");
			redirect('index.php');
		// }
		// }

		
	}

	 function doRemoveCart(){
		global $mydb;
	 	// adminremovetocart($_GET['IDNO']);
		$idno = $_GET['IDNO'];
		$sql = "DELETE FROM tblstudent WHERE IDNO= '$idno'";
	 	$strRes = mysqli_query($mydb->conn,$sql) or die(mysqli_error($mydb->conn));
		if($strRes){
			echo "<script>alert('Successfully deleted')</script>";
		}
		redirect(web_root."admin/enrollees/index.php?removed");

	 }


	 function doSubmitSubject(){
		global $mydb;

	 	 if (isset($_SESSION['admingvCart'])) {
				 	# code...
	 	 	$sql = "SELECT * FROM tblstudent WHERE IDNO=" .$_POST['IDNO'];
	 	 	$strRes = mysqli_query($mydb->conn,$sql) or die(mysqli_error($mydb->conn));
	 	 	$cid = mysqli_fetch_assoc($strRes);


	 	 	$sql = "SELECT * FROM course WHERE COURSE_ID=" . $cid['COURSE_ID'];
	 	 	$strRes = mysqli_query($mydb->conn,$sql) or die(mysqli_error($mydb->conn));
	 	 	$courseLevel = mysqli_fetch_assoc($strRes);

	 	 	$sem = new Semester();
			$resSem = $sem->single_semester();
			$_SESSION['SEMESTER'] = $resSem->SEMESTER; 


			$currentyear = date('Y');
			$nextyear =  date('Y') + 1;
			$sy = $currentyear .'-'.$nextyear;
			$_SESSION['SY'] = $sy;


		  
				
					$count_cart = count($_SESSION['admingvCart']);

			                for ($i=0; $i < $count_cart  ; $i++) {  

			                    $query = "SELECT * FROM `subject` s, `course` c WHERE s.COURSE_ID=c.COURSE_ID AND SUBJ_ID=" . $_SESSION['admingvCart'][$i]['subjectid'];
			                   	$resQuery = mysqli_query($mydb->conn,$query) or die(mysqli_error($mydb->conn));

			                   	while ($row = mysqli_fetch_array($resQuery)) {
			                   		# code...
			                   

			                     // $mydb->setQuery($query);
			                     // $cur = $mydb->loadResultList(); 
			                     //  foreach ($cur as $result) { 

			                      	$sql = "SELECT * FROM `studentsubjects` WHERE  `IDNO`=". $_POST['IDNO']." AND `SUBJ_ID`=".$row['SUBJ_ID'];
			                     	$resQuery = mysqli_query($mydb->conn,$query) or die(mysqli_error($mydb->conn));

			                   	while ($rows = mysqli_fetch_array($resQuery)) {

			                      // 	 $mydb->setQuery($query);
				                     // $cur = $mydb->loadResultList(); 
				                     //  foreach ($cur as $result) { 
				                      	
				                      	if (file_exists($rows['SUBJ_ID'])) {
				                      		# code...
				                      		$studentsubject = New StudentSubjects();
											$studentsubject->ATTEMP 	= $studentsubject->ATTEMP + 1; 
											$studentsubject->LEVEL 		= $courseLevel['COURSE_LEVEL'];
											$studentsubject->SEMESTER 	= $_SESSION['SEMESTER'];
											$studentsubject->SY 		= $_SESSION['SY'];
											$studentsubject->updateSubject($result->SUBJ_ID,$_POST['IDNO']);
				                      	}else{

				                      		$studentsubject = New StudentSubjects();
											$studentsubject->IDNO 		= $_POST['IDNO'];
											$studentsubject->SUBJ_ID	= $rows['SUBJ_ID'];
											$studentsubject->LEVEL 		= $courseLevel['COURSE_LEVEL'];
											$studentsubject->SEMESTER 	= $_SESSION['SEMESTER'];
											$studentsubject->SY 		= $_SESSION['SY'];
											$studentsubject->create();

											$grade = New Grade();
											$grade->IDNO     = $_POST['IDNO'];
											$grade->SUBJ_ID	 = $row['SUBJ_ID'];
											$grade->SEMS     = $_SESSION['SEMESTER'];
											$grade->create();

				                      	}
				                      }
 
									

									$sql = "INSERT INTO `schoolyr`
									(`AY`, `SEMESTER`, `COURSE_ID`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`)
									VALUES ('".$_SESSION['SY']."','".$_SESSION['SEMESTER']."','".$row['COURSE_ID']."','".$_POST['IDNO']."','ENROLLED','".date('Y-m-d')."','".date('Y-m-d')."','New');";
									$res = mysqli_query($mydb->conn,$sql) or die(mysqli_error($mydb->conn));
			                      }      
			                } 


							$query = "SELECT * FROM `tblstudent` WHERE `COURSE_ID`=". $cid['COURSE_ID'];
							$result = mysqli_query($mydb->conn,$query) or die(mysqli_error($mydb->conn));
							$numrow = mysqli_num_rows($result);
							// $maxrows = count($numrow);

			                if ($numrow > 40) {
								# code...
								$student = New Student();  
								$student->NewEnrollees =0;  
								$student->YEARLEVEL =  $courseLevel['COURSE_LEVEL'];
								$student->STUDSECTION = 2;
								$student->update($_POST['IDNO']);
							}else{
								$student = New Student();  
								$student->NewEnrollees =0;  
								$student->YEARLEVEL =  $courseLevel['COURSE_LEVEL'];
								$student->STUDSECTION = 1;
								$student->update($_POST['IDNO']);
							}

				  	// 		$student = New Student();  
							// $student->NewEnrollees =0;  
							// $student->YEARLEVEL = $courseLevel['COURSE_LEVEL'];
							// $student->update($_POST['IDNO']);
			              

			              

							message("Load has been added to the transferee enrollees!", "success");
							redirect("index.php?view=success&IDNO=".$_POST['IDNO']);
			
			              }
	 }

	 function doReply(){
		global $mydb; 

$currentyear = date('Y');
$nextyear =  date('Y') + 1;
$sy = $currentyear .'-'.$nextyear;

	$_SESSION['SY'] = $sy;



		 
		 $sql = "SELECT * FROM tblstudent WHERE IDNO =" .$_GET['IDNO'];
		 $mydb->setQuery($sql); 		 
		 $studcourse = $mydb->loadSingleResult();
 
			$sql = "SELECT * FROM `subject` s, `course` c 
			WHERE s.COURSE_ID=c.COURSE_ID AND s.COURSE_ID=".$studcourse->COURSE_ID;
			$mydb->setQuery($sql);		 
			$resSubject = $mydb->loadResultList(); 
			foreach($resSubject as $row){

 					# code...
 					$studentsubject = New StudentSubjects();
					$studentsubject->IDNO 		= $_GET['IDNO'];
					$studentsubject->SUBJ_ID	= $row->SUBJ_ID;
					$studentsubject->LEVEL 		=  $studcourse->COURSE_ID; 
					$studentsubject->SY 		= $_SESSION['SY'];
					$studentsubject->ATTEMP 	= 1; 
					$studentsubject->create();


					$grade = New Grade();
					$grade->IDNO = $_GET['IDNO'];
					$grade->SUBJ_ID	 = $row->SUBJ_ID;;
					$grade->create();
 				}	
 			

				$sql = "INSERT INTO `schoolyr` (`AY`,   `COURSE_ID`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`) VALUES ('".$_SESSION['SY']."', '".$studcourse->COURSE_ID."','".$_GET['IDNO']."','ENROLLED','".date('Y-m-d')."','".date('Y-m-d')."','New');";
				 $mydb->setQuery($sql); 	 
				 $mydb->executeQuery();


				$query = "SELECT * FROM `tblstudent` WHERE `COURSE_ID`=".$studcourse->COURSE_ID;
				$mydb->setQuery($query); 		  
				$numrow =$mydb->num_rows($mydb->executeQuery()); 


				if ($numrow > 40) {
				# code...
				$student = New Student();  
				$student->NewEnrollees =0;  
				$student->ENROLLED =1;  
				$student->YEARLEVEL = $studcourse->COURSE_ID;
				$student->STUDSECTION = 2;
				$student->update($_GET['IDNO']);
			}else{
				$student = New Student();  
				$student->NewEnrollees =0;  
				$student->ENROLLED =1;  
				$student->YEARLEVEL = $studcourse->COURSE_ID;
				$student->STUDSECTION = 1;
				$student->update($_GET['IDNO']);
			}

		
 
			unset($_SESSION['SY']);

	
			require '../../phpmailer/src/Exception.php';
			require '../../phpmailer/src/PHPMailer.php';
			require '../../phpmailer/src/SMTP.php';

			$message = "Please resubmit a higher quality picture of your documents as the one you provided does not meet our clarity and quality requirements. A clear and recognizable image is necessary to accurately and efficiently process your application. The new picture should be in color and taken against a light background, clearly showing your full face without any obstructions such as glasses or hats. Additionally, it must be in focus and of sufficient quality for us to verify your identity. To avoid delays, please submit the new picture as soon as possible by uploading it to the application portal. If you have any questions, please don't hesitate to contact us. Thank you for your attention to this matter.";
			$subject = "Resubmit Your Documents";

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
			$mail->AddAddress($studcourse->ACC_EMAIL);
			$mail->SetFrom("philarkchristianacademy.inc1@gmail.com", "Philark Christian Academy Admin");
			$mail->Subject = $subject;
			$mail->Body = $message;
		    if($mail->send()){
				echo "<script>alert('Message Successfully Sent...')</script>";
				redirect("index.php?view=success&IDNO=".$_GET['IDNO']);

		
			}else{
				echo "<script>alert('Something went wrong...')</script>";
				redirect("index.php?view=success&IDNO=".$_GET['IDNO']);

			}
	 }
?>