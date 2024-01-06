<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  @if(session('error'))
  <div class="alert alert-danger">
  <b>Opps!</b> {{session('error')}}
  </div>
  @endif

  <form action="{{ route('actionlogin') }}" method="post">
    @csrf
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Username</label>
  <input type="text" class="form-control"  name="username" placeholder="Username">
</div>
<label for="inputPassword5" class="form-label">Password</label>
<input type="password" id="inputPassword5" name="password" class="form-control" aria-describedby="passwordHelpBlock">
<button type="submit" class="btn btn-primary form-control"> Login </button>
  </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>