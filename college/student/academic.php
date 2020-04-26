<?php
session_start();
if (isset($_SESSION['id'])){
  $reg_no = $_SESSION['id'];
  $name = $_SESSION['name'];
  $college = $_SESSION['college'];
  $img=$_SESSION['img'];
}
elseif(!isset($_SESSION['id'])) {
  echo "<script>window.location.href='../login.php'</script>";
}
?>
<html>
<title>Academic</title>
<head>
  <style>
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
      margin-top: 14.3%;
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
    .sidenav a:hover, .dropdown-btn:hover {
      color: black;
      background-color:#175176 ;

    }
    body{
     margin: 0 0 0 0;
     padding: 0 0 0 0;
   }
   table, th, td{
    border: 1px solid black;
  }

</style>
</head>
<body>

  <div>
   <img src="poornima.jpg">
   <a href="student.php" style="text-decoration-line: underline; margin-left: 80%;font-size: 25px;margin-top: 7.5%;position: fixed;color: white">Profile</a>
 </div>

 <div style="background-color: #175176; text-align: center; color: white; font-family: Tahoma;font-size: 20px">
   <h1 style="font-size: 30px">Welcome To Poornima Group Of Colleges</h1>
 </div>


 <div class="sidenav">
  <a href="aboutcollegeS.php">About College</a>
  <a href="#">Attendance</a>
  <a href="#">Time Table</a>
  <a href="feedback.php">Feedback</a>
  <a href="#">Assignments</a>
  <a href="#">Performance</a>
  <a href="#">Test</a>
  <a style="background-color:#175176;color: white;" href="academic.php">Academic Contents</a>
  <a href="student_notes.php">Notes</a>
</div>


<h style="margin-left:50%;margin-top: -12%;font-size: 25px; "><b> Academic Record</b></h>



<div style="margin: 90px 0px 0px 380px;">
  <table style="width: 100%;margin-left: -4%;height: 50%;margin-top: -5%">
    <tr>
      <th>subject name</th>
      <th>Lecture type</th>
      <th>Teacher</th>
      <th>Subject Code</th>
    </tr>
    <?php
    include "connection.php";
    $year=$section=$branch=$table='';
    $sql = "SELECT year,section,branch FROM Details WHERE id='". $reg_no ."' LIMIT 1";
    $result=mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1){
      while($row = mysqli_fetch_assoc($result)) {
        $year=$row['year'];
        $section=$row['section'];
        $branch=$row['branch'];
        $table="AC_".$year.$section."_".$branch;
      }
    }
    $sql1 = "SELECT * FROM ".$table;
    $result1=mysqli_query($conn, $sql1);
    if(mysqli_num_rows($result1) >= 1){
      while($row1 = mysqli_fetch_assoc($result1)) {
       echo "<tr>";
       echo "<td>".$row1['sub_name']."</td>";
       echo "<td>".$row1['Lec_type']."</td>";
       echo "<td>".$row1['faculty']."</td>";
       echo "<td>".$row1['sub_code']."</td>";
       echo "</tr>";
     }
   }
   ?>
      <!-- <td>cloud computing</td>
      <td>theory</td>
      <td>Pawan Patidar</td>
    </tr>
    <tr>
      <td>Information security & systems</td>
      <td>theory</td>
      <td>Dr. Anil kumar</td>
    </tr>
    <tr>
      <td>Data mining and warehousing</td>
      <td>theory</td>
      <td>Pooja Sharma</td>
    </tr>
    <tr>
      <td>Cad for VLSI</td>
      <td>theory</td>
      <td>Chandan kumar dubey</td>
    </tr>
    <tr>
      <td>compiler construction</td>
      <td>theory</td>
      <td>Atrikesh pandey</td>
    </tr>
    <tr>
      <td>Adcance database management system</td>
      <td>theory</td>
      <td>Ashu sharma</td>
    </tr>
    <tr>
      <td>Web development lab</td>
      <td>Practical</td>
      <td>swati sriwastav</td>
    </tr>
    <tr>
      <td>VLSI lab</td>
      <td>Practical</td>
      <td>Alka rani</td>
    </tr>
    <tr>
      <td>compiler construction lab</td>
      <td>Practical</td>
      <td>Atrikesh pandey</td>
    </tr> -->
  </table>
</div>
</body>
</html>

