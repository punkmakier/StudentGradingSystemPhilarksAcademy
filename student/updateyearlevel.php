<br/>
<?php
 error_reporting(0);

$student = New Student();
$res = $student->single_student($_SESSION['IDNO']);

$studdetails = New StudentDetails();
$details = $studdetails->single_StudentDetails($_SESSION['IDNO']); 
?>
 
<form action="student/controller.php?action=edit" class="form-horizontal " method="post" >
	<div class="table-responsive">
	<div class="col-md-8"><h2>Update Accounts</h2></div> 
		<table class="table">
			<tr>
				<td><label>Id</label></td>
				<td >
					<input class="form-control input-md" readonly id="IDNO" name="IDNO" placeholder="Student Id" type="text" value="<?php echo isset($_SESSION['IDNO']) ? $_SESSION['IDNO'] : '' ?>">
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
				 <input class="form-control input-md" id="Suffix" name="Suffix" placeholder="Suffix" type="text" value="<?php echo $res->Suffix; ?>">
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
					 if ($res->SEX=='Female') {
					 	# code...
					 	echo '<input checked id="optionsRadios1" checked="true"  name="optionsRadios" type="radio" value="Female">Female 
						 <input id="optionsRadios2"  name="optionsRadios" type="radio" value="Male"> Male';
					 }else{
					 		echo '<input checked id="optionsRadios1" name="optionsRadios" type="radio" value="Female">Female 
						 <input id="optionsRadios2"  checked="true"  name="optionsRadios" type="radio" value="Male"> Male';
					 }
					?>
					</label>
				</td>
				<td    ><label>Date of birth</label></td>
				<td colspan="2"> 
				<div class="input-group" >
                  <input  required="true" name="BIRTHDATE" type="date" class="form-control input-md"  value="<?php echo date("Y-m-d", strtotime($res->BDAY)); ?>">
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
				<td colspan="14">
				  <input required="true"  class="form-control input-md" id="CONTACT" name="CONTACT" placeholder="Contact Number" type="tel" pattern="[0-9]{11}" maxlength="11"  value="<?php echo $res->CONTACT_NO; ?>">
			</td>
				  
			 
			</tr> 
			<tr>
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
					<input required="true"  class="form-control input-md" id="GUARDIAN" name="GUARDIAN" placeholder="Parents/Guardian Name" type="text"value="<?php echo $details->GUARDIAN; ?>">
				</td>
				<td><label>Contact No.</label></td>
				<td colspan="2"><input  required="true" class="form-control input-md" id="GCONTACT" name="GCONTACT" placeholder="Contact Number" type="text"value="<?php echo $details->GCONTACT; ?>"></td>
			</tr>
			<tr>
                <!--<td><label>Set New Username</label></td>
                <td colspan="2">
                  <input  class="form-control input-md" id="ACC_USERNAME" name="ACC_USERNAME" placeholder="Username" type="text"value="<?php echo $res->ACC_USERNAME; ?>">
                </td>
                <td><label>Set New Password</label></td>
                <td colspan="2" class="password-container"><input  class="form-control input-md" id="U_PASS" name="ACC_PASSWORD" placeholder="Set new Password" type="password" value="">
             		<i class="far fa-eye" id="togglePassword" style="margin-left: 0px; cursor: pointer;"></i></td>
              </tr>-->
			<tr>
			<tr>
				<td><label>Set New Email</label></td>
                <td colspan="5">
                  <input  class="form-control input-md" id="ACC_EMAIL" name="ACC_EMAIL" placeholder="Email" type="text"value="<?php echo $res->ACC_EMAIL; ?>">
                </td>
			</tr>
			<td></td>
				<td colspan="5">	
					<button class="btn btn-success btn-lg" name="save" type="submit">Save</button>
				</td>
			</tr>
		</table>
	</div>
</form>