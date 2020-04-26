<?php
include 'connection.php';
// session_destroy();
if (isset($_SESSION['id'])) {
  echo "<script>window.location.href='". $_SESSION['type'] ."/".  $_SESSION['type'] .".php'</script>";
}
else {
  if (isset($_POST['submit'])) {
    if (empty($_POST['uname']) || empty($_POST['psw']) || empty($_POST['branch']) || empty($_POST['option'])) {
      echo "<script>alert('Fill all the details')</script>";
    }
    else {
      $table_name = $_POST['option'];
      $username = $_POST['uname'];
      $password = $_POST['psw'];
      $college = $_POST['branch'];
      $sql="SELECT * FROM ". $table_name ." WHERE id='".$username."' AND password='".$password."' AND college='". $college ."' LIMIT 1";
      $result=mysqli_query($conn, $sql);
      if (mysqli_num_rows($result)==1) {
        while($row = mysqli_fetch_assoc($result)) {
          $_SESSION['id'] = $username;
          $_SESSION['maxtime']=time();
          $_SESSION['name'] = $row['name'];
          $_SESSION['type'] = $table_name;
          $_SESSION['college'] = $row['college'];
          $_SESSION['img'] = $row['image'];
          if ($_POST['option'] == 'teacher') {
            $_SESSION['designation'] = $row['designation'];
          }
          echo "<script>window.location.href='". $_SESSION['type'] ."/".  $_SESSION['type'] .".php'</script>";
        }
      }
      else{
        echo "<script>alert('Incorrect Details')</script>";
      }
    }
  }
}

?>
<!DOCTYPE html>
<head>
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
      height: 7%;
    }
    .footer {
      font-size: 13px;
      text-decoration: none;
      text-align: center;
      font-family: Tahoma;
    }
    body {
      font-family: Tahoma, Tahoma,Tahoma;
    }
    form {
      border: 2px solid #175176;
      width: 40%;
      align-items: center;
      margin-left: 30%;
      border-radius:7px;
      height: 55%;
      margin-top: -36%;
    }

    input[type=text], input[type=password] {
      width: 190%;
      padding: 7px 20px;

      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 5px;

      box-sizing: border-box;
    }

    #button{
      background-color: #175176;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border-radius: 5px;
      cursor: pointer;
      width: 60%;
      margin-left: 65%;
    }
    #button:hover{
      opacity: 0.8;
    }
    button {
      background-color: #175176;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border-radius: 5px;
      cursor: pointer;
      width: 60%;
      margin-left: 65%;
    }

    button:hover {
      opacity: 0.8;
    }

    .container {
      width: 50%;
      padding: 13px;
    }
    h2{
      background-color: #175176;
      color: white;
      font-family: Tahoma;
      width: 197%;
      padding: 2%;
      margin-left: -5%;
      margin-top: 0%;
    }

    span.psw {
      float: right;
      color: black;
      margin-top:   -7%;
      margin-right: 3%;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
       display: block;
       float: none;
     }
     .cancelbtn {
       width: 100%;
     }
   }








   .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 1px;
    font-size: 16px;
    border: none;
    width: auto;
    margin-left:0%;
    position: relative;
    top: -50px;
    background-color: white;
    color: #175176;
    font-size: 18px;
    height: auto;
    border-radius: 5px;
  }

  .dropdown {
    position: relative;
    display: inline-block;
    margin-left: 89%;

  }



  .dropdown:hover .dropdown-content {display: block;}

  .dropdown:hover .dropbtn {background-color: #ddd;}






</style>
</head>
<body>

  <div style= "float: right; width: 100%; text-align: center; margin-top: 0%;position: fixed">
    <img width="200px"  src="poornima.jpg" ></div>
    <h1>Welcome to Poornima Group of College </h1>



    <img width="100%" height="70%" style="margin-top: 13%" src="footer.png">

















   <!--  <!DOCTYPE html>
    <html>
    <head> -->
      <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
      <!-- </head> -->


      <form action="login.php" method="post" style="height: 56%;">

        <div class="container">

          <h2 >Login :-</h2>
          <div class="dropdown">
            <select class="dropbtn" name="option" id="option">
              <option value="none">Choose a Login Option:-</option>
              <option value="admin">Administrator</option>
              <option value="student">Student</option>
              <option value="teacher">Teacher</option>

            </select>


          </div>



          <label><b style="font-size: 15px;color:#175176; ">Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label><b style="font-size: 15px;color:#175176 ">Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <label><b style="font-size: 15px;color:#175176 ">Branch</b></label>

          <select style="width: 190%;padding: 7px 20px;margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 5px;
          box-sizing: border-box;
          " name="branch">
          <option value="pce">Poornima College of Engineering</option>
          <option value="piet">Poornima Institue of Engineering and Technology</option>
          <option value="pgi">Poornima Group of Institutions</option>
          <option value="pu">Poornima University</option>
        </select>

        <!-- <button type="submit">Login</button> -->
        <input type="submit" name="submit" value="Login" id="button">
        <!-- <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label> -->
      </div>

      <span class="psw" > <a  href="#" style="color:blue;">Forgot Password!</a></span>
    </form>

  </body>
  </html>

























 <!--  <div class="footer">
   Copyright © EMS . Cloud based <a href="http://www.cloudems.in/campus-university-erp/" target="_blank">University ERP</a> Powered by <a href="http://www.cloudems.in/" target="_blank">iCloudEMS</a>. All rights reserved.
 </div> -->
</body>
</html>
