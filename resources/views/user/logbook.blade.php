<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Infinite Learning - Logbook</title>
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
            <a href=""><i class="mdi mdi-home me-3 text-white"></i></a>
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
                    <h2>Logbook</h2>
                    <p class="mb-md-0">Laporan Kegiatan harian mentee infinite learning.</p>
                  </div>

                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                  <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs  p-3">
                  <!-- isi -->
                  <br>
                  <div class="row">
                  <div >
                  @if(session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
                  @endif
                  <form action="{{ route('simpan_logbooks') }}" method="POST" >
                    @csrf
                    <div class="mb-3" class="forms-group">
                    <label for="aktifitas" class="form-label">Aktifitas</label>
                    <textarea type="text" class="form-control"  name="aktifitas" placeholder="Masukan Aktifitas" required="" ></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label d"> Reaksi :</label>
                        <select name="emosi" id="jenis" class="form-control" required="">
                        <option selected >Pilih...</option>
                        <option value="Senang Sekali">Senang Sekali</option>
                        <option  value="Biasa aja">Biasa aja</option>
                        <option  value="Sedih">Sedih</option>
                        <option  value="Marah">Marah</option>
                        </select>
                  </div>
                    <div class="mb-3">
                    <label for="id_users" class="form-label">Id User</label>
                    <input type="text" class="form-control"  name="id_users" placeholder="Masukan Id Mahasiswa" required="">
                    </div>
                    <div class="col col-lg-2">
                    <button class="btn btn-primary form-control" type="submit">Simpan</button>
                    </div>
                   
                  </form>
                  </div>
 
                  </div>

              
<div class="table-responsive text-center" >
<table class="table  table-striped table-hover  col-auto table-bordered ">
  <thead class="table-dark">
          <tr class="text-center">
            {{$i=1}}
              <th width="100">No</th>
              <th width="100">id</th>
              <th>Aktivitas</th>
              <th width="100">Reaksi</th>
              <th width="100">Mentee</th>
              <th width="140">Aksi</th>
            </tr>
  </thead>


            <tbody>
  @foreach ($logbook as $log) 
            <tr>
              <td>{{$i++}}</td>
                <td>{{$log->id_log}}</td>
                <td>{{$log->aktifitas}}</td>
                <td>{{$log->emosi}}</td>
                <td>{{$log->id_users}}</td>
                <td>
                <button type="button" class="btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#exampleModal{{$log->id_log}}">
                <i class="mdi mdi-table-edit"></i>
                </button>
                            <form action="{{ route('hapus_logbooks', $log->id_log) }}" method="POST" style="display: inline-block;">
                            @csrf  
                            @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">
                                  <i class="mdi mdi-delete"></i>
                              </button>
                            </form>
                
</div>



<!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{$log->id_log}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Logbook</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

          <form action="{{ route('update_logbooks', $log->id_log) }}" method="post">
          @csrf  
          @method('PUT')
          <div class="mb-3">
          <input   type="hidden" class="form-control" name="id_log"  value="{{$log->id_log}}" >
          <label for="aktifitas" class="form-label">Aktifitas</label>
          <textarea type="text" class="form-control" value="{{$log->aktifitas}}" name="aktifitas" placeholder="Masukan Aktifitas" >{{$log->aktifitas}}</textarea>
          </div>
          <div class="mb-3">
                <label for="jenis" class="form-label d"> Reaksi :</label>
                <select name="emosi" id="jenis" class="form-control" >
                <option selected value="{{$log->emosi}}">Pilih...</option>
                <option value="Senang Sekali">Senang Sekali</option>
                <option  value="Biasa aja">Biasa aja</option>
                <option  value="Sedih">Sedih</option>
                <option  value="Marah">Marah</option>
                </select>
          </div>
          <div class="mb-3">
          <label for="id_users" class="form-label">Id User</label>
          <input type="text" class="form-control" value="{{$log->id_users}}" name="id_users" placeholder="Masukan Id Mahasiswa">
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>

          </div>
        </div>
      </div>
    </div>


    @endforeach

    </td>
    </tr>
    </table>

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

