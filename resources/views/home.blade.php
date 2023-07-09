<!--Homepage-->

@extends('layouts.layout')

@section('title', 'sioxi_homepage')

@section('content')


<!--Homepage text starts here-->
<div class="container text-lg text-center">
  <div class="row">
    <div class="col-lg-6 col-12 mx-auto">

      <br><br>

        <h1>Ironical Electro Popband<br><br>
        寄せては返す感情の波に <br><br>
        膝までどっぷりと浸かって綴った言葉
        </h1>

    </div>
    </div>
</div>
<!--Homepage text ends here-->

<br><br>

<!--Homepage text starts here-->
<div class="container text-lg text-center">
  <div class="row">
    <div class="col-lg-6 col-12 mx-auto">

      <br><br>

        <h1>Most Recent Tracks:</h1>

    </div>
    </div>
</div>
<!--Homepage text ends here-->





<br>

<!-- Homepage carousel starts here -->
<div class="col-lg-6 col-12 mx-auto">
  <div id="carouselExampleCaptions" class="carousel slide mx-auto w-50 h-50">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/cicadashell.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-dark">Nukegara</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/imgtobeadded.png') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Track to be added!</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/imgtobeadded.png') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Track to be added!</h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!-- Homepage carousel ends here -->

<br><br><br><br>

<!--Homepage text starts here-->
<div class="container text-lg text-center">
  <div class="row">
    <div class="col-lg-6 col-12 mx-auto">

      <br><br>

        <h1>Next Live Info:<br><br>
        Place <br><br>
        Date and hour
        </h1>

        <br><br>

    </div>
    </div>
</div>
<!--Homepage text ends here-->

<br>

<br><br>

@endsection
