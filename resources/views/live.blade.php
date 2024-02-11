<!--Homepage-->

@extends('layouts.layout')

@section('title', 'sioxi_live')

@section('content')

<style>

body {
      margin: 0;
      padding: 0;
      
    }

    #video-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh; /* 928px; if you want to fix only in the main home page text */
      overflow: hidden;
      z-index: -1;
    }

    #video {
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: brightness(20%); /* Adjust the brightness as needed */
    }



.card {
    opacity: 0;
    transition: opacity 0.8s ease-in-out, transform 0.3s ease-in-out !important;
 }

    .card_scale:hover {
        transform: scale(1.1);
        overflow: hidden;
        
    }

    .card-img-top {
        object-fit: cover;
    }

.card.show {
    opacity: 1;
}  

  .image-container {
    position: relative;
    overflow: hidden;
  }
  
  .image-container img {
    transition: filter 0.3s ease;
  }
  
  .overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    transition: opacity 0.3s ease;
  }
  
  .image-container:hover .overlay {
    opacity: 1;
  }

#thumbnailLabel i {
    display: block;
}

#thumbnailInput {
    display: none;
}

.gallery-img {
    transition: transform 0.3s ease-in-out;
}

.gallery-img:hover {
    transform: scale(1.1);
}

.gallery-img img {
    object-fit: cover;
    width: 100%;
    height: 100%;
}

.scaleaddbutton {
        transition: transform 0.3s ease-in-out;
    }

    .scaleaddbutton:hover {
        transform: scale(1.2);
    }  

 @media only screen and (min-width: 800px) {
    .live_pic {
      padding-right: 30px;
    }
  }

  
  </style>

<div id="video-container">
  <video id="video" autoplay muted loop>
    <source src="{{ asset('img/seavid3.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>

<br><br>
<div class="text-center">
<h1 data-aos="fade-right" data-aos-duration="500">ライブ</h1>
</div>

<hr class="w-75 mx-auto">
<br>
<div class="text-center mx-auto" data-aos="fade-right" data-aos-duration="800">
  <h3><a>|&nbsp;&nbsp;MOST RECENT</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a>LEAST RECENT</a>&nbsp;&nbsp;|</h3>
  </div>

<br><br><br>

@foreach ($lives as $live)
    <div class="card mb-3 w-75 text-white mx-auto card_scale" style="background-color: transparent;" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $live->id }}">
      <a href="#" style="color: inherit; text-decoration: none;">
      <div class="row g-0">
        <div class="col-md-4">
          @if ($live->media->count() > 0)
            <img src="{{ asset('storage/' . $live->media[0]->file_path) }}" class="img-fluid live_pic" alt="Thumbnail">
            <br>
          @else
            <p>No thumbnail available</p>
          @endif
        </div>
        <div class="col-md-8 border border-secondary">
          <div class="card-body text-center">
            <h2 class="card-title">Live in {{$live->location}} - {{ $live->live_date->format('F jS, Y') }}</h2>
            <br><p class="card-text"><b>Description:</b><br> {!! Str::limit($live->description, 200, '...') !!}</p>
            <p class="card-text"><b>Songs Played:</b> {!! $live->songs_played !!}</p>
            <p class="card-text"><small class="text-body-primary">{{$live->last_update}}</small></p>
          </div>
        </div>
      </div>
     </a>
    </div>
  
  <br><br>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal{{ $live->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $live->id }}" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content text-white bg-dark">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel{{ $live->id }}">Live in {{$live->location}} - {{ $live->live_date->format('F jS, Y') }}</h1>
          <button type="button" class="btn btn-close" style="background-color: #fff;" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">

          <div class="container mt-4">
            <div class="row">
                <div class="col-md-7">
                    @if ($live->media->count() > 0)
                    <div class="image-container">
                        <img src="{{ asset('storage/' . $live->media[0]->file_path) }}" class="img-fluid" alt="Thumbnail">
                        @if(auth()->check())
                        <style>
                          .image-container:hover img {
                          filter: blur(3px); /* Adjust the blur amount as needed */
                        }
                        </style>
                        <div class="overlay">
                            <form id="thumbnailForm{{ $live->id }}" action="{{ route('add_thumbnail', ['live_id' => $live->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="thumbnail" accept="image/*" id="thumbnailInput{{$live->id}}" style="display: none;">
                                <label for="thumbnailInput{{$live->id}}" id="thumbnailLabel{{$live->id}}" style="cursor: pointer;"><i class="fa-solid fa-pen-to-square fa-2xl"></i></label>
                            </form>
                        </div>
                        @endif
                    </div>
                    @else
                    <p>No thumbnail available</p>
                    <form id="thumbnailForm{{ $live->id }}" action="{{ route('add_thumbnail', ['live_id' => $live->id]) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <input type="file" name="thumbnail" accept="image/*" id="thumbnailInput{{$live->id}}" style="display: none;">
                      <label for="thumbnailInput{{$live->id}}" id="thumbnailLabel{{$live->id}}" style="cursor: pointer;"><i class="fa-solid fa-pen-to-square fa-2xl"></i></label>
                  </form>
                    @endif
                    <br><br>
                <div class="text-center"><b>Songs Played:</b><br><br> {!! $live->songs_played !!}</div>
                </div>

                

                <script>
                document.getElementById('thumbnailInput{{$live->id}}').addEventListener('change', function () {
                  var formId = 'thumbnailForm{{$live->id}}';
              
                  document.getElementById(formId).submit();
                });
                </script>

              <div class="col-md-5">
                <b>Live Location and Date:</b><br><br>  {{$live->location}} - {{ $live->live_date->format('F jS, Y') }}
                <br><br>
                <b>Description:</b><br><br> {!! $live->description !!}
                <br><br>
              </div>
            </div>
          </div>

          <br>
          <hr>

          <div class="container mt-4">
            <div class="row">
                <h2 class="pb-3 pl-5 text-center">ギャラリー</h2>
                @php $count = -1; @endphp
                @foreach ($live->media as $media)
                    @if (!$loop->first) <!-- Check if it's not the first iteration -->
                        <div class="col-2 gallery-img">
                            <a href="{{ asset('storage/'.$media->file_path) }}" data-lightbox="gallery-{{ $live->id }}">
                              <img src="{{ asset('storage/'.$media->file_path) }}" class="card-img-top" alt="..." style="object-fit: cover; width: 100%; height: 100%;">
                            </a>
                        </div>
                    @endif
                    @if (++$count % 6 == 0 || $loop->last)
                        <!-- Close the row after every 12 columns or on the last iteration -->
                        </div><br><div class="row">
                    @endif
                @endforeach
            </div>
         </div>
        
        
          
        </div>
        @if(auth()->check())
        <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="redirectToDeletePage({{$live->id}})" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ギャラリーを編集する？"><i class="fa-regular fa-images"></i></button>
        <button type="button" class="btn btn-primary" onclick="redirectToEditPage({{$live->id}})" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="何かを忘れちゃったか？"><i class="fa-regular fa-pen-to-square"></i></button>
        <button type="button" class="btn btn-danger" onclick="confirmDelete('{{ route('delete_live', ['id' => $live->id]) }}' )" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ゼロからやり直す？"><i class="fa-solid fa-trash"></i></button>

        <!-- Tooltip markup -->
        <div class="tooltip fade" role="tooltip" id="tooltipPicture" x-placement="bottom" style="position: absolute; top: 100%; left: 50%; transform: translate(-50%, 0px);" data-bs-placement="bottom">
            <div class="tooltip-inner">
                Please select a picture.
            </div>
        </div>

        <!-- DONT FORGET THIS FORM FOR DELETING -->
        <form action="{{ route('delete_live', ['id' => $live->id]) }}" method="POST" id="deleteLiveForm{{$live->id}}">
            @csrf
            @method('DELETE')
        </form>
    </div>
      @endif

      </div>
    </div>
  </div>

@endforeach


<!-- Button for adding a new live -->
@if(auth()->check())
<div class="card mx-auto justify-content-center align-self-center border-0" style="background-color: transparent;">
  <div class="card text-center scaleaddbutton" style="background-color: transparent; border: 2px solid white; border-radius: 50%; width: 100px; height: 100px;">
    <div class="card-body text-center">
      <a data-bs-toggle="modal" data-bs-target="#addlivemodal" href="#" style="color: inherit; text-decoration: none; display: block; padding-top: 17px">
        <i class="fa-solid fa-plus fa-2x" style="color: white;"></i>
     </a>    
    </div>
  </div>
</div>
<br><br><br>



<div class="modal fade" id="addlivemodal" tabindex="-1" aria-labelledby="addlivemodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content bg-dark text-white">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addlivemodalLabel">Adding a New Live</h1>
      </div>
      <div class="modal-body">
        <form action="{{ route('create_live') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" required>
          </div>
          <div class="mb-3">
            <label for="live_date" class="form-label">Live Date</label>
            <input type="datetime-local" class="form-control" id="live_date" name="live_date" required>
          </div>
          <div class="mb-3">
            <label for="songs_played" class="form-label">Songs Played</label>
            <textarea class="form-control" id="songs_played" name="songs_played" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="thumbnail" class="form-label">Thumbnail</label>
            <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*">
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary mx-auto">Create Live Event</button>
      </form>
      </div>
    </div>
  </div>
</div>
@endif

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{ asset('js/lightbox.js') }}"></script>

<script>
  $(document).ready(function(){
      lightbox.option({
          'resizeDuration': 200,
          'wrapAround': true
      });
  });
</script>

<script>

  //(Live) Function to submiting the ID to the route that delete the selected item.
  function submitDeleteForm(button) {
    var liveId = $(button).data('live-id');
    var formId = 'deleteLiveForm' + liveId;
    document.getElementById(formId).submit();
  }

  //(Live) Function to pass using GET to a page to edit information.
  function redirectToEditPage(liveId) {
    window.location.href = '/live/' + liveId + '/edit';
  }

  function redirectToDeletePage(liveId) {
    window.location.href = '/live/' + liveId + '/delete_pic';
  }

  function confirmDelete(route) {
        if (confirm('Are you sure you want to DELETE this LIVE?')) {
            document.getElementById('deleteLiveForm{{$live->id}}').submit();
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        // Add the 'show' class to each card after the page is fully loaded
        var cards = document.querySelectorAll('.card');
        cards.forEach(function(card) {
            card.classList.add('show');
        });
    });

    
</script>


@endsection
