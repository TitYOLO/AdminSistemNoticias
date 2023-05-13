<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/8a366891cb.js" crossorigin="anonymous"></script>
    <link  rel="stylesheet" href='/Login/style.css'>
    <title>Login</title>
</head>
<body style="background-color:green;">

<!--NavbarPrincipal-->
<nav id="Menu" class="navbar navbar-expand-sm bg-dark fixed-top">
  <a class="navbar-brand" href="#">Arkedia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href=""></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="assent/html/Plataformas.html"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
  </div>
</nav>


<div class="container" style="margin-top: 10%;">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-center">Iniciar Sesión</h2>
<form action="login.php" method="post" style="margin-top: 20%;">
  <div class="form-group">
  <label for="username">User Name</label>
    <input type="text"  class="form-control" name="uname" placeholder="User Name">
    <label for="password">Password</label>
    <input type="password"  class="form-control" name="password" placeholder="Password">
    <br>
    <button class="btn btn-primary btn-block">Login</button>
  </div>
</form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>


