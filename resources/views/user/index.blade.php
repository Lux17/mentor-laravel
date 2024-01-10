<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Infinite Learning</title>
  <!-- plugins:css -->

  @include('includes.mente.styles')

</head>
<body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <!-- <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
              <a href="https://www.bootstrapdash.com/product/majestic-admin-pro/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a> -->
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/majestic-admin-pro/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
@include('includes.mente.navbar')
    <div class="container-fluid page-body-wrapper">

@include('includes.mente.sidebar')

      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="me-md-3 me-xl-5">
                    <h2>Selamat Datang,</h2>
                    <p class="mb-md-0">Dashboard Mentee Infinite Learning.</p>
                  </div>
                  <div class="d-flex">

                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                    <p class="text-primary mb-0 hover-cursor">Mentee</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="overview-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                  </ul>
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-account me-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                          @foreach($tampil_akun as $akun1)
                            <small class="mb-1 text-muted">Mentor</small>
                            {{ $akun1->mentor}}
                          @endforeach
                            <h5 class="me-2 mb-0"></h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-book-open-variant me-3 icon-lg text-warning"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Logbook</small>
                            <h5 class="me-2 mb-0">{{ $count_log }}</h5>
                          </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-flag me-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Tugas</small>
                            <h5 class="me-2 mb-0">{{ $count_tugas }}</h5>
                          </div>
                        </div>
                      </div>
                    </div>
 

          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Informasi Pribadi</p>

                  <div class="container">
                  @foreach($tampil_akun as $akun)
                    <div class="row mb-3">
                    <div class="col">
                    Nama 
                    </div>
                    <div class="col">
                    : {{ $akun->name }}
                    </div>
                    <div class="col">
                    </div>
                    </div>

                    <div class="row mb-3">
                    <div class="col">
                    Username  
                    </div>
                    <div class="col">
                    : {{ $akun->username }}
                    </div>
                    <div class="col">
                    </div>
                    </div>

                    <div class="row mb-3">
                    <div class="col">
                    Tgl Lahir  
                    </div>
                    <div class="col">
                    : {{ $akun->tgl_lahir }}
                    </div>
                    <div class="col">
                    </div>
                    </div>

                    <div class="row mb-3">
                    <div class="col">
                    Asal Kota  
                    </div>
                    <div class="col">
                    : {{ $akun->kota }}
                    </div>
                    <div class="col">
                    </div>
                    </div>

                    <div class="row mb-3">
                    <div class="col">
                    Universitas  
                    </div>
                    <div class="col">
                    : {{ $akun->univ }}
                    </div>
                    <div class="col">
                    </div>
                    </div>
                  @endforeach

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        @include('includes.mente.footer')
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  @include('includes.mente.script')
</body>

</html>

