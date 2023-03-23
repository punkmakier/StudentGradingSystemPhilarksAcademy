<?php  

error_reporting(0);

     if (!isset($_SESSION['IDNO'])){
      redirect(web_root."index.php");
     }
 
  $student = New Student();
  $res = $student->single_student($_SESSION['IDNO']);
  
?>
 
<div class="row">
      <div class="col-lg-12"> 
            <h3 class="page-header">Student Subjects </h3>
       	 
       		</div>
        	<!-- /.col-lg-12 -->
			<?php 
			$sql = "SELECT * FROM `tblstudent` st, `grades` g,`subject` s ,studentsubjects ss
			WHERE st.`IDNO`=g.`IDNO` and g.`SUBJ_ID`=s.`SUBJ_ID`  and s.`SUBJ_ID`=ss.`SUBJ_ID` AND g.`IDNO`=ss.`IDNO`  AND g.`REMARKS` NOT IN ('Drop') and st.`IDNO`=".$_SESSION['IDNO'];
			// $sql = "SELECT * FROM `tblstudent` as st INNER JOIN `courses` as c ON st.`CourseID`=c.`CourseID` INNER JOIN  `grades` AS g ON st.`IDNO`=g.`IDNO` INNER JOIN `subject` AS s ON g.`SUBJ_ID`=s.`SUBJ_ID` INNER JOIN `studentsubjects` AS ss ON s.`SUBJ_ID`=ss.`SUBJ_ID` AND g.`IDNO`=ss.`IDNO WHERE g.`REMARKS` NOT IN ('Drop') and st.`IDNO`=".$_SESSION['IDNO']"
			  $mydb->setQuery($sql);

			  $rows = $mydb->num_rows($sql);
			if($rows > 0){
			
			?>
				
   		 	    <form action="controller.php?action=delete" Method="POST">   		
				<span>Course</span>
				<select name="" id="CoursesSelect" class="form-select mb-3" style="width: 30%;">
					<option value="Nursery 1">Nursery 1</option>
					<option value="Nursery 2">Nursery 2</option>
					<option value="Kindergarten">Kindergarten</option>
					<option value="Grade 1">Grade 1</option>
					<option value="Grade 2">Grade 2</option>
					<option value="Grade 3">Grade 3</option>
					<option value="Grade 4">Grade 4</option>
					<option value="Grade 5">Grade 5</option>
					<option value="Grade 6">Grade 6</option>
				</select>

				<table id="myTable" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr> 
				  		<th>Subject</th>
				  		<th>Description</th>  
				  		<th>Average</th>
				  		<th>Remarks</th>
				  		<th>Grade Level</th> 
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php  
				  	// `GRADE_ID`, `IDNO`, `SUBJ_ID`, `INST_ID`, `SYID`,
				  	//  `FIRST`, `SECOND`, `THIRD`, `FOURTH`, `AVE`, `DAY`, `G_TIME`, `ROOM`, `REMARKS`, `COMMENT`

						
							$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
							$course = New Course();
  							$singlecourse = $course->single_course($result->COURSE_ID);
				  		echo '<tr>';
				  		// echo '<td width="5%" align="center"></td>'; 
				  		echo '<td>'. $result->SUBJ_CODE.'</td>';
				  		echo '<td>'. $result->SUBJ_DESCRIPTION.'</td>'; 
				  		echo '<td>'. $result->AVE.'</td>'; 
				  		echo '<td>'. $result->REMARKS.'</td>'; 
				  		echo '<td>'. $singlecourse->COURSE_LEVEL.'</td>'; 
				  	
				  		 
				  		// echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result->SUBJ_ID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></span></a>
				  		// 			 <a title="Delete" href="controller.php?action=delete&id='.$result->SUBJ_ID.'" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o fw-fa"></span> </a>
				  		// 			 </td>';
				  		echo '</tr>';
				  	} 
						
				  		
				  	?>
					  <?php }else{
							echo "<h3 class='text-center mt-5 text-danger'>No grades available yet</h3>";
						}?>
				  </tbody>
				
				</table>
 
				<!-- <div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-default">New</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>
				
 --> 				

					
</form>
	

</div> <!---End of container-->