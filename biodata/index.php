<?php
include 'bahasa_indonesia.php';
include 'bahasa_inggris.php';
include'functions.php';
//if(empty($_SESSION['login']))
    //header("location:login.php");
?>
<!DOCTYPE html>
<html> <?php
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
if(!$_SESSION['lang']) {
  // atur bahasa ke bahasa default
  $_SESSION['lang'] = $default_lang;
}

// masukan file bahasa yang sedang aktif
include $_SESSION['lang'] . '.php';
?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $lang_menu_title;?></title>

  <!-- Bootstrap core CSS -->
  <link href="css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/css/agency.min.css" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">IHBN</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
        
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Tumbuhan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#login">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="?lang=bahasa_inggris"><img width="30px" height="20px" src="css/img/inggris.png"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="?lang=bahasa_indonesia"><img width="30px" height="20px" src="css/img/indonesia.png"></a>
          </li>
           
        </ul>
      </div>
    </div>
  </nav>



  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Selamat Datang Di</div>
        <div class="intro-heading text-uppercase">Identifikasi Hama Buah Naga</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="biodata/biodata.php">Mulai Konsultasi</a>
      </div>
    </div>
  </header>

  <!-- Services -->


  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Tumbuhan</h2>
          <h3 class="section-subheading text-muted"> <p align="justify">
          Pada sistem pakar ini, terdapat 7 (tujuh) hama pada tanaman buah naga yang telah diinput dan akan di proses pada mesin inferensi forward chaining dan metode certainty factor berdasarkan gejala yang dimasukan. Kemudian gejala-gejala tersebut akan dikelompokkan sesuai dengan jenis hama yang ada, dan akan dilakukan pemeriksaan pada basis pengetahuan apakah gejala tersebut merupakan salah satu jenis hama pada tanaman buah naga. Selanjutnya, diberikan rekomendasi berupa cara mengatasinya.

Ketujuh hama pada tanaman buah naga di sistem ini, antara lain:</p></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
             <h3> Bekicot (Achatina fulica)</h3>
              </div>
            </div>
            <img class="img-fluid" src="css/img/portfolio/bekicot.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4></h4>
            <p class="text-muted">Sumber foto: agrikencanaperkasa.com</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              <h3> Burung (Aves)</h3>
              </div>
            </div>
            <img class="img-fluid" src="css/img/portfolio/burung.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4></h4>
            <p class="text-muted">Sumber foto: www.besgroup.org</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              <h3>Tungau (Tetranychus sp.)</h3>
              </div>
            </div>
            <img class="img-fluid" src="css/img/portfolio/tungau.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4></h4>
            <p class="text-muted">Sumber foto: pregonagropecuario.com</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              <h3>Lalat Buah (Bactrocera papayae)</h3>
              </div>
            </div>
            <img class="img-fluid" src="css/img/portfolio/lalat buah.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4></h4>
            <p class="text-muted">Sumber foto: www.ces.csiro.au</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              <h3>Kumbang (Hypomeces squamosus)</h3>
              </div>
            </div>
            <img class="img-fluid" src="css/img/portfolio/kumbang.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4></h4>
            <p class="text-muted">Sumber foto: www.flickr.com</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              <h3>Kutu Putih (Mealybugs)</h3>
              </div>
            </div>
            <img class="img-fluid" src="css/img/portfolio/kutu putih.png" alt="">
          </a>
          <div class="portfolio-caption">
            <h4></h4>
            <p class="text-muted">Sumber foto: www.salisburygreenhouse.com/mealy-bugs/</p>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
              <h3>Belalang (Aularches miliaris)</h3>
              </div>
            </div>
            <img class="img-fluid" src="css/img/portfolio/belalang.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4></h4>
            <p class="text-muted">Sumber foto: (Gendroyono & Prasetyani, 2014)</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Jenis Buah Naga di Kalimantan Timur</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="css/img/about/1.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Hylocereus costaricensis</h4>
                  <h4 class="subheading"></h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted" align="justify">Sebutannya buah naga berdaging super merah atau super red. Warna daging buah lebih merah dari Hylocereus polyrhizus. Batangnya bersosok lebih besar dibanding Hylocereus polyrhizus. Batang dan cabangnya akan berwarna loreng saat berumur tua. Berat buahnya sekitar 400–500 gram. Rasa buahnya manis. Kadar kemanisan 13–15 briks. Tanamannya sangat menyukai daerah yang panas dengan ketinggian rendah sampai kering (Kristanto, 2014).
Sumber foto: theextremehorticulturist.wordpress.com</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="css/img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Hylocereus polyrhizus</h4>
                  <h4 class="subheading"></h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted" align="justify">Kulitnya berwarna merah dan daging berwarna merah. Pada kulit buah terdapat sisik atau jumbai berwarna hijau. Berat buah rata–rata hanya sekitar 400 gram. Rasa buahnya lebih manis dibanding Hylocereus undatus. Kadar kemanisan mencapai 13–15 briks. Tanamannya lebih kekar dibanding Hylocereus undatus. Duri pada batang dan cabang berjarak lebih rapat. Tanaman cenderung berbunga hanya 50% sehingga produktivitas buahnya tergolong rendah. Lokasi penanaman yang ideal pada ketinggian rendah sampai sedang. Lebih banyak dikembangkan di Cina dan Australia (Kristanto, 2014).
Sumber foto: pngtree.com</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="css/img/about/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Hylocereus undatus</h4>
                  <h4 class="subheading"></h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted" align="justify">Popular dengan sebutan white pitaya. Kulitnya berwarna merah dan daging berwarna putih sehingga sangat kontras. Pada kulit buah terdapat sisik atau jumbai berwarna hijau. Biji berwarna hitam. Berat buah rata-rata 400–650 gram. Rasa buahnya masam bercampur manis. Kadar kemanisan tergolong rendah, sekitar 10–13 briks. Batang tanamannya berwarna hijau tua. Daerah tumbuh yang ideal pada ketinggian kurang dari 400 mdpl. Lebih banyak dikembangkan di negara–negara produsen utama buah naga karena cenderung lebih banyak diekspor (Kristanto, 2014).
Sumber foto: ru.mywishboard.com</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="css/img/about/4.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Selenicereus megalanthus</h4>
                  <h4 class="subheading"></h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted" align="justify">	

Popular dengan sebutan yellow pitaya. Kulit buah berwarna kuning tanpa sisik sehingga cenderung lebih halus. Kulit buahnya masih menampilkan tonjolan–tonjolan. Berat buahnya hanya sekitar 80–100 gram. Rasa buahnya lebih manis. Kadar kemanisan 15–18 briks. Tanaman tampil lebih mungil dengan warna hijau terang. Pertumbuhan tanaman ini akan optimal bila ditanam di daerah dingin dengan ketinggian tempat lebih dari 800 mdpl (Kristanto, 2014).
Sumber foto: health.detik.com</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
               
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Tentang</h2>
          <h3 class="section-subheading text-muted">SISTEM PAKAR IDENTIFIKASI HAMA PADA TANAMAN BUAH NAGA
MENGGUNAKAN METODE CERTAINTY FACTOR</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="css/img/team/1.jpg" alt="">
            <h4>ARFA' YUNIDA NURHAFIZHAH</h4>
            <p class="text-muted">1615015036</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="css/img/team/2.jpg" alt="">
            <h4>JOAN ANGELINA WIDIANS, M.Kom </h4>
            <p class="text-muted">Pembimbing 1 </p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="css/img/team/3.jpg" alt="">
            <h4>EDY BUDIMAN, M.T</h4>
            <p class="text-muted">Pembimbing 2 </p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="css/img/team/4.jpg" alt="">
            <h4>Ir. HERU GENDROYONO (PAKAR) </h4>
            <p class="text-muted">UPTD Proteksi Tanaman Pangan dan Holtikultura Provinsi Kalimantan Timur</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
         
        </div>
      </div>
    </div>
  </section>

  <!-- Clients -->


  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
      
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  
                  
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                 
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                 
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2019</span>
        </div>
        <div class="col-md-4">
          <!-- <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul> -->
        </div>
        <div class="col-md-4">
          <!-- <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul> -->
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Threads</li>
                  <li>Category: Illustration</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Explore</li>
                  <li>Category: Graphic Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Finish</li>
                  <li>Category: Identity</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Lines</li>
                  <li>Category: Branding</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Southwest</li>
                  <li>Category: Website Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Window</li>
                  <li>Category: Photography</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->

  <script type="text/javascript">
      $(function(){
        $("select:not(.default)").select2();
      })         
    </script>   
  <script src="css/vendor/jquery/jquery.min.js"></script>
  <script src="css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="css/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="css/js/jqBootstrapValidation.js"></script>
  <script src="css/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="css/js/agency.min.js"></script>


</body>

</html>
