
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Montserrat:wght@200;300&family=Oswald:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #008037;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="asset/logoo.png" alt="Klambimu" width="160" style="margin-top: -13px; margin-bottom: -8px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="nav navbar-nav" style="margin-left: 20px;">
            <a class="nav-link active " style='color: #f2f5ed; font-family: "DM Sans", sans-serif;' aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#" style='color: #f2f5ed; font-family: "DM Sans", sans-serif;'>About</a>
            <a class="nav-link" href="#" style='color: #f2f5ed; font-family: "DM Sans", sans-serif;'>Contact</a>
          </ul>
          
        </div>
        @auth
            <div class="nav-item dropdown" style="color: white;">
                <a class="nav-link dropdown-toggle" href="/dashboard" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </li>
                </ul>
              </div>
              @endauth
        <!-- <ul class="nav navbar-nav navbar-right">
          <li>
            <a class="btn mx-3" style='background-color: #B9D7AB; font-family: "DM Sans", sans-serif;' href="./login.php" style="color: #008037;" role="button">Login</a>
          </li>
        </ul> -->
      </div>
      </nav>
      <!-- CONTENT -->
      <div class="container-fluid" >
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row">
          <div class="col-md-7">
            <img src="asset/mock2.png" alt="">
          </div>
          <div class="col-6 col-md-5">
            <h4 class="brand2" style="font-family: 'Montserrat', sans-serif; font-size: 18px; margin-left: 300px; width: 100px; margin-top: 20px;">KLAMBIMU</h4>
            <h1 class="ket1" style="font-family: 'Oswald', sans-serif; font-size: 100px; margin-top: -15px; padding-left: 30px;">Solution for Your Textile Waste!</h1>
            <h5 class="ket2" style="width: 450px; font-family: 'Montserrat', sans-serif; padding-left: 40px;">Aplikasi Penyetor Berbagai Pakaian Tidak Terpakai Guna Mengurangi Limbah Tekstil</h5>
          </div>
        </div>
      </div>

    {{-- <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul>

            @auth
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/dashboard" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">My Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </li>
                </ul>
              </div>
              @endauth
          </div>
        </div>
    </nav> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>