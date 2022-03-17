<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tchiowa corp</title>

    <!-- Favicons -->
    <link href="/img/Tchiowacorp.png" rel="icon">
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="/css/styles.css">

</head>
<body>
  
    <button
            type="button"
            class="btn btn-danger btn-floating btn-lg"
            id="btn-back-to-top"
            style="border-radius:25px; padding:10px; font-size:22px"
            >
            <ion-icon name="arrow-up-circle-sharp"></ion-icon>
    </button>

    <!-- ===== Navbar ===== -->
    <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <img src="/img/Tchiowacorp.png" alt="" width="45" height="32" class="img-fluid">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0" id="barra">
        <li><a href="#" class="nav-link px-2 link-secondary scrollto">Home</a></li>
        <li><a href="#about" class="nav-link px-2 link-dark scrollto">Sobre</a></li>
        <li><a href="#service" class="nav-link px-2 link-dark scrollto">Serviços</a></li>
        <li><a href="#portfolio" class="nav-link px-2 link-dark scrollto">Portfólio</a></li>
        <li><a href="#contact" class="nav-link px-2 link-dark scrollto">Contacto</a></li>
      </ul>
    </header>
  </div><!-- End Header -->

  @yield ('content')

  <!-- ===== Footer ===== -->
  <div class="b-example-divider"></div>


  <div class="container">
    <footer class="py-5">
      <div class="row">
        <div class="col-2">
          <h5>Links utéis</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>

        <div class="col-2">
          <h5>Nossos serviços</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>

        <div class="col-4 offset-1">
          <form>
            <h5>Subscribe to our newsletter</h5>
            <p>Monthly digest of whats new and exciting from us.</p>
            <div class="d-flex w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
          </form>
        </div>
      </div>

      <div class="d-flex justify-content-between py-4 my-4 border-top">
        <p>&copy; 2022 Tchiowa, Corp. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-dark" href="#"><ion-icon name="logo-twitter"></ion-icon></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><ion-icon name="logo-instagram"></ion-icon></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><ion-icon name="logo-facebook"></ion-icon></svg></a></li>
        </ul>
      </div>
    </footer>
  </div>
  <!-- End of footer-->

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Ion Icons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- Back-to-top JS -->
<script src="/js/back-to-top.js"></script>

</body>
</html>