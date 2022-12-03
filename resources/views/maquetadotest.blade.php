@extends('layouts.app')

@section('content')
<!-- Styles -->
<!-- <div class="container"> -->
<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 bg-category">
            <p>Bootstrap usa una maquetacion por columnas y filas fluidas</p> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 bg-carrussel">
                <!-- Carrussel --> 
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item carousel-fgstore active ">
                            <img src="{{asset('/img/img-05.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item carousel-fgstore ">
                            <img src="{{asset('/img/img-06.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item carousel-fgstore ">
                            <img src="{{asset('/img/img-14.jpg')}}" class="d-block w-100" alt="...">
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
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 bg-brans"> 
                
            </div>
        </div>
        <div class="row bg-offers ">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 m-4 "> 
                    <h2 class="title-ofertas center-father  ">
                            Las mejore ofertas
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12"> 
                    <div class="card p-3 card-fgstore" style="width: 18rem;"> 
                        <img src="{{asset('/img/img-05.jpg')}}" class="card-img-top img-container" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">$99,999.00</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary btn-card">Wishlist</a>
                            <a href="#" class="btn btn-primary btn-card">Carrito</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-most-sell">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 m-4 "> 
                    <h2 class="title-ofertas center-father  ">
                            Las mas vendido
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12"> 
                    <div class="card p-3 card-fgstore" style="width: 18rem;"> 
                        <img src="{{asset('/img/img-05.jpg')}}" class="card-img-top img-container" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">$99,999.00</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary btn-card">Wishlist</a>
                            <a href="#" class="btn btn-primary btn-card">Carrito</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6  bg-danger">
            <p>Bootstrap usa una maquetacion por columnas y filas fluidas</p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6  bg-warning">
            <p>Ejemplo para tenerlo en cuenta</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1 col-md-2 col-lg-2">
            <p>Lorem ipsum...</p>
            </div>
            <div class="col-sm-10 col-md-8 col-lg-8">
            <p>Sed ut perspiciatis...</p>
            </div>
            <div class="col-sm-1 col-md-2 col-lg-2">
            <p>Lorem ipsum...</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
-->
</div>
<script>
    $(document).ready(function () {
  $(".customer-logos").slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4
        }
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 3
        }
      }
    ]
  });
});

</script>
@endsection
