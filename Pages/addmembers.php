<?php
  include "connect.php";
  if (isset($_GET['upl'])) {
      echo "<div class='popup-true'>Data Uploaded</div>";
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/main.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../nepalidatepicker/nepali.datepicker.v2.min.css" />
    <title></title>
  </head>
  <body>
    <div class="wrapper">
      <div class="header">
        <div class="logo">
          <a href="#">
            <img src="../Images/logo.png" alt="NEC Logo" />
            Nepali Evangelical Church
          </a>
        </div>
      </div>

      <nav>
        <ul class="menubar">
          <a href="../index.php"><li>Members</li></a>
          <a href="addmembers.php"><li>Add Members</li></a>
          <a href="#"><li>Summery</li></a>
        </ul>
        <div class="search_field">
          <input type="text" name="" value="">
          <input type="submit" name="" value="Search">
        </div>
      </nav>

      <div class="row">
        <div class="titlebar">
          <h3>Members details</h3>
        </div>

        <form class="" action="addmembers.php" method="post" enctype="multipart/form-data">
          <table>
            <tr>
              <td><label for="name">Name :</label></td>
              <td><input type="text" name="name" value="" id="name" autocomplete="off"></td>
            </tr>
            <tr>
              <td><label for="address">Address :</label></td>
              <td><input type="text" name="address" value="" id="address"></td>
            </tr>
            <tr>
              <td><label for="number">Number :</label></td>
              <td><input type="text" name="number" value="" id="number"></td>
            </tr>
            <tr>
              <td><label for="photo">Photo :</label></td>
              <td><input type="file" name="photo" value="" id="photo"></td>
            </tr>
            <tr>
              <td><label for="datepicker">Date :</label></td>
              <td><input class="inputdate" id="datepicker" name="Membership_date"  value="" placeholder="YYYY/MM/DD"/></td>
            </tr>
            <tr>
              <td><input type="submit" name="Save" value="Save" /></td>
            </tr>
          </table>


        </form>
        <?php
        if (isset($_POST['Save'])) {
          $name = $_POST['name'];
          $address = $_POST['address'];
          $dob = $_POST['Membership_date'];
          $number = $_POST['number'];
            $file = $_FILES['photo'];
            $filename=$_FILES['photo']['name'];
            $fileloc = $_FILES['photo']['tmp_name'];
            $filesize = $_FILES['photo']['size'];
            $fileerror=$_FILES['photo']['error'];
            $filetype=$_FILES['photo']['type'];

            $fileext=explode('.',$filename);
            $filelowext=strtolower(end($fileext));
            $allowed=array('jpg', 'jpeg', 'png', 'jfif');
            if(in_array($filelowext,$allowed)){
              if($fileerror === 0){
                if($filesize>8000){
                  $filenewname = uniqid('').".".$filelowext;
                  $filedest = "../Images/Members/" . $filenewname;
                  move_uploaded_file($fileloc,$filedest);
                  $query = "INSERT INTO tb_sliders VALUES ('','$filenewname')";
                  $qry = "INSERT INTO tb_members VALUES ('','$name','$address','$filenewname','$dob','$number')";
                  $con->query($qry);
                  header("locaion: addmembers.php?upl=1");
                  echo "<div class='popup-true'>Image Uploaded</div>";
                }else{
                  echo "<div class='popup-false'>Image size too big</div>";
                }
              }else{
                echo "<div class='popup-false'>error in uploading</div>";
              }
            }else{
              echo "<div class='popup-false'>Wrong image format</div>";
            }

        }
        ?>
      </div>

      <footer>© 2021 NEC. All rights reserved | Nepali Evangelical Church Admin Panel | Version 1.0 | Designed by:NDN Webwork</footer>
    </div>




    <script type="text/javascript" src="../nepalidatepicker/js/jquery.js"></script>
    <script type="text/javascript" src="../nepalidatepicker/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../nepalidatepicker/nepali.datepicker.v2.js"></script>
    <script>
      $(function() {
        //$( "#datepicker" ).datepicker();
        $('#datepicker').nepaliDatePicker();
        $('#frmmember').validate();
      $('#datepicker').nepaliDatePicker({
          ndpEnglishInput: 'datepicker9'
        });
      $('#datepicker').val(AD2BS($('#datepicker8').val()));
      $('#datepicker9').val(BS2AD($('#datepicker').val()));
      $('#datepicker').change(function(){
          $('#datepicker9').val(BS2AD($('#datepicker').val()));
        });
      });
    </script>
  </body>
</html>
