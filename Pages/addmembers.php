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

        <form class="" action="insertmembers.php" method="post">
          <table>
            <tr>
              <td><label for="name">Name :</label></td>
              <td><input type="text" name="" value="" id="name"></td>
            </tr>
            <tr>
              <td><label for="age">Age :</label></td>
              <td><input type="text" name="" value="" id="age"></td>
            </tr>
            <tr>
              <td><label for="">Number :</label></td>
              <td><input type="text" name="" value="" id=""></td>
            </tr>
            <tr>
              <td><label for="">Photo :</label></td>
              <td><input type="file" name="" value="" id=""></td>
            </tr>
            <tr>
              <td><label for="datepicker">Date :</label></td>
              <td><input class="inputdate" id="datepicker" name="Membership_date"  value="" placeholder="YYYY/MM/DD"/></td>
            </tr>
          </table>

        </form>
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
