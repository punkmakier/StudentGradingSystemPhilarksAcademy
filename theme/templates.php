<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php SiteTitle();?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo web_root; ?>img/school_seal_100x100.ico" rel="icon">
  <!--<link href="<?php echo web_root; ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Vendor CSS Files --> 
  <link href="<?php echo web_root; ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo web_root; ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo web_root; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo web_root; ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo web_root; ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo web_root; ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo web_root; ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
 
  <!-- Template Main CSS File -->
  <link href="<?php echo web_root; ?>assets/css/style.css" rel="stylesheet">
     <!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>admin/css/dataTables.bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">


  <!-- =======================================================
  * Template Name: Mentor - v4.9.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
 <style type="text/css">
.password-container{ 
  position: relative;
}
.password-container input[type="password"],
.password-container input[type="text"]{
  width: 100%;
  padding: 12px 36px 12px 12px;
  box-sizing: border-box;
}
.fa-eye{
  position: absolute;
  top: 28%;
  right: 4%;
  cursor: pointer;
  color: lightgray;
}
</style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"> 
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="<?php echo web_root; ?>" class="logo me-auto"><img src="<?php echo web_root;?>assets/img/about.jpg" alt="" class="img-fluid"></a>
      </h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a  class="<?php echo ($view=='')? 'active':'';?>" href="<?php echo web_root; ?>">Home</a></li> 
          <li> <a class="<?php echo ($view=='about')? 'active':'';?>" href="<?php echo web_root.'index.php?q=about'; ?>">About</a></li> 

       
          <li><a class="<?php echo ($view=='contact')? 'active':'';?>" href="<?php echo web_root.'index.php?q=contact'; ?>">Contact</a></li>
           <?php if (isset($_SESSION['IDNO'])) { ?>

          <?php     
          $student = New Student();
           $active_student = $student->single_student($_SESSION['IDNO']);
          ?>
             <li class="dropdown"><a class="<?php echo ($view=='profile')? 'active':'';?>"href="#" ><span><?php echo $active_student->FNAME . ' ' .$active_student->LNAME;?> </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="<?php echo ($view=='profile')? 'active':'';?>" href="<?php echo web_root;?>index.php?q=profile">Profile</a></li>
              <li><a href="<?php echo web_root;?>logout.php">Logout</a></li>
             
            </ul>
          </li>
       <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

       <a href="<?php echo web_root.'index.php?q=enrol'; ?>" class="get-started-btn">Enroll Now!!</a>
       <?php if (!isset($_SESSION['IDNO'])) { ?>
      <a href="<?php echo web_root.'index.php?q=login'; ?>" class="get-started-btn">Login</a> 
       <?php } ?>


    </div>
  </header><!-- End Header -->
  
  <main id="main" data-aos="fade-in">

  <?php
     require_once $content;
  ?>
  </main>
  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
        Copyright © 2022 <a href="https://jbsc.000webhostapp.com/arkchristianacademy/">Phil-Ark Christian Academy, Inc</a>
        </div>
        <div class="credits"> 
          Designed by Xena Paula Buenaagua, Darwin Vigas, Joebert Bernal
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo web_root?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo web_root?>assets/vendor/js/bootstrap.min.js"></script>

  <script src="<?php echo web_root?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo web_root?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo web_root?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo web_root?>assets/vendor/swiper/swiper-bundle.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

   <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.js"></script> 
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.date.extensions.js"></script> 
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.extensions.js"></script> 

  <!-- Metis Menu Plugin JavaScript --> 
  <!-- DataTables JavaScript -->
  <script src="<?php echo web_root; ?>js/jquery.dataTables.min.js"></script>
  <script src="<?php echo web_root; ?>js/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo web_root; ?>js/ekko-lightbox.js"></script>

  <script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo web_root; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
 
  <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

</body>

</html>


<script> 
$('#uploadPic').on('click', function () {
  
//  $("#myModal").modal("toggle");
$('#myModal').appendTo("body").modal('show');


});
   
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

 

$('.date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });

 
   

 $(document).ready(function() {  
         var t = $('#example').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],  
          // "sort": false,
        //ordering start at column 1
        "order": [[ 6, 'desc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();


    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#U_PASS'); 

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});



const togglePassword1 = document.querySelector('#togglePassword1');
  const password1 = document.querySelector('#U_PASS1'); 

  togglePassword1.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
    password1.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

  

} );


$("#btnSendMessage").click(function(){
  $(".loading").addClass("d-block");
})

$("#myTable").DataTable();
$("#CoursesSelect").on('change', function(){
  $('.dataTables_filter input').val(this.value)
})


  </script>     