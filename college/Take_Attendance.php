<!DOCTYPE html>
<html>
<head>
  <title>Take Attendance</title>
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


.s1{
  font-family: arial;
  display: inline-grid;
  font-size: 25px;
  margin: 10px 10px 10px 10px;
  color: #175176;
}
.s2{
  font-family: arial;
  display: inline-grid;
  font-size: 25px;
  margin: 10px 10px 10px 10px;
  color: #175176;
}
option{
  color: white;
  border-radius: 10px;
  font-family: arial;
  font-weight: bold;
}
select{
  border-radius: 5px;
  background-color: dodgerblue;
  border: none;
  font-weight: bold;
  color: white;

}
input{
  font-size: 25px;
  font-family: arial;
  border-radius: 10px;
  border: none;
  color: white;
  background-color: #175176;
  padding: 5px 15px 5px 15px;

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

<div class="sidenav">
  <a href="aboutcollege.html">About College</a>
  <a href="#">Take Attendance</a>
  <a href="#">Time Table</a>
  <a href="#">Check Feedback</a>
  <a href="assignment.html">Allot Assignments</a>
      <a href="#">Check Performance</a>
      <a href="#">Allot Test</a>
     <a href="#">Update Event</a>
     <a href="Notes.html">Notes/Notice</a>

</div>

<div class="card">
  <form method="post" action="Take_Attendance2.php">
    <div class="s1">
    <label>Choose Year</label>
    <select>
      <option value="1">1st Year</option>
      <option value="2">2nd Year</option>
      <option value="3">3rd Year</option>
      <option value="4">4th Year</option>
    </select>
  </div>
    <div class="s1">
    <label>Choose Section</label>
    <select>
      <option value="a">Section-A</option>
      <option value="b">Section-B</option>
      <option value="c">Section-C</option>
      <option value="d">Section-D</option>
    </select>
  </div>
  <div class="s2">
  <label>Theory</label>
    <select>
      <option value="8cs1">8cs1</option>
      <option value="8cs2">8cs2</option>
      <option value="8cs3">8cs3</option>
      <option value="8cs4">8cs5</option>
      <option value="8cs5">8cs6</option>
      <option value="8cs6">8cs7</option>
      <option value="8cs7">8cs8</option>
    </select>
  </div>
  <div style="margin-top: 150px;">
    <input type="submit" name="submit" value="submit">
  </div>
  </div>

  </form>
</div>


</body>
</html>
