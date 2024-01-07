<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
  <title>Document</title>
</head>
<body>
  Test
  <h4>Selamat Datang <b>{{Auth::user()->name}}</b>, Anda Login sebagai <b>{{Auth::user()->rolename}}</b>.</h4>
  <br>

  <form action="{{ route('simpan') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="id">
    <input type="text" name="nama">
    <button type="submit">Unggah</button>
</form>

<table border="1">
  <thead>
  <tr>
            {{$i=1}}
              <th>No</th>
              <th>id</th>
              <th>nama</th>
              <th>action</th>
            </tr>
  </thead>


            <tbody>
@foreach ($mobil as $mobils) 
            <tr>
              <td>{{$i++}}</td>
                <td>{{$mobils->id}}</td>
                <td>{{$mobils->nama}}</td>
                <td>
                <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal{{$mobils->id}}">
                Edit
                </button>
                            <form action="{{ route('hapus', $mobils->id) }}" method="POST" style="display: inline-block;">
                            @csrf  
                            @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal{{$mobils->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="{{ route('update', $mobils->id) }}" method="post">
      @csrf  
      @method('PUT')
      <input type="text" name="id" value="{{$mobils->id}}">
      <input type="text" name="nama" value="{{$mobils->nama}}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>

      </div>
    </div>
  </div>
</div>


@endforeach

</td>
</tr>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
  <!-- <a href="{{route('actionlogout') }}">logout</a> -->
</body>
</html>