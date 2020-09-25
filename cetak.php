<?php include 'functions.php';?>
<!doctype html>
<html>
<head>
<title><?php echo $lang_menu_cetak;?></title>

<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php echo $lang_menu_title;?></title>
     <link href="css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="css/css/agency.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
 <!--  <link href="css/css/agency.min.css" rel="stylesheet">
    <link href="assets/css/yeti-bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/general.css" rel="stylesheet"/>
    <link href="assets/css/select2.min.css" rel="stylesheet"/> -->
    <script src="css/vendor/jquery/jquery.min.js"></script>
  <script src="css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="css/vendor/jquery-easing/jquery.easing.min.js"></script>
 <link href="css/modern-business.css" rel="stylesheet">
  <!-- Contact form JavaScript -->
  <script src="css/js/jqBootstrapValidation.js"></script>
  <script src="css/js/contact_me.js"></script>


  <script src="css2/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="css2/vendor/bootstrap/js/popper.js"></script>
  <script src="css2/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="css2/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="css2/vendor/daterangepicker/moment.min.js"></script>
  <script src="css2/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="css2/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="css2/js/main.js"></script>
<style>
#outtable{
        padding: 20px;
        border:1px solid #e3e3e3;
        width:600px;
        border-radius: 5px;
      }
 
      .short{
        width: 50px;
      }
 
      .normal{
        width: 150px;
      }
      table{
        border-collapse: collapse;
        font-family: arial;
        color:#5E5B5C;
      }
 
      thead th{
        text-align: left;
        padding: 10px;
      }
 
      tbody td{
        border-top: 1px solid #e3e3e3;
        padding: 10px;
      }
 
      tbody tr:nth-child(even){
        background: #F6F5FA;
      }
 
      tbody tr:hover{
        background: #EAE9F5
      }
</style>
</head>
<body onload="window.print()">
<div class="wrapper">
<?php

if(is_file($mod.'_cetak.php'))
    include $mod.'_cetak.php';
?>
</div>
</body>
</html>