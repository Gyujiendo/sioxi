<!--Homepage-->

@extends('layouts.layout')

@section('title', 'sioxi_live')

@section('content')

<br>


<a>
<div class="card mb-3 w-75 bg-dark text-white mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('img/live1.jpg') }}" class="img-fluid" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Live in Osaka - June, 14th</h5>
          <p class="card-text">Songs Played: ぬけがら, Rainbow in The Dark, Over the Rainbow, Another One Bites the Dust</p>
          <p class="card-text"><small class="text-body-primary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
</a>

<a>
  <div class="card mb-3 w-75 bg-dark text-white mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{ asset('img/live1.jpg') }}" class="img-fluid" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Live in Osaka - June, 14th</h5>
            <p class="card-text">Songs Played: ぬけがら, Rainbow in The Dark, Over the Rainbow, Another One Bites the Dust</p>
            <p class="card-text"><small class="text-body-primary">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </a>

  <a>
    <div class="card mb-3 w-75 bg-dark text-white mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('img/live1.jpg') }}" class="img-fluid" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Live in Osaka - June, 14th</h5>
              <p class="card-text">Songs Played: ぬけがら, Rainbow in The Dark, Over the Rainbow, Another One Bites the Dust</p>
              <p class="card-text"><small class="text-body-primary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </a>

    <a>
      <div class="card mb-3 w-75 bg-dark text-white mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ asset('img/live1.jpg') }}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Live in Osaka - June, 14th</h5>
                <p class="card-text">Songs Played: ぬけがら, Rainbow in The Dark, Over the Rainbow, Another One Bites the Dust</p>
                <p class="card-text"><small class="text-body-primary">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </a>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-black" id="exampleModalLabel">Live in Osaka - June, 14th</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="{{ asset('img/live1.jpg') }}" class="img-fluid" alt="My Image"><br><br>
            <img src="{{ asset('img/live2.jpg') }}" class="img-fluid" alt="My Image"><br><br>
            <img src="{{ asset('img/live3.jpg') }}" class="img-fluid" alt="My Image"><br><br>
            <img src="{{ asset('img/live4.jpg') }}" class="img-fluid" alt="My Image"><br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



@endsection



