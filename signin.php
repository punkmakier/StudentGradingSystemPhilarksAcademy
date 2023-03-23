<!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Login</h2>
        <p></p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
 <section id="events" class="events">
      <div class="container" data-aos="fade-up">

       <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
               <!--<div class="card-img">
                <img src="img/loginLogo.png" alt="...">
              </div>-->
              <div class="card-body">
                 <?php  check_message(); ?>
                  <form class="form-horizontal well" action="login.php" method="POST">
                      <div class="form-group">
                        <div class="col-md-12">
                          <label class="control-label" for=
                          "U_USERNAME">Username:</label> 
                                <input required="true"   id="U_USERNAME" name="U_USERNAME" placeholder="Username" type="text" class="form-control input" >  
                        </div> 
       
                        </div>
 
  
                      <div class="form-group">
                        <div class="col-md-12 ">
                          <label class="control-label" for=
                          "U_PASS">Password:</label> 
                           <div class="password-container">
                           <input required="true" name="U_PASS" id="U_PASS" placeholder="Password" type="password" class="form-control input ">
                            <i class="far fa-eye" id="togglePassword" style="margin-left: 0px; cursor: pointer;"></i>
                           </div>

                        </div> 
                      </div>
                        <br/>

                        <div class="form-group">
                        <div class="col-md-12"> 
                          <button type="submit" id="oldLogin" name="sidebarLogin"  style="background-color:#098744;color:#fff;margin-left: 20px;" class="btn btn-primary"><span class="glyphicon glyphicon-logged-in "></span>   Login</button> 
                           
                        </div>
                      </div>


                  </form>
              </div>

               <div class="card-footer">
                        <a href="reset-password.php">Forgot Password</a>
                    </div>
            </div>

          </div> 
          <div class="col-md-3"></div>
        </div>

      </div>
    </section><!-- End Events Section -->