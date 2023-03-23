<?php
require_once ("../../include/initialize.php");
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;

	case 'photos' :
	doupdateimage();
	break;
	case 'addgrade' :
	doUpdateGrades();
	break;
	
	case 'submitgrades' :
	doSubmitGrades();
	break;
	

 
	}
   
	function doInsert(){
		global $mydb;
		if(isset($_POST['save'])){
			$timf = substr($_POST['TIME_FROM'],0,2);
			$timt = substr($_POST['TIME_TO'],0,2);

			if(substr($_POST['TIME_FROM'],6,6) == "am" ){

				$query = "SELECT * FROM `tblschedule` WHERE `AMPM`='0' AND `sched_day`='".$_POST['sched_day']."' AND (`num_TIME_FROM` < '$timt' AND `num_TIME_TO` > '$timf' ) AND `INST_ID`='".$_POST['INST_ID']."' AND `COURSE_ID`='".$_POST['COURSE_ID']."'";
				$mydb->setQuery($query); 		  
				$numrow =$mydb->num_rows($mydb->executeQuery()); 
	
				if ($numrow > 0) {
					message("Teacher is unavailable or time schedule is conflict.","error");
					redirect('index.php?view=add');
				}
				else{
					$query1 = "SELECT * FROM `tblschedule` WHERE `AMPM`='0' AND `sched_day`='".$_POST['sched_day']."'  AND (`num_TIME_FROM` < '$timt' AND `num_TIME_TO` > '$timf' ) AND `sched_room`='".$_POST['sched_room']."' AND `SECTION`='".$_POST['SECTION']."'";
					$mydb->setQuery($query1); 		  
					$numrow1 =$mydb->num_rows($mydb->executeQuery()); 
					if ($numrow1 > 0) {
						message("Room or Section is already occupied.","error");
						redirect('index.php?view=add');
					}
					else{
						$nextyear =  date("Y") + 1;
						$currentyear =  date("Y");
			
						$sched = New Schedule(); 
						$sched->sched_time 		= $_POST['TIME_FROM'] .'-'.$_POST['TIME_TO'];
						$sched->TIME_FROM 		= $_POST['TIME_FROM'];
						$sched->TIME_TO 		= $_POST['TIME_TO'];
						$sched->num_TIME_FROM 		= substr($_POST['TIME_FROM'],0,2);
						$sched->num_TIME_TO 		= substr($_POST['TIME_TO'],0,2);
						$sched->AMPM 		= 0;
						// $sched->AMPM 			= $_POST['AMPM'];
						$sched->sched_day		= $_POST['sched_day']; 
						$sched->sched_semester 	= 'first';
						$sched->sched_sy		= $currentyear . '-'.$nextyear;  
						$sched->sched_room		= $_POST['sched_room'];
						$sched->SUBJ_ID			= $_POST['SUBJ_ID'];
						$sched->SECTION			= $_POST['SECTION'];
						$sched->COURSE_ID		= $_POST['COURSE_ID'];
						$sched->INST_ID 		= $_POST['INST_ID'];
						$sched->create();
						 message("New Schedule has been created successfully!", "success");
						redirect("index.php");	
					}
				}


			}else if(substr($_POST['TIME_FROM'],6,6) == "pm"){
				$query = "SELECT * FROM `tblschedule` WHERE `AMPM`='1' AND `sched_day`='".$_POST['sched_day']."' AND (`num_TIME_FROM` < '$timt' AND `num_TIME_TO` > '$timf' ) AND `INST_ID`='".$_POST['INST_ID']."' AND `COURSE_ID`='".$_POST['COURSE_ID']."'";
				$mydb->setQuery($query); 		  
				$numrow =$mydb->num_rows($mydb->executeQuery()); 
	
				if ($numrow > 0) {
					message("Teacher is unavailable or time schedule is conflict.","error");
					redirect('index.php?view=add');
				}
				else{
					$query1 = "SELECT * FROM `tblschedule` WHERE `AMPM`='1' AND `sched_day`='".$_POST['sched_day']."'  AND `COURSE_ID`='".$_POST['COURSE_ID']."'  AND (`num_TIME_FROM` < '$timt' AND `num_TIME_TO` > '$timf' ) AND `sched_room`='".$_POST['sched_room']."'";
					$mydb->setQuery($query1); 		  
					$numrow1 =$mydb->num_rows($mydb->executeQuery()); 
					if ($numrow1 > 0) {
						message("Room or Section is already occupied.","error");
						redirect('index.php?view=add');
					}
					else{
						$nextyear =  date("Y") + 1;
						$currentyear =  date("Y");
			
						$sched = New Schedule(); 
						$sched->sched_time 		= $_POST['TIME_FROM'] .'-'.$_POST['TIME_TO'];
						$sched->TIME_FROM 		= $_POST['TIME_FROM'];
						$sched->TIME_TO 		= $_POST['TIME_TO'];
						$sched->num_TIME_FROM 		= substr($_POST['TIME_FROM'],0,2);
						$sched->num_TIME_TO 		= substr($_POST['TIME_TO'],0,2);
						$sched->AMPM 		= 0;
						// $sched->AMPM 			= $_POST['AMPM'];
						$sched->sched_day		= $_POST['sched_day']; 
						$sched->sched_semester 	= 'first';
						$sched->sched_sy		= $currentyear . '-'.$nextyear;  
						$sched->sched_room		= $_POST['sched_room'];
						$sched->SUBJ_ID			= $_POST['SUBJ_ID'];
						$sched->SECTION			= $_POST['SECTION'];
						$sched->COURSE_ID		= $_POST['COURSE_ID'];
						$sched->INST_ID 		= $_POST['INST_ID'];
						$sched->create();
						 message("New Schedule has been created successfully!", "success");
						redirect("index.php");	
					}
				}

			}else{
				echo "<script>alert('Invalid set time schedule.')
					window.location.reload();
				</script>";
				
			}



			// $query = "SELECT * FROM tblschedule WHERE sched_day = '".$_POST['sched_day']."' AND (`num_TIME_FROM` < '$timf' AND `num_TIME_FROM` > '$timf') OR (num_TIME_TO > '$timt' AND num_TIME_TO < '$timt') AND `sched_room`='".$_POST['sched_room']."' AND `INST_ID`='".$_POST['INST_ID']."'";
			
			// $mydb->setQuery($query); 		  
			// $numrow =$mydb->num_rows($mydb->executeQuery()); 

			// if ($numrow > 0) {
			// 	message("Teacher is unavailable or Room is occupied or time schedule is conflict with other subjects.","error");
			// 	redirect('index.php?view=add');
			// }

			// else{
				// $nextyear =  date("Y") + 1;
				// $currentyear =  date("Y");
	
				// $sched = New Schedule(); 
				// $sched->sched_time 		= $_POST['TIME_FROM'] .'-'.$_POST['TIME_TO'];
				// $sched->TIME_FROM 		= $_POST['TIME_FROM'];
				// $sched->TIME_TO 		= $_POST['TIME_TO'];
				// $sched->num_TIME_FROM 		= substr($_POST['TIME_FROM'],0,2);
				// $sched->num_TIME_TO 		= substr($_POST['TIME_TO'],0,2);
				// // $sched->AMPM 			= $_POST['AMPM'];
				// $sched->sched_day		= $_POST['sched_day']; 
				// $sched->sched_semester 	= 'first';
				// $sched->sched_sy		= $currentyear . '-'.$nextyear;  
				// $sched->sched_room		= $_POST['sched_room'];
				// $sched->SUBJ_ID			= $_POST['SUBJ_ID'];
				// $sched->SECTION			= $_POST['SECTION'];
				// $sched->COURSE_ID		= $_POST['COURSE_ID'];
				// $sched->INST_ID 		= $_POST['INST_ID'];
				// $sched->create();
				//  message("New Schedule has been created successfully!", "success");
				// redirect("index.php");	
			// }


			
		// 	$sql1 = "SELECT * FROM tblschedule WHERE sched_day = '".$_POST['sched_day']."' AND `num_TIME_FROM`='".$timf."' AND `num_TIME_TO`='".$timt."'";
		// 	$mydb->setQuery($sql1); 		  
		// 	$result =$mydb->num_rows($mydb->executeQuery()); 
			
		// 	if($result > 0){
		// 		message("Time schedule is conflict","error");
		// 		redirect('index.php?view=add');
		// 	}
		// 	else{
		// 		$sql = "SELECT * FROM `tblschedule` 
		// WHERE SUBJ_ID ='".$_POST['SUBJ_ID']."' AND  `COURSE_ID`=".$_POST['COURSE_ID'];
		// $mydb->setQuery($sql); 		  
		//  $maxrows =$mydb->num_rows($mydb->executeQuery()); 

		// if ($maxrows > 0 ) {
		// 	# code...
		// 	message("The subject has already a schedule.","error");
		// 	redirect('index.php?view=add');
		// }else{
		// 	$query ="SELECT * 
		// FROM  `tblschedule` 
		// WHERE  `TIME_FROM` >=  '".$_POST['TIME_FROM']."'
		// AND  `TIME_TO` <=  '".$_POST['TIME_TO']."'
		// AND  `TIME_FROM` <=  `TIME_TO` AND sched_day='".$_POST['sched_day']."' 
		// AND (sched_room ='" .$_POST['sched_room'] . "' OR INST_ID=".$_POST['INST_ID'].")";
 
		
		// $mydb->setQuery($sql); 		  
		//  $numrow =$mydb->num_rows($mydb->executeQuery()); 


 		// if ($numrow > 0) {
 		// 	# code...
 		// 	message("Teacher is not available or Room is already occupied with the time you have set.","error");
		// 	redirect('index.php?view=add');
 		// }else{

		
			
		
				
 		// }


		// }
			// }



		

 

	 
		}

	}

	function doEdit(){
		global $mydb;

	if(isset($_POST['save'])){

			$nextyear =  date("Y") + 1;
			$currentyear =  date("Y");

			$sched = New Schedule(); 
			$sched->sched_time 		= $_POST['TIME_FROM'] .'-'.$_POST['TIME_TO'];
			$sched->TIME_FROM 		= $_POST['TIME_FROM'];
			$sched->TIME_TO 		= $_POST['TIME_TO']; 
			$sched->sched_day		= $_POST['sched_day'];  
			$sched->sched_room		= $_POST['sched_room'];
			$sched->SECTION			= $_POST['SECTION'];  
			$sched->SUBJ_ID			= $_POST['SUBJ_ID'];
			$sched->COURSE_ID		= $_POST['COURSE_ID'];
			$sched->INST_ID 		= $_POST['INST_ID'];
			$sched->update($_POST['schedID']);

			  message("Schedule has been updated!", "success");
			redirect("index.php");
		}
	}


	function doDelete(){
		global $mydb;

	 
		
				$id = 	$_GET['id'];

				$sched = New Schedule();
	 		 	$sched->delete($id);
			 
			message("Schedule already Deleted!","info");
			redirect('index.php');
		 
		
	}
 function doUpdateGrades(){
		global $mydb;

		if(isset($_POST['save'])){ 
			$remark = '';
			if($_POST['AVERAGE']>=75){
				$remark = 'Passed';
			}else{
				$remark = 'Failed';
			}

			$grade = New Grade(); 
			$grade->FIRST 				= $_POST['FIRSTGRADING'];
			$grade->SECOND				= $_POST['SECONDGRADING']; 
			$grade->THIRD				= $_POST['THIRDGRADING'];
			$grade->FOURTH 				= $_POST['FOURTHGRADING'];
			$grade->AVE					= $_POST['AVERAGE']; 
			$grade->REMARKS				= $remark;  
			$grade->update($_POST['GRADEID']);


			$studentsubject = New StudentSubjects(); 
			$studentsubject->AVERAGE	= $_POST['AVERAGE'];
			$studentsubject->OUTCOME 	=  $remark; 
			$studentsubject->updateSubject($_POST['SUBJ_ID'],$_POST['IDNO']);
 

			message("[". $_POST['SUBJ_CODE'] ."] has been updated!", "success");
			 redirect("index.php?view=grades&id=".$_POST['IDNO']);
		}
	}
	
	
	function doSubmitGrades(){
		global $mydb; 


		$student = New Student();   
		$student->ENROLLED =0;   
		$student->update($_GET['idno']);


	     message("Grades has been submitted!", "success");
		redirect("index.php?view=grades&id=".$_GET['idno']); 
	} 
 
 
?>