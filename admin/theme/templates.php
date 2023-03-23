<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $title;?> | <?php SiteTitle();?></title>

  <link href="<?php echo web_root; ?>img/school_seal_100x100.ico" rel="icon">

     <!-- Bootstrap Core CSS -->
<link href="<?php echo web_root; ?>admin/css/bootstrap.min.css" rel="stylesheet">


<script src="<?php echo web_root; ?>admin/select2/select2.min.css"></script> 
<!-- MetisMenu CSS -->
<link href="<?php echo web_root; ?>admin/css/metisMenu.min.css" rel="stylesheet">

<!-- Timeline CSS -->
<link href="<?php echo web_root; ?>admin/css/timeline.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo web_root; ?>admin/css/sb-admin-2.css" rel="stylesheet">

<!-- Morris Charts CSS -->

<link href="<?php echo web_root; ?>admin/css/morris.css" rel="stylesheet">

<!-- Custom Fonts -->
<!-- <link href="<?php echo web_root; ?>admin/font/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

<link href="<?php echo web_root; ?>admin/font/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- DataTables CSS -->
<link href="<?php echo web_root; ?>admin/css/dataTables.bootstrap.css" rel="stylesheet">

<!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>css/datepicker.css" rel="stylesheet" media="screen">

<link href="<?php echo web_root; ?>admin/css/costum.css" rel="stylesheet">
<link href="<?php echo web_root; ?>css/ekko-lightbox.css" rel="stylesheet">


</head>


<?php


admin_confirm_logged_in();

  $sql = "SELECT count(*) as 'enrollees' FROM tblstudent WHERE NewEnrollees=1";
  $mydb->setQuery($sql); 
  $enrollees = $mydb->loadSingleResult(); 
 


   
  ?> 
 <?php
if (isset($_SESSION['admingvCart'])){
  if (count($_SESSION['admingvCart'])>0) {
    $cart = '<span class="carttxtactive">('.count($_SESSION['admingvCart']) .')</span>';
  } 
 
} 
?>
      
<body >

   <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top  " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"  href="<?php echo web_root; ?>admin/index.php" > 
                <img src="<?php echo web_root;?>assets/img/about.jpg" height="23">
                <?php SiteTitle();?>
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right"> 

                 <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Registrar') {   ?>
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-plus fa-fw"></i> New  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo web_root; ?>admin/subject/index.php?view=add"><i class="fa fa-book fa-fw"></i> Subject</a>
                        </li> 
                        </li>
                        <li><a href="<?php echo web_root; ?>admin/course/index.php?view=add"><i class="fa  fa-graduation-cap fa-fw"></i> Grade Level</a>
                        <!-- <li><a href="<?php echo web_root; ?>admin/instructor/index.php?view=add"><i class="fa  fa-user fa-fw"></i>Set Subject to Instructor</a> -->
                        </li>
                            <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator') {   ?>
                         <li><a href="<?php echo web_root; ?>admin/user/index.php?view=add"><i class="fa fa-user  fa-fw"></i> User</a>
                            </li>
                        <?php }?>
                        
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            <?php } ?>
<?php
 $user = New User();
$singleuser = $user->single_user($_SESSION['ACCOUNT_ID']);

?> 
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>Hi, <?php echo $_SESSION['ACCOUNT_NAME']; ?>  
                            
                    </a>
                    <ul class="dropdown-menu dropdown-acnt" style="width: 300px;">

                           <div class="divpic"> 
                            <a href="" data-target="#usermodal"  data-toggle="modal" > 
                                <img title="profile image" width="70" height="70" src="loginLogo.png">  
                            </a>
                          </div>
                    

                      <div class="divtxt">
                         <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Registrar') {   ?>
                        <li><a href="<?php echo web_root; ?>admin/user/index.php?view=edit&id=<?php echo $_SESSION['ACCOUNT_ID']; ?>"> <?php echo $_SESSION['ACCOUNT_NAME']; ?> </a></li>
                      <li><a title="Edit" href="<?php echo web_root; ?>admin/user/index.php?view=edit&id=<?php echo $_SESSION['ACCOUNT_ID']; ?>"  >Edit My Profile</a></li>
                      <?php }else{ ?>
                           <li><a href="<?php echo web_root; ?>admin/instructor/index.php?view=edit&id=<?php echo $_SESSION['ACCOUNT_ID']; ?>"> <?php echo $_SESSION['ACCOUNT_NAME']; ?> </a></li>
                      <li><a title="Edit" href="<?php echo web_root; ?>admin/instructor/index.php?view=edit&id=<?php echo $_SESSION['ACCOUNT_ID']; ?>"  >Edit My Profile</a>
                                    
                        </li>
                           <?php } ?>
                           <li><a href="<?php echo web_root; ?>admin/logout.php"><i class="fa fa-sign-out fa-fw"></i> Log Out</a>
                        </li> 
                  </div>
                     
                         
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul> 
            <!-- /.navbar-top-links -->
            <br/>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                     <!--    <li class="sidebar-search">
                        <form action="index.php?page=2" method="post">
                           <div class="input-group custom-search-form">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                            </span>
                            </div>
                        </form>
                         
                         
                        </li> -->
   <!-- /input-group -->
                        <li>
                            <a href="<?php echo web_root; ?>admin/index.php"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>

                         <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Registrar') {   ?>
                         <li>
                             <a href="<?php echo web_root; ?>admin/enrollees/index.php" ><i class="fa fa-calendar fa-fw"></i>  New Enrollees 
                             <label class="label pull-right label-primary"><?php echo isset($enrollees->enrollees) ? $enrollees->enrollees : 0; ?></label> </a>
                              
                        </li>
                    <?php } ?> 
                        <!--<li>-->
                        <!--     <a href="<?php echo web_root; ?>admin/schedule/index.php" ><i class="fa fa-calendar fa-fw"></i>  Schedule </a>-->
            
                        <!--</li>-->
                             <li> 
                            <a href="#"><i class="fa  fa-calendar fa-fw"></i>Manage Schedule <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level"> 
                                <li>
                                     <a href="<?php echo web_root; ?>admin/schedule/index.php" ><i class="fa  fa-circle-o fa-fw"></i>Schedule </a>
                    
                                </li>
                                <li>
                                     <a href="<?php echo web_root; ?>admin/classroom/index.php"><i class="fa fa-circle-o fa-fw"></i>Print Schedule </a>
                   
                                </li>  
                              
                            </ul>
                            <!-- /.nav-third-level -->
                        </li>
                   
                      <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator') {   ?>
                        <li>
                             <a href="<?php echo web_root; ?>admin/student/index.php" ><i class="fa fa-group fa-fw"></i>  Students </a>
            
                        </li>
                    <?php } ?>
                        
                          
                           <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Registrar') {   ?>
                           <li> 
                            <a href="#"><i class="fa  fa-gear fa-fw"></i> Maintenance <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level"> 
                                <li>
                                     <a href="<?php echo web_root; ?>admin/course/index.php" ><i class="fa  fa-graduation-cap fa-fw"></i>Grade Level </a>
                    
                                </li>
                                <li>
                                     <a href="<?php echo web_root; ?>admin/subject/index.php"><i class="fa fa-book fa-fw"></i>Subjects </a>
                   
                                </li> 
                                <li>
                                     <a href="<?php echo web_root; ?>admin/instructor/index.php" ><i class="fa fa-group fa-fw"></i>Teacher </a>
                    
                                </li> 
                                <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator') {   ?>
                                <li>
                                    <a href="<?php echo web_root; ?>admin/user/index.php" ><i class="fa fa-user fa-fw"></i> Users </a>
                                  
                                </li>
                                <?php } ?>
                              
                            </ul>
                            <!-- /.nav-third-level -->
                        </li>
                         <?php }   ?>

                             <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator' || $_SESSION['ACCOUNT_TYPE']=='Registrar') {   ?>

                           <li>
                            <!-- <a href="<?php echo web_root; ?>admin/report/index.php" ><i class="fa  fa-file-text fa-fw"></i> Report </a> -->
                            <a href="#"><i class="fa  fa-file-text fa-fw"></i> Report <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo web_root; ?>admin/report/index.php?view=studentlist"><i class="fa fa-circle fa-fw"></i> Students</a>
                                    <!-- <ul  class="nav nav-third-level">
                                        <li>List of Student</li>
                                    </ul> -->
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-circle fa-fw"></i> Class List  <span class="fa arrow"></span></a>
                                     <ul  class="nav nav-third-level">
                                        <li><a href="<?php echo web_root; ?>admin/report/index.php?view=classrecord"><i class="fa fa-circle-o fa-fw"></i>Student List per Teacher </a></li>
                                        <li><a href="<?php echo web_root; ?>admin/report/index.php?view=perGradeLevel" ><i class="fa fa-circle-o fa-fw"></i>Students List per Grade</a></li>
                                   
                                    </ul>
                                </li> 
                                <li>
                                    <a href="<?php echo web_root; ?>admin/report/index.php?view=log"><i class="fa fa-circle fa-fw"></i> System Log</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-third-level -->
                        </li>
                    <?php } ?>
                        <?php if ($_SESSION['ACCOUNT_TYPE']=='Administrator') {
                            # code...
                        ?>
                          
                        <li style="display:none">
                            <a href="<?php echo web_root; ?>admin/back-up/index.php" ><i class="fa fa-user fa-fw"></i> Back-up and Restore </a>
                          
                        </li>
                 <?php }  ?>
 
 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

            <!-- Modal -->
                    <div class="modal fade" id="usermodal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal" type=
                                    "button">×</button>

                                    <h4 class="modal-title" id="myModalLabel">Profile Image</h4>
                                </div>

                                <form action="<?php echo web_root; ?>admin/user/controller.php?action=photos" enctype="multipart/form-data" method=
                                "post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="rows">
                                            <div class="col-md-12">
                                                <div class="rows d-flex justify-content-center">
                                                    <img title="profile image" class="text-center" width="300" height="300" src="loginLogo.png">  
                          
                                                </div>
                                            </div><br/>
                                                <div class="col-md-12">
                                                    <div class="rows">
                                                        <div class="col-md-8">

                                                            <!-- <input type="hidden" name="MIDNO" id="MIDNO" value="<?php echo $_SESSION['ACCOUNT_ID']; ?>">
                                                              <input name="MAX_FILE_SIZE" type=
                                                            "hidden" value="1000000"> <input id=
                                                            "photo" name="photo" type=
                                                            "file"> -->
                                                        </div>

                                                        <div class="col-md-4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal" type=
                                        "button">Close</button> 
                                        <!-- <button class="btn btn-primary"
                                        name="savephoto" type="submit">Upload Photo</button> -->
                                    </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
  

  <div id="page-wrapper">
                   <?php   check_message();  ?> 
            <div class="row" >
      
                <div class="col-lg-12"> 
                    <p> 
                    <?php 
                    if ($title<>'Home'){
                       echo   ' <a href="'. web_root.'admin/index.php" title="Home" >Home</a>  / 
                        <a href="index.php" title="'. $title.'" >'. $title.'</a> 
                        '.(isset($header) ? ' / '. $header : '') .'</p>'  ;
                    } ?>

 

                  <?php require_once $content; ?>
                    
                </div>
                       <!-- /.col-lg-12 -->

            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
 
      <!-- <footer><p align="Left">&copy; Green Valley College Foundation, Inc. </p></footer> -->
 


<!-- jQuery -->
<script src="<?php echo web_root; ?>admin/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo web_root; ?>admin/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo web_root; ?>admin/js/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo web_root; ?>admin/js/jquery.dataTables.min.js"></script>
<script src="<?php echo web_root; ?>admin/js/dataTables.bootstrap.min.js"></script>

<script src="<?php echo web_root; ?>admin/select2/select2.full.min.js"></script>
<script src="<?php echo web_root; ?>admin/slimScroll/jquery.slimscroll.min.js"></script>

<script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<!-- <script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script> -->



<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.date.extensions.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.extensions.js"></script> 
 

<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask//meiomask.min.js"></script> 
<script src="<?php echo web_root; ?>js/ekko-lightbox.js"></script>


<!-- Custom Theme JavaScript -->
<script src="<?php echo web_root; ?>admin/js/sb-admin-2.js"></script> 
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>admin/js/janobe.js"></script> 


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script> 
    
    $(function () {
         $(".select2").select2();
    })
  

     $('input[data-mask]').each(function() {
        var input = $(this);
        input.setMask(input.data('mask'));
      });

   //Datemask2 mm/dd/yyyy
    $("#datetime12").inputmask("hh:mm t", {"placeholder": "hh:mm t"});

       //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();


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
} );
 

     
 $(document).ready(function() {
    $('#dash-table').DataTable({
                responsive: true ,
                  "sort": false
        });
 
    });

 $(document).ready(function() {
    $('#dash-table1').DataTable({
                responsive: true ,
                  "sort": false
        });
 
    });


 
$('.date_pickerfrom').datetimepicker({
  format: 'mm/dd/yyyy',
   startDate : '01/01/2000', 
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1, 
    startView: 2,
    minView: 2,
    forceParse: 0 

    });


$('.date_pickerto').datetimepicker({
  format: 'mm/dd/yyyy',
   startDate : '01/01/2000', 
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1, 
    startView: 2,
    minView: 2,
    forceParse: 0   

    });
 
 
$('#date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0,
     changeMonth: true,
      changeYear: true,
      yearRange: '1945:'+(new Date).getFullYear() 
    });

</script>  
  
     <!-- Morris Charts JavaScript -->
    <script src="<?php echo web_root; ?>admin/js/raphael-min.js"></script>
    <script src="<?php echo web_root; ?>admin/js/morris.min.js"></script>
    <script src="<?php echo web_root; ?>admin/js/morris-data.js"></script>

<script type="text/javascript" > 

$(document).on("change", "#COURSE_ID", function () {
 /* load all variables */
   
   var courseid =  document.getElementById('COURSE_ID').value 
   
$("#loadedit").hide();

   // alert(courseid);
     $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php",    
        dataType: "text",   //expect html to be returned  
        data:{id:courseid},               
        success: function(data){                    
         $('#loaddata').html(data); 
          

        }

    }); 
  
}); 

$(document).on("change", "#sched_semester", function () {
 /* load all variables */
   
   var courseid =  document.getElementById('COURSE_ID').value 
   
$("#loadedit").hide();

 // $("#subjFirst").hide();
   // alert(courseid);
     $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php",    
        dataType: "text",   //expect html to be returned  
        data:{id:courseid},               
        success: function(data){                    
         $('#loaddata').html(data); 
          

        }

    }); 
  
}); 


$(document).on("change", "#INST_ID", function () {
 /* load all variables */
   
   var instid =  document.getElementById('INST_ID').value 
   
$("#spacing").hide();
$("#HideMe").hide();

 // $("#subjFirst").hide();
   // alert(courseid);
     $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "loaddata.php",    
        dataType: "text",   //expect html to be returned  
        data:{id:instid},               
        success: function(data){                    
         $('#loadsubject').html(data); 
          

        }

    }); 
  
});

$("#gosearch").click(function() {
    var instructor = document.getElementById("INST_ID").value;
    if (instructor == 'Select') {
        alert("Pls. Select Teacher.");
        return false;
    }else{
        return true;
    };
})
</script>
<script type="text/javascript">
    $("#FIRSTGRADING").keyup(function(){
        //alert('FIRSTGRADING');

   var first = document.getElementById('FIRSTGRADING').value;
   var second = document.getElementById('SECONDGRADING').value;
   var third = document.getElementById('THIRDGRADING').value;
   var fourth = document.getElementById('FOURTHGRADING').value;
   var tot;


    first = parseFloat(first) * .20;
    second = parseFloat(second) * .20;
    third = parseFloat(third) * .20;
    fourth = parseFloat(fourth) * .40

    tot = parseFloat(first) +  parseFloat(second)  +  parseFloat(third)  +  parseFloat(fourth) ;

    // tot = tot /  4;

   document.getElementById('AVERAGE').value = tot;







    });
    $("#SECONDGRADING").keyup(function(){
      var first = document.getElementById('FIRSTGRADING').value;
   var second = document.getElementById('SECONDGRADING').value;
   var third = document.getElementById('THIRDGRADING').value;
   var fourth = document.getElementById('FOURTHGRADING').value;
   var tot;


    first = parseFloat(first) * .20;
    second = parseFloat(second) * .20;
    third = parseFloat(third) * .20;
    fourth = parseFloat(fourth) * .40

    tot = parseFloat(first) +  parseFloat(second)  +  parseFloat(third)  +  parseFloat(fourth) ;

    // tot = tot /  4;

   document.getElementById('AVERAGE').value = tot;

    });
    $("#THIRDGRADING").keyup(function(){
        // alert('THIRDGRADING');
   var first = document.getElementById('FIRSTGRADING').value;
   var second = document.getElementById('SECONDGRADING').value;
   var third = document.getElementById('THIRDGRADING').value;
   var fourth = document.getElementById('FOURTHGRADING').value;
   var tot;


    first = parseFloat(first) * .20;
    second = parseFloat(second) * .20;
    third = parseFloat(third) * .20;
    fourth = parseFloat(fourth) * .40

    tot = parseFloat(first) +  parseFloat(second)  +  parseFloat(third)  +  parseFloat(fourth) ;

    // tot = tot /  4;

   document.getElementById('AVERAGE').value = tot;

    });
    $("#FOURTHGRADING").keyup(function(){
        // alert('FOURTHGRADING');
 var first = document.getElementById('FIRSTGRADING').value;
   var second = document.getElementById('SECONDGRADING').value;
   var third = document.getElementById('THIRDGRADING').value;
   var fourth = document.getElementById('FOURTHGRADING').value;
   var tot;


    first = parseFloat(first) * .20;
    second = parseFloat(second) * .20;
    third = parseFloat(third) * .20;
    fourth = parseFloat(fourth) * .40

    tot = parseFloat(first) +  parseFloat(second)  +  parseFloat(third)  +  parseFloat(fourth) ;

    // tot = tot /  4;

   document.getElementById('AVERAGE').value = tot;

    });



          $("#SECTION").on('change', function(){
            var sec = $("#SECTION").val();
            if(sec.slice(0,1) == "-"){
              alert("Section value should not be negative")
            }
          })



$('img.zoomable').click('click', function () {
  var img = $(this);
  var bigImg = $('<img />').css({
    'max-width': '100%',
    'max-height': '100%',
    'display': 'inline'
  });
  bigImg.attr({
    src: img.attr('src'),
    alt: img.attr('alt'),
    title: img.attr('title')
  });
  var over = $('<div />').text(' ').css({
    'height': '100%',
    'width': '100%',
    'background': 'rgba(0,0,0,.82)',
    'position': 'fixed',
    'top': 0,
    'left': 0,
    'opacity': 0.0,
    'cursor': 'pointer',
    'z-index': 9999,
    'text-align': 'center'
  }).append(bigImg).bind('click', function () {
    $(this).fadeOut(300, function () {
      $(this).remove();
    });
  }).insertAfter(this).animate({
    'opacity': 1
  }, 300);
});



</script>





</body>
</html>