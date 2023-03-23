<?php
	function strip_zeros_from_date($marked_string="") {
		//first remove the marked zeros
		$no_zeros = str_replace('*0','',$marked_string);
		$cleaned_string = str_replace('*0','',$no_zeros);
		return $cleaned_string;
	}
	function redirect_to($location = NULL) {
		if($location != NULL){
			header("Location: {$location}");
			exit;
		}
	}
	function redirect($location=Null){
		if($location!=Null){
			echo "<script>
					window.location='{$location}'
				</script>";	
		}else{
			echo 'error location';
		}
		 
	}
	function output_message($message="") {
	
		if(!empty($message)){
		return "<p class=\"message\">{$message}</p>";
		}else{
			return "";
		}
	}
	function date_toText($datetime=""){
		$nicetime = strtotime($datetime);
		return strftime("%B %d, %Y at %I:%M %p", $nicetime);	
					
	}
	function __autoload_($class_name) {
		$class_name = strtolower($class_name);
		$path = LIB_PATH.DS."{$class_name}.php";
		if(file_exists($path)){
			require_once($path);
		}else{
			die("The file {$class_name}.php could not be found.");
		}
					
	}
	spl_autoload_register('__autoload_');

	function currentpage_public(){
		$this_page = $_SERVER['SCRIPT_NAME']; // will return /path/to/file.php
	    $bits = explode('/',$this_page);
	    $this_page = $bits[count($bits)-1]; // will return file.php, with parameters if case, like file.php?id=2
	    $this_script = $bits[0]; // will return file.php, no parameters*/
		 return $bits[2];
	  
	}

	function currentpage_admin(){
		$this_page = $_SERVER['SCRIPT_NAME']; // will return /path/to/file.php
	    $bits = explode('/',$this_page);
	    $this_page = $bits[count($bits)-1]; // will return file.php, with parameters if case, like file.php?id=2
	    $this_script = $bits[0]; // will return file.php, no parameters*/
		 return $bits[4];
	  
	}
  // echo "string " .currentpage_admin()."<br/>";

	function curPageName() {
 return substr($_SERVER['REQUEST_URI'], 21, strrpos($_SERVER['REQUEST_URI'], '/')-24);
}

  // echo "The current page name is ".curPageName();
	 
  function SiteTitle()
	{
		global $mydb;
		$title='';

		$sql = "SELECT * FROM `tblsitesettings` WHERE `Type`='SiteTitle'";
		$mydb->setQuery($sql);
		$maxrow=$mydb->num_rows($mydb->executeQuery());
		if($maxrow > 0){

			$site = $mydb->loadSingleResult();
			echo $title = $site->Description;
		}else{
			echo $title = '';
		}

		return $title;
	}
	
	function validateGradeLevel($studentGradeLevel,$studentID){ 
	global $mydb; 
	$mydb->setQuery("SELECT SUM(`AVERAGE`) as overallgrades,count(*) as num_subject FROM `studentsubjects` ss ,subject s WHERE ss.SUBJ_ID=s.SUBJ_ID AND COURSE_ID='{$studentGradeLevel}' AND IDNO='{$studentID}'");
  $studgrades = $mydb->loadSingleResult();

  $ave = $studgrades->overallgrades / $studgrades->num_subject;

    if ($ave > 74) {
    	// code...
			$mydb->setQuery("SELECT *  FROM  `course` WHERE COURSE_ID > '{$studentGradeLevel}' LIMIT 1");
		  $result = $mydb->loadSingleResult();
		  $gradeLevel = $result->COURSE_ID;

    }else{
    	$mydb->setQuery("SELECT *  FROM  `course` WHERE COURSE_ID = '{$studentGradeLevel}' LIMIT 1");
		  $result = $mydb->loadSingleResult();
		  $gradeLevel = $result->COURSE_ID;
    }

    
  return $gradeLevel;
}
		
?>