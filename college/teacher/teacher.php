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
  <title>Teacher</title>
  <style>
    h1{
      text-align: center;
      font-family: Tahoma;
      font-size: 30px;
      font-weight: bold;
      color:white;
      margin-top:8%;
      width:101%;
      margin-left: -1%;
      background-color: #175176;
      position: fixed;
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
      position: fixed;
      text-decoration-line: underline;
      margin-top: 6%;


    }
    h3{
      font-size: 25px;
      margin-left: 60%;
      position: fixed;
      margin-top: 6%;
    }
    body {
      font-family: "Lato", sans-serif;
    }

    /* Fixed sidenav, full height */
    .sidenav {
      height: 60%;
      width: 20%;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: transparent;
      overflow-x: hidden;
      padding-top: 20px;
      margin-top: 12.3%;
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
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      width: 78%;
      position: fixed;
      height: 70%;
      margin: auto;
      text-align: center;
      font-family: arial;
      margin-left: 20.5%;
      margin-top: 13.5%;
    }

    .title {
      color: grey;
      font-size: 18px;
      margin-right: 35%;
    }

    button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      margin-top: 35%;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      position: relative;
      font-size: 18px;
    }

    a {
      text-decoration: none;
      font-size: 22px;
      color: black;
    }

    button:hover, a:hover {
      opacity: 0.7;
    }
    .h{
      font-size: 25px;
      text-decoration-line: underline;
      margin-right: 30%;
    }
    h2{
      margin-top: 11%;
      position: fixed;
      margin-left: 58%;
    }
  </style>
</head>

<body>

  <div style= "float: right; width: 100%; ; margin-top: 0%;position: fixed;margin-left: 2%;">
    <img width="200px"  src="poornima.jpg" ></div>
    <div class="logout">
     <a href="/college/login/logout.php" style="color: blue;">Logout</a>
   </div>
     <!-- <h3>Welcome: <?php echo $name." (".$_SESSION['id'].")"; ?></h3> -->

     <h1>Welcome to Poornima Group of College </h1>
     <div class="sidenav">
      <a href="aboutcollege.php">About College</a>
      <a href="/college/Take_Attendance.php">Take Attendance</a>
      <a href="#">Time Table</a>
      <a href="#">Check Feedback</a>
      <a href="assignment.php">Allot Assignments</a>
      <a href="#">Check Performance</a>
      <a href="#">Allot Test</a>
      <a href="#">Update Event</a>
      <a href="Notes.php">Notes/Notice</a>

    </div>
    <a href="teacher.php"><h2 style="text-align:center"> Profile </h2></a>

    <div class="card">
      <?php
      echo '<img src="images/'.$img.'" alt="John" style="width:15%;height: 30%; margin-left: -34%;position: fixed;margin-top: .3%;">';
      ?>
      <span class="h">Informations</span>
      <a href="editprofile.php" style="color: blue;margin-right: -43%;font-size: 20px;text-decoration-line: underline">Edit Profile</a>
      <div>
        <h4>Welcome : <?php echo $name; ?></h4>
        <h4>Id no. : <?php echo $_SESSION['id'];?></h4>
        <h4>Designation :<?php echo $_SESSION['designation'];?> </h4>
        <h4>College : <?php echo $college;?></h4>
      </div>
      <p><button>Contact</button></p>
    </div>

  </body>
  </html>
