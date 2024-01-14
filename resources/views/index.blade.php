
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Infinite Learning</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('landing/assets/img/infinite4.png') }}" rel="icon">
  <link href="{{ asset('landing/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 
 
  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('landing/assets/vendor/aos/aos.css') }}" >
  <link rel="stylesheet" href="{{ asset('landing/assets/vendor/bootstrap/css/bootstrap.min.css') }}" >
  <link rel="stylesheet" href="{{ asset('landing/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" >
  <link rel="stylesheet" href="{{ asset('landing/assets/vendor/glightbox/css/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/assets/vendor/remixicon/remixicon.css') }}" >
  <link rel="stylesheet" href="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.css') }}" >

  <!-- <link rel="stylesheet" href="https://pyscript.net/releases/2023.11.1/core.css" />
  <script type="module" src="https://pyscript.net/releases/2023.11.1/core.js"></script> 
 -->

   <!-- Template Main CSS File -->
 <link rel="stylesheet" href="{{ asset('landing/assets/css/styles1.css') }}">
 <style>
@import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');


#container{
  height: 90%;
  border-radius: 6px;
  width: 90%;
  background: #F3F4F6;
}

#header {
  width: 100%;
  height: 10%;
  border-radius: 6px;
  color: white;
  text-align: center;
  font-size: 2rem;
  padding-top: 12px;
  box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
}

#header-bot {
  width: 100%;
  height: 15%;
  border-radius: 6px;
  background: #3B82F6;
  color: white;
  text-align: center;
  font-size: 2rem;
  padding-top: 12px;
  box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
}

#body{
  width: 100%;
  height: 75%;
  background-color: #F3F4F6;
  overflow-y: auto;
}




</style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="#home" class="logo d-flex align-items-center">
      <img src="{{ asset('landing/assets/img/infinite4.png') }}" alt="" width="200" height="80" class="d-inline-block align-text-top">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="nav-item">
            <a class="nav-link" style="color: black;" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: black;" href="#">Informasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: black;" href="#">Program</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: black;"  href="#">Karir</a>
          </li>
          <li><a class="getstarted scrollto" href="{{ route('login') }}"type="submit">Masuk</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center" >
          <h1 >Selamat Datang di Infinite Learning Indonesia</h1>
          <h2 ></h2>
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
          <img src="{{ asset('landing/assets/img/IL2.jpeg') }}" class="img-fluid" alt="">
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
              <h2>Infinite Learning</h2>
              <p>
              Infinite meluncurkan bisnis pendidikan di Nongsa Digital Park (NDP) di Batam di bawah Infinite Learning (IL) yang berpusat pada pengembangan kursus pelatihan kejuruan yang relevan dengan kegiatan Infinite Studios dan meningkatnya permintaan akan talenta teknologi yang terampil.
Memperluas operasi pelatihan internal kami, Infinite Learning telah memperoleh lisensi yang diperlukan dari pemerintah Indonesia yang memungkinkan Infinite Learning mengadakan kursus pelatihan kejuruan untuk umum.

              </p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" >
            <img src="{{ asset('landing/assets/img/IL1.jpeg') }}" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

  <main id="main">


    <div id="bot" class="chat-popup">
      <div id="container">
        <div id="header-bot">
          <button class="btn btn-primary tutup" onclick="closeForm()">X</button>
            Infinite Chatbot
        </div>
    
        <div id="body">
            <!-- This section will be dynamically inserted from JavaScript -->
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
      </div>
      </div>


<!-- 
<i class="fa-brands fa-rocketchat"></i>

<i class="fab fa-rocketchat"></i> -->

<a href="" class="act-btn" onclick="openform()"> <i class="bi bi-chat-text"></i> </a>



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="#" class="logo d-flex align-items-center">
              <!-- <img src="assets/img/logo.png" alt=""> -->
 
              <span>Infinite Learning</span>
            </a>
            <p>“Anyone Anything”.</p>
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
              <li><i class="bi bi-chevron-right"></i> <a href="#">Program</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Karir</a></li>
            </ul>
          </div>



          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Kontak Kami </h4>
              <strong>Email:</strong> <br>
              info@infinitelearning.id<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Infinite Learning</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- floating button -->
  <script>
    function openForm() {
      document.getElementById("bot").style.display = "block";
    }

    function closeForm() {
      document.getElementById("bot").style.display = "none";
    }
  </script>


  <!-- Script BOT -->
  <script type="text/javascript">

  // When send button gets clicked
  document.querySelector("#send").addEventListener("click", async () => {

  // create new request object. get user message
  let xhr = new XMLHttpRequest();
  var userMessage = document.querySelector("#userInput").value


  // create html to hold user message. 
  let userHtml = '<div class="userSection">'+'<div class="messages user-message">'+userMessage+'</div>'+
  '<div class="seperator"></div>'+'</div>'


  // insert user message into the page
  document.querySelector('#body').innerHTML+= userHtml;

  // open a post request to server script. pass user message as parameter 
  xhr.open("POST", "/bot");
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send(`messageValue=${userMessage}`);


  // When response is returned, get reply text into HTML and insert in page
  xhr.onload = function () {
      let botHtml = '<div class="botSection">'+'<div class="messages bot-reply">'+this.responseText+'</div>'+
      '<div class="seperator"></div>'+'</div>'

      document.querySelector('#body').innerHTML+= botHtml;
  }

})
</script>




<script src="{{ asset('landing/assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('landing/article.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('landing/assets/js/main.js') }}"></script>


</body>

</html>
