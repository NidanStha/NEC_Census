<?php
  $con = new mysqli('localhost','root','','db_census');
  if($con->connect_errno){
    echo "error in database or table.....dont know";
  }
?>
