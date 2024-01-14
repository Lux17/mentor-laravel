<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Infinite Learning - Akun</title>
  <!-- plugins:css -->

  @include('includes.admin.styles')

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
@include('includes.admin.navbar')
    <div class="container-fluid page-body-wrapper">

@include('includes.admin.sidebar')

      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="me-md-3 me-xl-5">
                    <h2>Logbook</h2>
                    <p class="mb-md-0">Akun Infinite Learning.</p>
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
                  <form action="{{ route('simpan_akun') }}" method="POST" >
                    @csrf
                    <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control"  name="name" placeholder="Masukan Nama" required="">
                    </div>
                    <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control"  name="username" placeholder="Masukan Username" required="">
                    </div>
                    <div class="mb-3">
                    <label for="name" class="form-label">Password</label>
                    <input type="password" class="form-control"  name="password" placeholder="Masukan Password" required="">
                    </div>
                    <div class="mb-3">
                        <label for="rolename" class="form-label d"> Rolename:</label>
                        <select name="rolename" id="rolename" class="form-control" required="">
                        <option selected >Pilih...</option>
                        <option value="mentee">Mentee</option>
                        <option  value="mentor">Mentor</option>
                        <option  value="admin">Admin</option>
                        </select>
                  </div>
                  <div class="mb-3">
                        <label for="batch" class="form-label d"> Batch:</label>
                        <select name="batch" id="bacth" class="form-control" required="">
                        <option selected >Pilih...</option>
                        <option value="1">1</option>
                        <option  value="2">2</option>
                        <option  value="3">3</option>
                        <option value="4">4</option>
                        <option  value="5">5</option>
                        <option  value="6">6</option>
                        </select>
                  </div>
                  <div class="mb-3">
                    <label for="mentor" class="form-label">Mentor</label>
                    <input type="text" class="form-control"  name="mentor" placeholder="Masukan Mentor" required="">
                  </div>

                  <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Tgl Lahir</label>
                    <input type="date" class="form-control"  name="tgl_lahir" required="">
                  </div>
                  <div class="mb-3">
                    <label for="kota" class="form-label">Kota</label>
                    <input type="text" class="form-control"  name="kota" placeholder="Masukan Kota" required="">
                  </div>
                  <div class="mb-3">
                    <label for="univ" class="form-label">Universitas</label>
                    <input type="text" class="form-control"  name="univ" placeholder="Masukan Universitas" required="">
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
              <th width="100">Id</th>
              <th>Nama</th>
              <th width="100">Username</th>
              <th width="100">Password</th>
              <th width="100">Role</th>
              <th>Batch</th>
              <th width="100">Mentor</th>
              <th width="100">Tgl Lahir</th>
              <th width="100">Kota</th>
              <th width="100">Univ</th>

              <th width="180">Aksi</th>
            </tr>
  </thead>


            <tbody>
          @foreach ($user as $acc) 
            <tr>
              <td>{{$i++}}</td>
                <td>{{$acc->id_user}}</td>
                <td>{{$acc->name}}</td>
                <td>{{$acc->username}}</td>
                <td>{{$acc->password}}</td>
                <td>{{$acc->rolename}}</td>
                <td>{{$acc->batch}}</td>
                <td>{{$acc->mentor}}</td>
                <td>{{$acc->tgl_lahir}}</td>
                <td>{{$acc->kota}}</td>
                <td>{{$acc->univ}}</td>
                <td>
                <button type="button" class="btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#exampleModal{{$acc->id_user}}">
                <i class="mdi mdi-table-edit"></i>
                </button>
                            <form action="{{ route('hapus_akun', $acc->id_user) }}" method="POST" style="display: inline-block;">
                            @csrf  
                            @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">
                                  <i class="mdi mdi-delete"></i>
                              </button>
                            </form>
                
</div>



<!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{$acc->id_user}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Akun</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

          <form action="{{ route('update_akun', $acc->id_user) }}" method="post">
          @csrf  
          @method('PUT')
          <div class="mb-3">
            <input   type="hidden" class="form-control" name="id_user"  value="{{$acc->id_user}}" >                    
            <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control"  name="name" value="{{$acc->name}}" required="">
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control"  name="username" value="{{$acc->username}}" required="">
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Password</label>
            <input type="password" class="form-control"  name="password"  required="">
          </div>
          <div class="mb-3">
            <label for="rolename" class="form-label d"> Rolename:</label>
            <select name="rolename" id="rolename" class="form-control" required="">
              <option selected value="{{$acc->rolename}}" >{{$acc->rolename}}</option>
              <option value="mentee">Mentee</option>
              <option  value="mentor">Mentor</option>
              <option  value="admin">Admin</option>
            </select>
          </div>
          <div class="mb-3">
          <label for="batch" class="form-label d"> Batch:</label>
          <select name="batch" id="batch" class="form-control" required="">
          <option selected  value="{{$acc->batch}}" >{{$acc->batch}}</option>
          <option value="1">1</option>
            <option  value="2">2</option>
            <option  value="3">3</option>
            <option value="4">4</option>
            <option  value="5">5</option>
            <option  value="6">6</option>
          </select>
          </div>
          <div class="mb-3">
            <label for="mentor" class="form-label">Mentor</label>
            <input type="text" class="form-control"  value="{{$acc->mentor}}" name="mentor" required="">
          </div>

          <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tgl Lahir</label>
            <input type="date" class="form-control" value="{{$acc->tgl_lahir}}"  name="tgl_lahir" required="">
          </div>
          <div class="mb-3">
            <label for="kota" class="form-label">Kota</label>
            <input type="text" class="form-control"  value="{{$acc->kota}}" name="kota" placeholder="Masukan Kota" required="">
          </div>
          <div class="mb-3">
              <label for="univ" class="form-label">Universitas</label>
              <input type="text" class="form-control"  value="{{$acc->univ}}" name="univ" placeholder="Masukan Universitas" required="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>

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
        @include('includes.admin.footer')
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  @include('includes.admin.script')
</body>

</html>

