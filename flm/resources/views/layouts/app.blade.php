<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    <style>
        body {
            background-color: #F4F4F2;
        }
        .navbar {
            background-color: #037E8C;
        }
        .footer {
            background-color: #037E8C;
        }
        .btn-custom {
            background-color: #13C0E5;
            color: white;
        }
        .card-title {
            color: #7EC544;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="/">
                    <img src="{{ asset('img/logo2.png') }}" alt="Logo" class="me-2" width="80">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    @yield('content')

      <footer class="py-4" style="background-color: #037E8C;">
    <div class="container text-center">
      
      <h5 class="mb-3 fw-bold" style="color: #7EC544;">Fundación Levántate Mujer</h5>
      
      <div class="mb-3">
        <a href="#" class="text-decoration-none me-3" style="color: #F4F4F2;">Inicio</a>
        <a href="#" class="text-decoration-none me-3" style="color: #F4F4F2;">Servicios</a>
        <a href="#" class="text-decoration-none" style="color: #F4F4F2;">Contacto</a>
      </div>
      
      <div class="d-flex justify-content-center gap-3 mb-3">
        <a href="https://facebook.com" target="_blank" class="btn btn-light rounded-circle" style="background-color: #13C0E5; color: white;">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com" target="_blank" class="btn btn-light rounded-circle" style="background-color: #7EC544; color: white;">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://instagram.com" target="_blank" class="btn btn-light rounded-circle" style="background-color: #F4F4F2; color: #037E8C;">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://linkedin.com" target="_blank" class="btn btn-light rounded-circle" style="background-color: #13C0E5; color: white;">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="https://youtube.com" target="_blank" class="btn btn-light rounded-circle" style="background-color: #7EC544; color: white;">
          <i class="fab fa-youtube"></i>
        </a>
      </div>

      <small style="color: #F4F4F2;">© 2025 FLM Todos los derechos reservados.</small><br>
      <small style="color: #13C0E5;">Bryan Kender Mendoza Canaviri</small>
    </div>
  </footer>
</body>
</html>