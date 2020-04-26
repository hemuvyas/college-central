<?php
session_start();
if (isset($_SESSION['id'])){
  $name = $_SESSION['name'];
  $college = $_SESSION['college'];
  $img=$_SESSION['img'];
}
elseif(!isset($_SESSION['id'])) {
  echo "<script>window.location.href='../login.php'</script>";
}
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    h1{
      text-align: center;
      font-family: Tahoma;
      font-size: 30px;
      font-weight: bold;
      color:white;
      margin-top:-2%;
      width:101%;
      margin-left: -1%;
      background-color: #175176;
      position: relative;
      height: 6%;
    }
    .footer {
      font-size: 13px;
      text-decoration: none;
      text-align: center;
      font-family: Tahoma;
      margin-top: 7%;
    }
    .logout{
      font-size: 20px;
      margin-left: 93%;
      position: relative;
      text-decoration-line: underline;
      margin-top: 4%;


    }
    h4{
      font-size: 25px;
      margin-left: 60%;
      position: relative;
      margin-top: -7%;
    }
    body {
      font-family: "Lato", sans-serif;
    }

    /* Fixed sidenav, full height */
    .sidenav {
      height: 60%;
      width: 20%;
      position: relative;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: transparent;
      overflow-x: hidden;
      padding-top: 20px;
      margin-top: -1.3%;
    }

    /* Style the sidenav links and the dropdown button */
    .sidenav a, .dropdown-btn {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 22px;
      border: 1px solid red;
      color: #175176;
      display: block;
      border: none;
      background: none;
      margin-top: 1%;
      padding-top: 1%;
      width: 100%;
      text-align: left;
      cursor: pointer;
      background-color: whitesmoke;
      outline: none;
    }

    /* On mouse-over */
    .sidenav a:hover, .dropdown-btn:hover {
      color: black;
      background-color:#175176 ;
    }

    /* Main content */
    .main {
      margin-left: 200px; /* Same as the width of the sidenav */
      font-size: 20px; /* Increased text to enable scrolling */
      padding: 0px 10px;
    }
    * {
      box-sizing: border-box;
    }

    body {
      background-color: #474e5d;
      font-family: Helvetica, sans-serif;
    }

    /* The actual timeline (the vertical ruler) */
    .timeline {
      position: relative;
      max-width: 1200px;
      margin: 0 auto;
      margin-left: 20%;
      margin-top: -25%;

    }

    /* The actual timeline (the vertical ruler) */
    .timeline::after {
      content: '';
      position: absolute;
      width: 6px;
      background-color: #175176;
      top: 0;
      bottom: 0;
      left: 50%;
      margin-left: -3px;
    }

    /* Container around content */
    .container {
      padding: 10px 40px;
      position: relative;
      background-color: inherit;
      width: 50%;
    }

    /* The circles on the timeline */
    .container::after {
      content: '';
      position: absolute;
      width: 25px;
      height: 25px;
      right: -17px;
      background-color: yellow;
      border: 4px solid #FF9F55;
      top: 15px;
      border-radius: 50%;
      z-index: 1;
    }

    /* Place the container to the left */
    .left {
      left: 0;
    }

    /* Place the container to the right */
    .right {
      left: 50%;
    }

    /* Add arrows to the left container (pointing right) */
    .left::before {
      content: " ";
      height: 0;
      position: absolute;
      top: 22px;
      width: 0;
      z-index: 1;
      right: 30px;
      border: medium solid yellow;
      border-width: 10px 0 10px 10px;
      border-color: transparent red transparent ;
    }

    /* Add arrows to the right container (pointing left) */
    .right::before {
      content: " ";
      height: 0;
      position: absolute;
      top: 22px;
      width: 0;
      z-index: 1;
      left: 30px;
      border: medium solid yellow;
      border-width: 10px 10px 10px 0;
      border-color: transparent red transparent transparent;
    }

    /* Fix the circle for containers on the right side */
    .right::after {
      left: -16px;
    }

    /* The actual content */
    .content {
      padding: 20px 30px;
      background-color: #175176;
      position: relative;
      border-radius: 6px;
    }

    /* Media queries - Responsive timeline on screens less than 600px wide */
    @media all and (max-width: 600px) {
      /* Place the timelime to the left */
      .timeline::after {
        left: 31px;
      }

      /* Full-width containers */
      .container {
        width: 100%;
        padding-left: 70px;
        padding-right: 25px;
      }

      /* Make sure that all arrows are pointing leftwards */
      .container::before {
        left: 60px;
        border: medium solid white;
        border-width: 10px 10px 10px 0;
        border-color: transparent white transparent transparent;
      }

      /* Make sure all circles are at the same spot */
      .left::after, .right::after {
        left: 15px;
      }

      /* Make all right containers behave like the left ones */
      .right {
        left: 0%;
      }
    }
  </style>
</head>
<body style="background-color:transparent;" >
  <div  class="header">
    <div style= "float: right; width: 100%; ; margin-top: -4%;position: relative;margin-left: 2%;">
      <img width="200px"  src="poornima.jpg" ></div>
      <div class="logout">
       <a href="/college/login/logout.php" style="color: blue; position: relative; bottom: 30px;">Logout</a></div>
       <h1>Welcome to Poornima Group of College </h1>

       <a href="student.php"><h2 style="margin-left: 84%;margin-top: -4%;color: white;font-size: 25px;text-decoration-line: underline;position: relative;">Profile</h2></a>

     </div>
     <h style="margin-left:50%;margin-top: -12%;font-size: 25px; "><b> College Information</b></h>
     <div class="sidenav">
      <a href="aboutcolleges.php">About College</a>
      <a href="#">Attendance</a>
      <a href="#">Time Table</a>
      <a href="feedback.php">Feedback</a>
      <a href="#">Assignments</a>
      <a href="#">Performance</a>
      <a href="#">Test</a>
      <a href="academic.php">Academic Contents</a>
      <a href="student_notes.php">Notes</a>
    </div>

    <div class="timeline">
      <div class="container left">
        <div class="content">
          <h2>Poornima college of engineering</h2>

          <h3>2000 </h3>
          <img width="100%" height="30%" src="pce.png">
          <p>PCE, the pioneer institute of PGC was established in 2000 with the aim of imparting pragmatic technical education. In its magnificent journey of 18 years, PCE has set benchmark and reached at new pinnacles in engineering education with dedication, perseverance and devotion.

          </p>
        </div>
      </div>
      <div class="container right">
        <div class="content">
          <h2>Poornima institute of engineering and technology</h2>
          <h3>2007</h3>
          <img width="100%" height="30%" src="piet.jpg">

          <p>Poornima Institute of Engineering & Technology, was established in 2007 with the aim of imparting pragmatic technical education. In its magnificent journey of 11 years, PIET has set benchmarks and reached at new pinnacles in Engineering Education with dedication, perseverance and devotion.

          </p>
        </div>
      </div>
      <div class="container left">
        <div class="content">
          <h2>Poornima group of institutions</h2>
          <h3>2009</h3>
          <img width="100%" height="30%" src="pgi.jpg">

          <p>With the glory of PCE and PIET ringing aloud, PGI has also established itself as an excellent destination for technical education and preferred center for hands on learning. PGI is providing an environment that stimulates and develops the ability of every student to his highest potential.
          </p>
        </div>
      </div>
      <div class="container right">
        <div class="content">
          <h2>Poornima university</h2>
          <h3>2012</h3>
          <img width="100%" height="30%" src="pu.jpg">

          <p>Poornima University (PU) is a Leading Private University in Rajasthan and proud constituent of Poornima Group (PG). The university is situated in Sitapura the educational hub of Jaipur in 32.67 Acres sprawling, lush green campus. State- of- the- art building area of university with independent academic & administration block, hostels, laboratories, playground etc.
          </p>
        </div>
      </div>


    </body>
    </html>
