<?php
//including the database connection file
include_once("../admin/config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM placement ORDER BY id "); // using mysqli_query instead
?>

<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>अभियांत्रिकी महाविद्यालय बीकानेर</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="js/jquery.min.js"></script>
  <script src="js/page.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js"></script>
  <link rel="stylesheet" type="text/css" href="css/calendar.css">
  <script src="js/time.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<style>
  .tro{
background: rgb(196,191,191);
background: linear-gradient(22deg, rgba(196,191,191,1) 55%, rgba(246,252,159,1) 99%);
height: 40px;

  }
	td{
    font-size:20px; 
    border: 1px solid;
		text-align: left;
		
	}
	table tr{
		
		color: black;

	}
</style>
<body >
  <div class="navbar navbar-inverse navbar-top">
    <div class="content">
      <div class="navbar-collapse collapse navbar-inverse-collapse">
        <ul class="nav navbar-nav nav-top">
          <li><a href="#">Faculty</a></li>
          <li><a href="#">Online Admission Enquiry</a></li>
          <li><a href="#">Placement</a></li>
          <li><a href="#">Convocation</a></li>
        </ul>
        <div style="float: right;">
          <ul class="nav navbar-nav nav-top">
          <li><a href="#" class="fa fa-phone"> 066461234</a></li>
          <li><a href="#" class="fa fa-envelope-o"> skb@gmail.com</a></li>
        </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="header content">
  <div class="middle-block">
  <div class="row main no-padding">

   <div class="row main no-padding">
        <div class="col-xs-2 padawan link-btn">
           <a href ="index.html"><img src="images/logo.png" class="title-logo" style="width: 100%;" alt="Home"></a>
        </div>
        <div class="col-xs-8 padawan" style="margin-top:20px;  ">
     <div class="titles" style=" text-align: center;">
      <p class="title"><h1 style="font-weight: 800;font-size: 40px; text-align: center; text-shadow: -2px 2px #00BBFF ;">अभियांत्रिकी महाविद्यालय बीकानेर</h1></p>
      <p class="title"><h1 style="font-weight: 800;font-size: 40px; text-shadow: -2px 2px #00BBFF; ">Engineering College Bikaner</h1></p>
      <p class="subtitle"><h4 style="color: black;font-weight: 700;">(An Autonomous Educational Institution of the Government of Rajasthan, India)</h4></p>
    </div>
        </div>
        <div class="col-xs-2 padawan link-btn">
        	<div style="margin-top: 30px;">
          	<span id="date_time" style="font-size: 25px;"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>
          </div>
        </div>

  </div>
  </div>
  </div>
  <div class="navbar navbar-inverse">
    <div class="content">
      <div class="navbar-collapse collapse navbar-inverse-collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.html">Home</a></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Misson & Vision</a></li>
              <li><a href="#">Message from Principal</a></li>
              <li><a href="#">Developer Team</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses
              <b class="caret"></b>
            </a>

            <ul class="dropdown-menu">

              <li class="dropdown">
                <p class="divider"></p>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">B.Tech
                  <b class="caret-right"></b>
                </a>
                <ul class="dropdown-menu sub-menu">
                    <li><a href="#">Civil Engineering</a></li>
                    <li><a href="#">Computer Science and Engineering</a></li>
                     <li><a href="#">Electrical Engineering</a></li>
                    <li><a href="#">Electronics and Communication Engineering</a></li>
                    <li><a href="#"> Electronics Instrumentation & Control Engineering </a></li>
                    <li><a href="#">Information Technology</a></li>
                    <li><a href="#">Mechanical Engineering</a></li>
                  </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">M.Tech
                  <b class="caret-right"></b>
                </a>
                <ul class="dropdown-menu sub-menu">
                    <li><a href="#">Computer Science(Software Engineering)</a></li>
                    <li><a href="#">Electrical(Power Systems)</a></li>
                    <li><a href="#">Mechanical (Thermal Engineering)</a></li>
                </ul>
              </li>
               <p class="divider"></p>
              <li><a href="#">BBA</a></li>
              <li><a href="#">MBA</a></li>
               <p class="divider"></p>
              <li><a href="#">BCA</a></li>
              <li><a href="#">MCA</a></li>
               <p class="divider"></p>
             
              <li><a href="#">B.Sc</a></li>
               <p class="divider"></p>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">M.Sc
                  <b class="caret-right"></b>
                </a>
                <ul class="dropdown-menu sub-menu">
                    <li><a href="#">CS</a></li>
                    <li><a href="#">Maths</a></li>
                    <li><a href="#">Physics</a></li>
                    <li><a href="#">Chemistry</a></li>
                </ul>
              </li>
              <p class="divider"></p>
               <li><a href="#">Ph.D</a></li>
               
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Departments
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Artificial Intelligence and Data Science</a></li>
              <li><a href="#">Civil Engineering</a></li>
              <li><a href="#">Computer Science and Engineering</a></li>
              <li><a href="#">Electronics and Communication Engineering</a></li>
              <li><a href="#"> Electrical Engineering</a></li>
              <li><a href="#">Electronics Instrumentation & Control Engineering</a></li>
              <li><a href="#">Information Technology</a></li>
              <li><a href="#">Mechanical Engineering</a></li>
              <li><a href="#"> Department of MCA</a></li>
              <li><a href="#">Department of Appiled Science</a></li>
              <li><a href="#">Department of Management</a></li>
              
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administration
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="">Head Administration</a></li>
              <li><a href="">Head Departments</a></li>

            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facilities
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Hostels</a></li>
              <li><a href="#">Transportation</a></li>
              <li><a href="#">Library</a></li>
              <li><a href="#">Training & Placement</a></li>
              <li><a href="#">E-Lectures</a></li>
              <li><a href="#">Student Activity Center</a></li>
            </ul>
          </li>

          <li><a href="#">Training &amp; Placement</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admission
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="" >Admission</a></li>
              <li><a href="" >Admission Procedure</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fee
                  <b class="caret-right"></b>
                </a>
                <ul class="dropdown-menu sub-menu">
                    <li><a href="">Fee Instruction</a></li>
                    <li><a href="">Fee Structure</a></li>
                </ul>
              </li>
              <li><a href="" >Scholarships</a></li>
              <li><a href="" >Education Loan</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="">Photo Gallery</a></li>
              <li><a href="">Media Coverage</a></li>
              <li><a href="">STC Coverage</a></li>
              <li><a href="">Sports Gallery</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Others
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="">Contact Us</a></li>
              <li><a href="">Webmail</a></li>
              <li><a href="">Pay Fees</a></li>
              <li><a href="">Alumini</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
      <div class="head1"><br>
  	<h2 style="font-weight: 900;text-shadow: 3px 3px 4px red;">Electronic Instrumentation & Control Engineering</h2>
  	<h4>(Automation and Robotics)</h4>
  </div>
  </div>

  <div class="lower-block">
    <div class="dl"><h4><b>Direct Links</b></h4></p></div>
      <div class="row main" >
        <div class="col-xs-3 padawan1">
<div>
   <div class="panel-heading heading-default">
              <h3 class="panel-title" style="text-align: center; ">About</h3>
   </div>
<div class="list-group scroll" target='_blank' id="announcements-inner" style="text-align: left;"><b>
                <a href="about.html" target='_blank' class="list-group-item no-vertical-border">About Department</a>
                <a href="aim.html" target='_blank' class="list-group-item no-vertical-border">Overall Aim</a>
                <a href="hod.html" target='_blank' class="list-group-item no-vertical-border">Head of Department</a>
                <a href="faculty.html " target='_blank' class="list-group-item no-vertical-border">Faculty</a>
              </b></div>
</div>
        </div>
 <div class="col-xs-3 padawan1">
          <div>
   <div class="panel-heading heading-default">
              <h3 class="panel-title" style="text-align: center; ">Achivement</h3>
   </div>
<div class="list-group scroll" target='_blank' id="announcements-inner" style="text-align: left;"><b>
                <a href="gate.php" target='_blank' class="list-group-item no-vertical-border">Gate</a>
                <a href="rtu.php" target='_blank' class="list-group-item no-vertical-border">RTU Merit List</a>
                <a href="placement.php" target='_blank' class="list-group-item no-vertical-border">Placements</a>
                <a href="arena.html" target='_blank' class="list-group-item no-vertical-border">Job Arena/Scope</a>
              </b></div>
</div>
        </div>
<div class="col-xs-3 padawan1">
<div>
   <div class="panel-heading heading-default">
              <h3 class="panel-title" style="text-align: center; ">Project & Workshop</h3>
   </div>
<div class="list-group scroll" target='_blank' id="announcements-inner" style="text-align: left;"><b>
                <a href="project.html" target='_blank' class="list-group-item no-vertical-border">Projects</a>
                <a href="rad.html" target='_blank' class="list-group-item no-vertical-border">R & D Projects</a>
                <a href="iv.html" target='_blank' class="list-group-item no-vertical-border">Industrial Visit/Training</a>
                <a href="workshop.html" target='_blank' class="list-group-item no-vertical-border">Workshop/STC</a>
              </b>
 </div>
</div>
</div>

<div class="col-xs-3 padawan1">
<div>
   <div class="panel-heading heading-default">
              <h3 class="panel-title" style="text-align: center; ">Others</h3>
   </div>
<div class="list-group scroll" target='_blank' id="announcements-inner" style="text-align: left;"><b>
                <a href="facilities.html" target='_blank' class="list-group-item no-vertical-border">Facilities</a>
                <a href="alumini.html" target='_blank' class="list-group-item no-vertical-border">Alumni Outstanding</a>
                <a href="news.html" target='_blank' class="list-group-item no-vertical-border">News</a>
                <a href="extracurricular.html" target='_blank' class="list-group-item no-vertical-border">Extra Curricular Activities</a>
              </b>
 </div>
</div>
</div>
  </div>
   </div></div>    
 <!-- <br> -->
   <div class="panel-heading heading-default">
              <h3 class="panel-title" style="text-align: center;">PLACEMENT</h3>
   </div>
 

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>  

<div class="container">
    <br>
<table width="90%" class="table table-fluid" id="myTable"><br>
    <thead>
    <tr class="tro" >
    <td style="width: 30%;"><b>Name</b></td>
    <td><b>Company/Institution</b></td>

  </tr>
    </thead>
    <tbody>
    <?php 
  //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
  while($res = mysqli_fetch_array($result)) {     
    echo "<tr>";
    echo "<td>".$res['name']."</td>";
    echo "<td>".$res['company']."</td>";

  }
  ?>
    </tbody>
    </table>
</div>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>


    <!-- <br> -->


<!-- FOOTER START -->
<div class="footer">
  <div class="contain">
  <div class="col">
    <h1 style="border-bottom: 2px double red;">Where we Are</h1>
    <ul>
      <li>Address: Pugal Road</li>
      <li>Kami Industrial Area</li>
      <li>Bikaner, Rajasthan</li>
      <li>India</li>
    </ul>
  </div>
  <div class="col">
    <h1 style="border-bottom: 2px double red;">Useful Links</h1>
    <ul>
      <li>E-Lecture</li>
      <li>TEQIP-III</li>
      <li>Alumni-Society</li>
      <li>Anti-Ragging</li>
    </ul>
  </div>
  <div class="col">
    <h1 style="border-bottom: 2px double red;">Explore</h1>
    <ul>
      <li>Apna ECB</li>
      <li>College Map</li>
      <li>Events</li>
      <li>Contact US</li>
      <li>Get in touch</li>
    </ul>
  </div>
  <div class="col">
    <h1 style="border-bottom: 2px double red;">Navigation</h1>
    <ul>
      <li>Home</li>
      <li>About Us</li>
      <li>Departments</li>
      <li>Site map</li>
    </ul>
  </div>
  <div class="col">
    <h1 style="border-bottom: 2px double red;">Support</h1>
    <ul>
      <li>Contact us</li>
      <li>Web chat</li>
      <li>Webmail</li>
    </ul>
  </div>
  <div class="col social">
    <h1 style="border-bottom: 2px double red;">Social</h1>
    <ul><br>
      <li><a href="" class="fa fa-facebook-square fa-3x"></a></li>
      <li><a href="" class="fa fa-instagram fa-3x"></a></li>
      <li><a href="" class="fa fa-twitter fa-3x "></a></li>
    </ul>
  </div>
<div class="clearfix"></div>
</div>
</div>
<!-- END OF FOOTER -->

  <div class="footer-dark">
    <div class="content">
      Copyright @ 2020 <strong><a href="http://sidverma.net" class="white">Developed By ....</a></strong>
    </div>
  </div>
  <script>
  $(document).ready(function() {
    $('.carousel').carousel();
  });
  </script>

</body>
</html>

