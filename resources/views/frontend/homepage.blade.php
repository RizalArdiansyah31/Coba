@extends('layouts.frontend')

@section('content')
<div class="" id="beranda">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/s-1.png" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block .text-dark">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/s-2.png" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block .text-dark">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/s-3.png" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="img/s-4.png" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>


<!-- section -->
<section id="pilihan">
  <div class="container ">
    <div class="text-center ">
      <center>
        <div class="co align-content-center font">
          <h2>Sewa Mobil</h2>
          <div class="line"></div>
        </div>
      </center>
    </div>
    <div class="row justify-content-center fs-5 text-center ">
      <div class="col-7 ">
        <p>
          Hamba Allah Car Jogja menyediakan layanan jasa sewa mobil Jogja dengan harga yang sangat ekonomis dengan unit baru dan terawat. Tersedia juga layanan sewa mobil lepas kunci atau All in (Driver + Bbm) Dengan syarat yang mudah
        </p>
      </div>
    </div>
    <div class="row justify-content-center">
      @foreach($cars as $car)
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="/img/10.jpg" class="card-img-top" alt="projects1" />
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">sewa</a>
            <a class="btn btn-info mt-auto text-white"
                    href="{{ route('detail') }}">Detail</a>
          </div>
        </div>
      </div>
      @endforeach
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="/img/10.jpg" class="card-img-top" alt="projects1" />
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">sewa</a>
            <a class="btn btn-info mt-auto text-white"
                    href="{{ route('detail') }}">Detail</a>
          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="/img/10.jpg" class="card-img-top" alt="projects1" />
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">sewa</a>
            <a class="btn btn-info mt-auto text-white"
                    href="{{ route('detail') }}">Detail</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="/img/10.jpg" class="card-img-top" alt="projects1" />
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary dropdown-center">sewa</a>
            <a class="btn btn-info mt-auto text-white"
                    href="{{ route('detail') }}">Detail</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="/img/10.jpg" class="card-img-top" alt="projects1" />
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">sewa</a>
            <a class="btn btn-info mt-auto text-white"
                    href="{{ route('detail') }}">Detail</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="card">
          <img src="/img/10.jpg" class="card-img-top" alt="projects1" />
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">sewa</a>
            <a class="btn btn-info mt-auto text-white"
                    href="{{ route('detail') }}">Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection



