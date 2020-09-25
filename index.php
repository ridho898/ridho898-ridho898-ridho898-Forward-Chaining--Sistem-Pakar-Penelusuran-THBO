<?php
include 'bahasa_indonesia.php';
include 'bahasa_inggris.php';
include'functions.php';
//if(empty($_SESSION['login']))
    //header("location:login.php");
?>
<!DOCTYPE html>
<html>     <?php
// memulai sesi
session_start();
// bahasa default website
$default_lang = 'bahasa_indonesia';

// jika user merubah bahasa
if($_GET['lang']) {
  // ubah bahasa sesuai keinginan user
  $_SESSION['lang'] = $_GET['lang'];
  // kembalikan ke halaman index.php
  header("Location: index.php");
}

// jika tidak ada bahasa terdeteksi
if(!$_SESSION['lang']) {
  // atur bahasa ke bahasa default
  $_SESSION['lang'] = $default_lang;
}

// masukan file bahasa yang sedang aktif
include $_SESSION['lang'] . '.php';
?>
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php echo $lang_menu_title;?></title>
     <link href="css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet' type='text/css'/>
  <!-- Custom fonts for this template -->
  <!-- <link href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet' type='text/css'/>
  --> <link href="css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
<!--       <script defer src="vendor/fontawesome5/js/fontawesomeall.min.js"></script>
 -->
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

<!--===============================================================================================-->
  <script src="css2/vendor/daterangepicker/moment.min.js"></script>
  <script src="css2/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="css2/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="css2/js/main.js"></script>

  <!-- Custom scripts for this template -->
 <!--  <script src="css/js/agency.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>    
    <script src="assets/js/select2.min.js"></script>  -->  
    <script type="text/javascript">
      $(function(){
        $("select:not(.default)").select2();
      })         
    </script>   
    <style type="text/css">
      .coeg{
        border-radius: 15px;
        border: 2px solid #000
        ;
      }
    .hi{
background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url('back.jpg');
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }
.dark{
  background-color: #000;
  color: #fff;
}
    </style>              
  </head>
 
  <body style="background: #F7F9F9;">

 

     <nav class="navbar navbar-expand-lg fixed-top" id="mainNav"style="background: #16D28B;">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php" style="color: white;"><?php echo $lang_judul; ?></a>

      

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      
        <i class="fas fa-bars"></i>
      </button>
        
       
         <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
            <?php if($_SESSION['login']):?>
            <li  class="nav-item" ><a class="nav-link js-scroll-trigger" href="?m=tumbuhan"><?php echo $lang_menu_pest;?></a></li>
            <li  class="nav-item" ><a class="nav-link js-scroll-trigger" href="?m=penyakit"><?php echo $lang_menu_indication;?></a></li>
            <li  class="nav-item" ><a class="nav-link js-scroll-trigger" href="?m=relasi"><?php echo $lang_menu_knowledgebased;?></a></li>    
            <li  class="nav-item" ><a class="nav-link js-scroll-trigger" href="?m=rule"><?php echo $lang_menu_rules;?></a></li>             
            <li  class="nav-item" ><a class="nav-link js-scroll-trigger" href="?m=password"><?php echo $lang_menu_password;?></a></li>
            <li  class="nav-item" ><a class="nav-link js-scroll-trigger" href="aksi.php?act=logout"><?php echo $lang_menu_logout;?></a></li>
            
            <!-- <li  class="nav-item"><a class="nav-link js-scroll-trigger" href="?lang=bahasa_inggris"> <img src="Inggris.png" height="25px" width="25px" align="pull-right"></a></li>
            <li  class="nav-item" ><a class="nav-link js-scroll-trigger" href="?lang=bahasa_indonesia"><img src="Indonesia.png" height="25px" width="25px" align="pull-right"></a></li> -->

            <br></a>
            <?php else:?>
             <li  class="nav-item" ><a class="nav-link js-scroll-trigger" href="?m=biodata"><?php echo $lang_menu_konsul;?></a></li>
            <li  class="nav-item"><a class="nav-link js-scroll-trigger" href="?m=artikel"><?php echo $lang_menu_article;?></a></li>
            <li  class="nav-item"><a class="nav-link js-scroll-trigger" href="?m=tentang"><?php echo $lang_menu_about;?></a></li>
            <li  class="nav-item"><a class="nav-link js-scroll-trigger" href="?m=login"><?php echo $lang_menu_admin;?></a></li>
           
           <br></a></div>

            <?php endif?>                     
          </ul>          
        </div>
      </div>
    </nav>
    
    <div>
    <div class="container">
    <?php
        if(!$_SESSION['login'] && in_array($mod, array('tumbuhan', 'penyakit', 'relasi', 'rule', 'password')))
          $mod='home';

        if(file_exists($mod.'.php'))
            include $mod.'.php';
        else
            include 'home.php';
    ?>

  </div>
    </div>
<br>
<br>
<br>
<br>
<br>
    <!-- /.container -->
  </footer>
    <footer class="py-5" style="background: #58907B;">
      <div class="container">
        <p class="m-0 text-center text-white"> <?php echo $lang_menu_footer;?>
      </div>
    </footer>
  </body>
</html>