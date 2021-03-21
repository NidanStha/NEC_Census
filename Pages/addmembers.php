<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="nepalidatepicker/nepali.datepicker.v2.min.css" />
    <title></title>
  </head>
  <body>
    <input class="inputdate" id="datepicker" name="Membership_date"  value=""  />
    <input type="hidden" class="inputdate" id="datepicker9" name="Membership_date_eng"  value="" />
    <?php
          $date_hidden = date('Y-m-d');
    ?>
    <input type="hidden" class="inputdate" id="datepicker8" name="Membership_date_eng_hidden"  value=""  />
    <script type="text/javascript" src="nepalidatepicker/js/jquery.js"></script>
    <script type="text/javascript" src="nepalidatepicker/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="nepalidatepicker/nepali.datepicker.v2.js"></script>
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
