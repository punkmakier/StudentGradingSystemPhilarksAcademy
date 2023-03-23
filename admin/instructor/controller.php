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
  
 
	}
   
	function doInsert(){
	    
	    
		if(isset($_POST['save'])){


		if ($_POST['INST_NAME'] == "" OR $_POST['INST_MAJOR'] == "" OR $_POST['INST_CONTACT'] == "" ) {
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	
			$inst = New Instructor(); 
			// SELECT `INST_ID`, `INST_NAME`, `INST_MAJOR`, `INST_CONTACT`, `INST_Username`, `INST_Password` FROM `tblinstructor` WHERE 1 
			$maxrow = $inst->find_all_instructor($_POST['INST_NAME']);
			if($maxrow > 0){ 
 
			message("Account already exist!", "error");
			redirect("index.php");
			    
			}else{
			$inst->INST_NAME 	= $_POST['INST_NAME'];
			$inst->INST_MAJOR	= $_POST['INST_MAJOR']; 
			$inst->INST_CONTACT	= $_POST['INST_CONTACT']; 
			$inst->INST_Username	= $_POST['INST_Username']; 
			$inst->INST_Password	= sha1($_POST['INST_Password']); 
			$inst->create();
 
			message("New  instructor created successfully!", "success");
			redirect("index.php");
			    
			}
			
		}
		}

	}

	function doEdit(){
	if(isset($_POST['save'])){

		if ($_POST['INST_NAME'] == "" OR $_POST['INST_MAJOR'] == "" OR $_POST['INST_CONTACT'] == "" ) {
			message("All field is required!","error");
			redirect('index.php?view=edit&id='.$_POST['INST_ID']);
		}else{

 
			$inst = New Instructor();
			$inst->INST_NAME 	= $_POST['INST_NAME'];
			$inst->INST_MAJOR	= $_POST['INST_MAJOR']; 
			$inst->INST_CONTACT	= $_POST['INST_CONTACT']; 
			$inst->INST_Username	= $_POST['INST_Username']; 
			$inst->INST_Password	= sha1($_POST['INST_Password']); 
			$inst->update($_POST['INST_ID']);


		 
			message("Instructor has been updated!", "success");
			redirect("index.php");
	 
 		 }

		}
	}


	function doDelete(){
	 	$id = 	$_GET['id'];

				$inst = New Instructor();
	 		 	$inst->delete($id);
			 
			message("Instructor already Deleted!","info");
			redirect('index.php');
		 
		
	}
  
 
?>