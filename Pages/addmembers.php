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
          <a href="#"><li>Members</li></a>
          <a href="pages/addmembers.php"><li>Add Members</li></a>
          <a href="#"><li>Summery</li></a>
        </ul>
        <div class="search_field">
          <input type="text" name="" value="">
          <input type="submit" name="" value="Search">
        </div>
      </nav>
      <form class="" action="insertmembers.php" method="post">
        <label for="name">Name :</label>
        <input type="text" name="" value="" id="name">
        <label for="age">Age :</label>
        <input type="text" name="" value="" id="age">
        <label for="">Name :</label>
        <input type="text" name="" value="" id="">
      </form>
      <input class="inputdate" id="datepicker" name="Membership_date"  value="<?php echo date('Y-m-d'); ?>" />
      <?php
      $date_hidden = date('Y-m-d');
      ?>
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
