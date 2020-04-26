<?php
include 'connection.php';
if (isset($_POST['submit'])){
  if (empty($_POST['branch']) || empty($_POST['section']) || empty($_POST['year']) || $_POST['branch'] == "#" || $_POST['section'] == "#" || $_POST['year'] == "#") {
    echo "<script>alert('Please Fill all the details')</script>";
  }
  else {
    $filepath = "Notes/" . basename($_FILES["my_file"]["name"]);
      //if file uploaded then display it on submit
    if(move_uploaded_file($_FILES["my_file"]["tmp_name"], $filepath)) {
      $branch=$_POST['branch'];
      $section=$_POST['section'];
      $year=$_POST['year'];
      $file_name=$_FILES["my_file"]["name"];
      $title=explode(".", $file_name);
      $sql_insert = "INSERT INTO notes (title, file, branch, section, year)VALUES ('$title[0]', '$file_name', '$branch', '$section', '$year')";
      $resulti=mysqli_query($conn, $sql_insert);
      if($resulti){
        echo "<script>alert('Inserted Successfuly')</script>";
        echo "<script>window.loation.href='Notes.php'</script>";
      }
      else{
        echo mysqli_error($conn);
      }
    }
    else{
      echo "<script>alert('There is a problem')</script>";
      echo "<script>window.loation.href='Notes.php'</script>";
    }
  }
}
?>
