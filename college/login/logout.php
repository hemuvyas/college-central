<?php
session_start();
if($_SESSION['id']) {
  session_destroy();
  echo "<script>window.location.href='../login.php'</script>";
}
else {
  echo "<script>window.location.href='../login.php'</script>";
}
?>
