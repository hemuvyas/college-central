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

  </style>
</head>

<body>

  <div style= "float: right; width: 100%; ; margin-top: 0%;position: fixed;margin-left: 2%;">
    <img width="200px"  src="poornima.jpg" ></div>
    <div class="logout">
     <a href="#" style="color: blue;">Logout</a></div>
     <h3>Welcome:</h3>

     <h1>Welcome to Poornima Group of College </h1>

     <a href="student.html"><h2 style="margin-left: 84%;margin-top: 8.5%;color: white;font-size: 25px;text-decoration-line: underline;"> Profile </h2></a>




     <div class="sidenav">
      <a href="aboutcolleges.php">About College</a>
      <a href="#">Attendance</a>
      <a href="#">Time Table</a>
      <a style="background-color:#175176;color: white;" href="feedback.php">Feedback</a>  <a href="#">Assignments</a>
      <a href="#">Performance</a>
      <a href="#">Test</a>
      <a href="academic.php">Academic Contents</a>
      <a href="student_notes.php">Notes</a>

    </div>
    <button style="width: 20%;margin-top:40%;background-color:#175176;color: white;font-size: 25px;position: fixed;margin-left: -0.5%;">Submit</button>


  </body>
  </html>











  <!DOCTYPE html>
  <html>
  <head>
    <style>
      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 250px;
        position: fixed;
        margin: auto;
        text-align: center;
        font-family: arial;
      }

      .price {
        color: grey;
        font-size: 22px;
      }
    </style>
  </head>
  <body>


    <div class="card">
      <img src="teacher.png" alt="Denim Jeans" style="width:100%;">
      <h4 style="font-size: 25px;margin-top: 1%;">Pawan Patidar</h4>
      <p style="font-size: 20px;margin-top: -10%;" class="code">7CS01</p>
      <p>Cloud Computing</p>


      <fieldset style="width: 85%;text-align: center;font-size: 20" class="star-rating">
        <legend style="font-size: 25px;" class="star-rating__title">Your rating:</legend>
        <div class="star-rating__stars">
          <input class="star-rating__input" type="radio" name="rating" value="1" id="rating-1" />
          <label class="star-rating__label" for="rating-1" aria-label="One"></label>
          <input class="star-rating__input" type="radio" name="rating" value="2" id="rating-2" />
          <label class="star-rating__label" for="rating-2" aria-label="Two"></label>
          <input class="star-rating__input" type="radio" name="rating" value="3" id="rating-3" />
          <label class="star-rating__label" for="rating-3" aria-label="Three"></label>
          <input class="star-rating__input" type="radio" name="rating" value="4" id="rating-4" />
          <label class="star-rating__label" for="rating-4" aria-label="Four"></label>
          <input class="star-rating__input" type="radio" name="rating" value="5" id="rating-5" />
          <label class="star-rating__label" for="rating-5" aria-label="Five"></label>
          <div class="star-rating__focus"></div>
        </div>
      </fieldset>


    </div>

  </body>
  </html>








































  <!DOCTYPE html>
  <html>
  <head>
    <style>
      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 250px;
        text-align: center;
        margin-left: 25%;
        position:fixed;
        font-family: arial;
      }

      .price {
        color: grey;
        font-size: 22px;
      }

    </style>
  </head>
  <body>


    <div style="margin-left: 40%;" class="card">
      <img src="teacher.png" alt="Denim Jeans" style="width:100%;">
      <h4 style="font-size: 25px;margin-top: 1%;">Anil Kumar</h4>
      <p style="font-size: 20px;margin-top: -10%;" class="code">7CS02</p>
      <p>Information Security and System</p>


      <fieldset style="width: 85%;text-align: center;font-size: 20" class="star-rating">
        <legend style="font-size: 25px;" class="star-rating__title">Your rating:</legend>
        <div class="star-rating__stars">
          <input class="star-rating__input" type="radio" name="rating" value="1" id="rating-1" />
          <label class="star-rating__label" for="rating-1" aria-label="One"></label>
          <input class="star-rating__input" type="radio" name="rating" value="2" id="rating-2" />
          <label class="star-rating__label" for="rating-2" aria-label="Two"></label>
          <input class="star-rating__input" type="radio" name="rating" value="3" id="rating-3" />
          <label class="star-rating__label" for="rating-3" aria-label="Three"></label>
          <input class="star-rating__input" type="radio" name="rating" value="4" id="rating-4" />
          <label class="star-rating__label" for="rating-4" aria-label="Four"></label>
          <input class="star-rating__input" type="radio" name="rating" value="5" id="rating-5" />
          <label class="star-rating__label" for="rating-5" aria-label="Five"></label>
          <div class="star-rating__focus"></div>
        </div>
      </fieldset>


    </div>

  </body>
  </html>
































  <!DOCTYPE html>
  <html>
  <head>
    <style>
      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 250px;
        text-align: center;
        margin-left: 25%;
        position:fixed;
        font-family: arial;
      }

      .price {
        color: grey;
        font-size: 22px;
      }

    </style>
  </head>
  <body>


    <div style="margin-left: 59.5%;" class="card">
      <img src="mam.png" alt="Denim Jeans" style="width:100%;">
      <h4 style="font-size: 25px;margin-top: 1%;">Pooja Sharma</h4>
      <p style="font-size: 20px;margin-top: -10%;" class="code">7CS03</p>
      <p>Data Mining and Warehouse</p>


      <fieldset style="width: 85%;text-align: center;font-size: 20" class="star-rating">
        <legend style="font-size: 25px;" class="star-rating__title">Your rating:</legend>
        <div class="star-rating__stars">
          <input class="star-rating__input" type="radio" name="rating" value="1" id="rating-1" />
          <label class="star-rating__label" for="rating-1" aria-label="One"></label>
          <input class="star-rating__input" type="radio" name="rating" value="2" id="rating-2" />
          <label class="star-rating__label" for="rating-2" aria-label="Two"></label>
          <input class="star-rating__input" type="radio" name="rating" value="3" id="rating-3" />
          <label class="star-rating__label" for="rating-3" aria-label="Three"></label>
          <input class="star-rating__input" type="radio" name="rating" value="4" id="rating-4" />
          <label class="star-rating__label" for="rating-4" aria-label="Four"></label>
          <input class="star-rating__input" type="radio" name="rating" value="5" id="rating-5" />
          <label class="star-rating__label" for="rating-5" aria-label="Five"></label>
          <div class="star-rating__focus"></div>
        </div>
      </fieldset>


    </div>

  </body>
  </html>







































  <!DOCTYPE html>
  <html>
  <head>
    <style>
      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 250px;
        text-align: center;
        margin-left: 25%;
        position:fixed;
        font-family: arial;
      }

      .price {
        color: grey;
        font-size: 22px;
      }

    </style>
  </head>
  <body>


    <div style="margin-left: 79.5%;" class="card">
      <img src="teacher.png" alt="Denim Jeans" style="width:100%;">
      <h4 style="font-size: 25px;margin-top: 1%;">Chandan  Dubay</h4>
      <p style="font-size: 20px;margin-top: -10%;" class="code">7CS04</p>
      <p>VLSI</p>


      <fieldset style="width: 85%;text-align: center;font-size: 20" class="star-rating">
        <legend style="font-size: 25px;" class="star-rating__title">Your rating:</legend>
        <div class="star-rating__stars">
          <input class="star-rating__input" type="radio" name="rating" value="1" id="rating-1" />
          <label class="star-rating__label" for="rating-1" aria-label="One"></label>
          <input class="star-rating__input" type="radio" name="rating" value="2" id="rating-2" />
          <label class="star-rating__label" for="rating-2" aria-label="Two"></label>
          <input class="star-rating__input" type="radio" name="rating" value="3" id="rating-3" />
          <label class="star-rating__label" for="rating-3" aria-label="Three"></label>
          <input class="star-rating__input" type="radio" name="rating" value="4" id="rating-4" />
          <label class="star-rating__label" for="rating-4" aria-label="Four"></label>
          <input class="star-rating__input" type="radio" name="rating" value="5" id="rating-5" />
          <label class="star-rating__label" for="rating-5" aria-label="Five"></label>
          <div class="star-rating__focus"></div>
        </div>
      </fieldset>


    </div>

  </body>
  </html>






























</div>

</body>
</html>














<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
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

    button1 {
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

    button1:hover, a:hover {
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
  </style>
</head>
<body>

  <h2 style="margin-left:50%; ">Give Feedback </h2>


</body>
</html>
