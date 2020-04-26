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
 <title>student.html</title>
 <style>
  .card {
    border: 1px solid black;
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
  h{
    font-size: 25px;
    text-decoration-line: underline;
    margin-right: 30%;
  }
  h2{
    margin-top: 11%;
    position: fixed;
    margin-left: 58%;
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
  .notes{
    border: 1px solid black;
    margin-top: 20px;

  }
  .tbl{
    border-collapse: collapse;
    text-align: center;
    width: 90%;
    margin: 0 auto;
    padding: 3px;
  }
</style>
</head>
<body>

  <div style= "float: right; width: 100%; ; margin-top: 0%;position: fixed;margin-left: 2%;">
    <img width="200px"  src="poornima.jpg" ></div>
    <div class="logout">
     <a href="/college/login/logout.php" style="color: blue;">Logout</a></div>
     <h3>Welcome: <?php echo $name." (".$_SESSION['id'].")"; ?> </h3>

     <h1>Welcome to Poornima Group of College </h1>
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

    <h2 style="text-align:center"> Profile </h2>

    <div class="card">
          <!-- <?php
          echo '<img src="images/'.$img.'" alt="John" style="width:15%;height: 30%; margin-left: -34%;position: fixed;margin-top: .3%;">';
          ?>
        -->
        <h>Notes</h>
        <div class="notes">
          <table class="tbl" border="1">
            <tr>
              <td>Title</td>
              <td>Updated On</td>
              <td>Download</td>
            </tr>
            <?php
            include 'connection.php';
            $year=$section=$branch='';
            $sql = "SELECT * FROM Details WHERE id='".$_SESSION['id']."' LIMIT 1";
            $result=mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) == 1){
              while($row = mysqli_fetch_assoc($result)) {
                $year=$row['year'];
                $section=$row['section'];
                $branch=$row['branch'];
              }
            }
            $sql1= "SELECT * FROM notes where year=$year AND section='$section' AND branch='$branch'";
            $result1=mysqli_query($conn, $sql1);
            if(mysqli_num_rows($result1) >= 1){
              while($row1 = mysqli_fetch_assoc($result1)) {
                echo "<tr>";
                echo "<td>".$row1['title']."</td>";
                echo "<td>".$row1['time']."</td>";
                echo "<td><a href='/college/teacher/Notes/".$row1['file']."'>Download</a></td>";
                echo "</tr>";
              }
            }
            ?>
          </table>

        </div>

          <!-- <a href="editprofileS.html" style="color: blue;margin-right: -43%;font-size: 20px;text-decoration-line: underline">Edit Profile</a>
          <div class="info" style="margin: 50px auto;">
            <h4>Name : <?php echo $name;?></h4>
            <h4>Registration No. : <?php echo $_SESSION['id'];?></h4>
            <h4>College : <?php echo $college;?></h4> -->
          </div>

        </div>

      </body>
      </html>
