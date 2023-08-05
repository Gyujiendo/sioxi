<!--Tracklist Page-->

@extends('layouts.layout')

@section('title', 'sioxi_tracklist')

@section('content')

<br><br>

<div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card bg-dark text-white" style="width: 18rem;" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src={{ asset('img/cicadashell.jpg') }} class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">抜け殻 - Cicada Shell</h5>
              <p class="card-text">Debutted in December 31st</p>
            </div>
          </div>
      </div>
      <div class="col-md-4">
        <div class="card bg-dark text-white" style="width: 18rem;">
            <img src="{{ asset('img/imgtobeadded.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Track Name</h5>
              <p class="card-text">Debut date goes here</p>
            </div>
          </div>
      </div>
      <div class="col-md-4">
        <div class="card bg-dark text-white" style="width: 18rem;">
            <img src="{{ asset('img/imgtobeadded.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Track Name</h5>
              <p class="card-text">Debut date goes here</p>
            </div>
          </div>
      </div>
    </div>
  </div>

  <br><br>

  <div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-dark text-white" style="width: 18rem;">
                <img src="{{ asset('img/imgtobeadded.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Track Name</h5>
                  <p class="card-text">Debut date goes here</p>
                </div>
              </div>
          </div>
      <div class="col-md-4">
        <div class="card bg-dark text-white" style="width: 18rem;">
            <img src="{{ asset('img/imgtobeadded.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Track Name</h5>
              <p class="card-text">Debut date goes here</p>
            </div>
          </div>
      </div>
      <div class="col-md-4">
        <div class="card bg-dark text-white" style="width: 18rem;">
            <img src="{{ asset('img/imgtobeadded.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Track Name</h5>
              <p class="card-text">Debut date goes here</p>
            </div>
          </div>
      </div>
    </div>
  </div>
  
  <br><br>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl ">
      <div class="modal-content text-white bg-dark">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">抜け殻 - Cicada Shell</h1>
          <button type="button" class="btn btn-close btn-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-white bg-dark">

            <div class="card mb-3 text-white bg-dark">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src={{ asset('img/cicadashell.jpg') }} class="img-fluid" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-text">Watch now at youtube <a href="https://www.youtube.com/watch?v=u-J4e_qIdA0" target="_blank">here</a></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>
  </div>


@endsection