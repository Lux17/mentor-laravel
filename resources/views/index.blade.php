
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Perpustakaan UMC</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <link href="{{ ('landing/assets/img/favicon1.png') }}" rel="icon">
  <link href="{{ ('landing/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 
@include('includes.landing.styles')
</head>

<body>
 
@include('includes.landing.navbar')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center" >
          <h1 >Selamat Datang di Perpustakaan UMC</h1>
          <h2 >Membangun Mahasiswa Berwawasan dan Berakhlak Islami</h2>
          <div >
            <!-- <div class="text-center text-lg-start">
              <a href="#sejarah" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div> -->
          </div>
        </div>
        <div class="col-lg-6 ">
          <img src="{{ ('landing/assets/img/book2.png') }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

      <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" >
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <div class="content">
              <h3>Tentang Kami</h3>
              <h2>Perpustakaan UMC</h2>
              <p>
                Tempat Mahasiswa menambah wawasan dan berdiskusi menjadikan mahasiswa unggul dan berwawasan.
                "Unlock Knowledge, Unleash Imagination at the Library."
              </p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" >
            <img src="{{ ('landing/assets/img/perpus1.jpeg') }}" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

  <main id="main">


    <!-- <div id="bot" class="chat-popup">
      <div id="container"> -->
        <!-- <div id="header">
          <button class="btn-primary tutup" onclick="closeForm()">x</button>
            Library Chatbot
        </div> -->
    
        <!-- <div id="body">
  
            <div class="userSection">
              <div class="messages user-message">
    
              </div>
              <div class="seperator"></div>
            </div>
            <div class="botSection">
              <div class="messages bot-reply">
    
              </div>
              <div class="seperator"></div>
            </div>                
        </div>
    
        <div id="inputArea">
          <input type="text" name="messages" id="userInput" placeholder="Apa yang ingin anda tanyakan?" required>
          <input type="submit" id="send" value="Kirim">
        </div>
      </div> -->
      <!-- </div> -->


<!-- 
<i class="fa-brands fa-rocketchat"></i>

<i class="fab fa-rocketchat"></i> -->

<!-- <a href="" class="act-btn" onclick="openform()"> + </a> -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="#" class="logo d-flex align-items-center">
              <img src="{{ ('landing/assets/img/logo.png') }}" alt="">
 
              <span>Perpustakaan UMC</span>
            </a>
            <p>Membangun Mahasiswa Berwawasan dan Berakhlak Islami.</p>
            <div class="social-links mt-3">

              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="@" class="youtube"><i class="bi bi-youtube"></i></a>

            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Informasi</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Buku</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Jurnal</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Pustakawan</a></li>
            </ul>
          </div>



          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Kontak Kami </h4>
              <strong>Email:</strong> <br>
              perpustakaan@umc.ac.id<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Perpus UMC</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('includes.landing.styles')
</body>

</html>
