<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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



  <!-- <a href="{{route('actionlogout') }}">logout</a> -->
</body>
</html>