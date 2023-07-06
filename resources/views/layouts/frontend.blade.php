<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/style.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <img src="/img/A.png" alt="Bootstrap" width="30" height="24" />
        <a class="navbar-brand fw-bold" href="#">Hamba Allah</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Type mobil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#about">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('contact') }}">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="">Blog</a>
            </li>
          </ul>
          <div>
            <a href="login.html"><button type="button" class="btn btn-primary me-md-2">Sign In</button></a>
            <a href="Registrasi.html"><button type="button" class="btn btn-primary">Sign Up</button></a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <!-- col-md-8 col-md-offset-2 -->
    <!-- header -->
    @yield('content')
         <!-- about me -->
         <section id="about">
          <div class="container">
            <div class="row ">
              <center>
              <div class="col">
                <h2>About Me</h2>
                <div class="line dropup-center"></div>
              </div>
            </center>
            </div>
            <div class="row justify-content-center fs-5 text-center">
              <div class="col-4 mb-4">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, ipsum?</p>
              </div>
              <div class="col-4 mb-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit iste incidunt quas asperiores corporis facilis fuga praesentium aperiam voluptatibus voluptate eius eaque itaque, accusamus omnis.</p>
              </div>
            </div>
          </div>
        </section>
      <!-- about akhir -->
      <!-- kontak -->
      <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>CONTACT ME</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="Name" class="form-label">nama lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0d6efd"
          fill-opacity="1"
          d="M0,160L48,160C96,160,192,160,288,181.3C384,203,480,245,576,250.7C672,256,768,224,864,186.7C960,149,1056,107,1152,80C1248,53,1344,43,1392,37.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
     </section>  

     <!-- kontak -->
    <footer class="bg-primary text-white text-center pb-2 pt-2">
      <p class="text-center ">Creted with love by <a href="https://www.youtube.com/watch?v=Zl9GV8iVypQ&t=34s" class="text-white fw-bold">Hamba Allah</a></p>
    </footer>
    <!-- akhir card -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>