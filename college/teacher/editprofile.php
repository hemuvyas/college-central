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
      font-family: Arial;

    }

    input[type=text], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {

      background-color: #175176;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type=submit]:hover {
      background-color:blueviolet;
      color: black;
    }
    input[type=cancle] {

      background-color: #175176;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type=cancle]:hover {
      background-color:blueviolet;
      color: black;
    }
    div.container {
      border-radius: 5px;
      background-color: #f2f2f2;
      margin-top: 14%;
      width: 70%;
      margin-left: 15%;
      position: fixed;
      padding: 20px;
    }
  </style>
</head>
<body>

  <div style= "float: right; width: 100%; ; margin-top: 0%;position: fixed;margin-left: 2%;">
    <img width="200px"  src="poornima.jpg" ></div>
    <div class="logout">
     <a href="/college/login/logout.php" style="color: blue;">Logout</a></div>
     <h3>Welcome:</h3>

     <h1>Welcome to Poornima Group of College </h1>




     <h3 style="position: fixed;margin-left: 46%;margin-top: 11%;color: #175176;font-size: 30px;"> Edit Profile</h3>

     <div class="container">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">


        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email..">


        <label for="mobile">Mobile no.</label>
        <input type="text" id="mobile" name="mobile" placeholder="Your Mobile no..">


        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Your address">

        <a href="teacher.php"><input  type="cancle" value="cancle" style="width:
        49.5%;margin-left: 0%;font-size:18px;margin-top: 0%;text-align: center;">
      </a>

      <input type="submit" value="update" style="width:
      49.5%;margin-left: 50.5%;font-size:18px;margin-top: -6.1%;" >

    </form>
  </div>

</body>
</html>
