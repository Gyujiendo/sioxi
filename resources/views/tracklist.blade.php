<!--Tracklist Page-->

@extends('layouts.layout')

@section('title', 'sioxi_tracklist')

@section('content')

<style>

@media screen and (max-width: 800px) {
  body {
    overflow-x: hidden;  /* Apply overflow-x: hidden when screen width is below 740px */
  }
}

.scaleeff {
        transition: transform 0.2s ease-in-out;
    }

    .scaleeff:hover {
        transform: scale(1.1);
    }

    #

body {
      margin: 0;
      padding: 0;
      
    }

    #video-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%; /* 928px; if you want to fix only in the main home page text */
      overflow: hidden;
      z-index: -1;
    }

    #video {
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: brightness(60%); /* Adjust the brightness as needed */
    }

body.darker-mode {
  background-color: #272b30; /* A darker gray color */
  color: #fff; /* Set text color to white or a suitable color for dark mode */
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

.scaleaddbutton {
        transition: transform 0.3s ease-in-out;
    }

    .scaleaddbutton:hover {
        transform: scale(1.2);
    }

</style>

<div id="video-container">
  <video id="video" autoplay muted loop>
    <source src="{{ asset('img/seavid2.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>

<br><br>
<div class="text-center">
<h1 data-aos="fade-right" data-aos-duration="500">曲リスト</h1>
</div>

<hr class="w-75 mx-auto">
<br>
<div class="text-center mx-auto" data-aos="fade-right" data-aos-duration="600">
  <h3>|&nbsp;&nbsp;<a href="#" style="color: inherit; text-decoration: none;">MOST RECENT</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#" style="color: inherit; text-decoration: none;">LEAST RECENT</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#" style="color: inherit; text-decoration: none;">SINGLE</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#" style="color: inherit; text-decoration: none;">BY ALBUM</a>&nbsp;&nbsp;|</h3>
  </div>

<br>

@php $counter = 0 @endphp

@if(isset($tracks) && count($tracks) > 0)

@foreach ($tracks as $track)

@if ($counter % 3 == 0)
<br><br>
<div class="container">
  <div class="row">
@endif

<div class="col-md-4">
  <a class="mx-auto justify-content-center" href="#" style="color: inherit; text-decoration: none;">
    <div class="card text-white mx-auto border-0 card_scale" style="height: auto; background-color: transparent;" data-bs-toggle="modal" data-bs-target="#modal{{$track->id}}">
      <img src="{{ asset('storage/'.$track->img_path)}}" style="width:300px; height: 300px; object-fit: cover;" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">{{ $track->title }}</h5>
        <p class="card-text">Debuted in {{ $track->debut_date->format('F jS, Y') }}</p>
    </div>
  </a> 

    </div>
    <br><br><br>
</div>


<!-- Dynamic Modal -->
<div class="modal fade" id="modal{{$track->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content text-white bg-dark">
      <div class="modal-header">
        <h1 class="modal-title fs-2 text-center" id="exampleModalLabel">&nbsp;&nbsp;&nbsp;{{$track->title}}</h1>
        <button type="button" class="btn btn-close" style="background-color: #fff;" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-white bg-dark">
        <div class="card mb-3 text-white bg-dark border-0 mx-auto">
          <div class="row g-0">

            <div class="col-md-4" style="padding-left: 30px;">
              <div class="image-container"><br><br>
                  <img src="{{ asset('storage/' . $track->img_path) }}" class="img-fluid" alt="...">
                  @if(auth()->check())
                      <form id="editPictureForm{{$track->id}}" action="{{ route('tracks.update_pic', ['id' => $track->id]) }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          
                          <!-- Hidden file input for image upload -->
                          <input type="file" name="image" id="fileInput{{$track->id}}" style="display: none;" accept="image/*">
          
                          <div class="overlay">
                              <!-- Trigger the file input when the pen icon is clicked -->
                              <label for="fileInput{{$track->id}}" style="color: inherit; text-decoration: none; cursor: pointer;">
                                  <i class="fa-solid fa-pen-to-square fa-2xl"></i>
                              </label>
                          </div>
          
                          <!-- Add a submit button to trigger the form submission -->
                          <button type="submit" style="display: none;"></button>
                      </form>
                      <style>
                          .image-container:hover img {
                              filter: blur(3px); /* Adjust the blur amount as needed */
                          }
                      </style>
                  @endif
              </div>
          </div>
          

          <div class="col-md-8">
            <div class="card-body text-center">
                <h2>歌詞</h2>
                <hr class="w-75 mx-auto">
                <br>
                <div class="lyrics-container" style="max-height: 275px; overflow-y: auto;">
                    <h5 style="font-size: 15px;">{!! $track->lyrics !!}</h5>
                </div>
                <br>
                <p class="card-text"><div class="scaleeff">
                  <a href="{{$track->yt_link}}" target="_blank" style="color: inherit; text-decoration: none;"><i class="fa-brands fa-youtube fa-xl" style="transform: initial;"></i> &nbsp;<u>Watch now on YouTube</u></a></p>
                  </div>
            </div>
        </div>
        
          </div>
        </div>
      </div>
      @if(auth()->check())
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="編集しますか？" style="margin-right: 10px;" onclick="redirectToEditPage({{$track->id}})"><i class="fa-regular fa-pen-to-square"></i></button>
        <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="後悔するなよ!" style="margin-right: 10px;" onclick="confirmDelete('{{ route('delete_track', ['id' => $track->id]) }}')"><i class="fa-solid fa-trash"></i></button>
        <!-- DONT FORGET THIS FORM FOR DELETING -->
        <form action="{{ route('delete_track', ['id' => $track->id]) }}" method="POST" id="deleteTrackForm{{$track->id}}">
          @csrf
          @method('DELETE')
      </form>
      </div>
      @endif
    </div>
  </div>
</div>

<script>
document.getElementById('fileInput{{$track->id}}').addEventListener('change', function() {
  // Assuming you have a form with the ID 'editPictureForm'
  document.getElementById('editPictureForm{{$track->id}}').submit();
});
</script>

@php $counter++ @endphp


<!--If reaches the last track put the static card, but also if the last track ended an row with 3 create a new container with only the static-->
@if ($counter % 3 == 0 || $loop->last)
  @if ($loop->last)

    <br><br>
    <!--Add a new track button-->
    @if(auth()->check())
    <div class="col-md-4 d-flex justify-content-center" style="padding-top: 125px">
      <div class="card text-white text-center scaleaddbutton" style="border: 2px solid white; border-radius: 50%; background-color: transparent; width: 100px; height: 100px;">
          <div class="card-body text-center">
            <a data-bs-toggle="modal" data-bs-target="#formmodal" href="#" style="color: inherit; text-decoration: none; display: block; padding-top: 17px">
              <i class="fa-solid fa-plus fa-2x" style="color: white;"></i>
          </a>          
          </div>
      </div>
   </div>
   <!--Add a new track button ends-->
  
    @endif

  @endif
  </div>
</div>
@endif

@endforeach

@else

<br><br>

<div class="container">
  <div class="row ">
  <div class="card bg-dark text-white" style="width: 18rem;">
    <div class="card-body text-center mx-auto">
      <h2>Add a new track</h2><br><br>
      <a data-bs-toggle="modal" data-bs-target="#formmodal" href="#"><i class="fa-solid fa-plus fa-2xl"></i></a>
      <br><br>
    </div>
  </div>
</div>
</div>

@endif
      

  </div>

  <br><br>

  <br><br>

<!-- Modal (Adding New form)-->
<div class="modal fade" id="formmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content text-white bg-dark">
          <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Adding a New Track</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-white bg-dark">
              <form action="{{ route('create_track') }}" method="post" enctype="multipart/form-data">
                  @csrf
  
                  <div class="mb-3">
                      <label for="title" class="form-label">Title:</label>
                      <input type="text" name="title" class="form-control" placeholder="タイトル" required>
                  </div>
  
                  <div class="mb-3">
                      <label for="debut_date" class="form-label">Debut Date:</label>
                      <input type="datetime-local" name="debut_date" class="form-control" required>
                  </div>
  
                  <div class="mb-3">
                    <label for="lyrics" class="form-label">Lyrics:</label>
                    <textarea name="lyrics" id="lyrics" class="form-control"></textarea>
                </div>
                
  
                  <div class="mb-3">
                      <label for="yt_link" class="form-label">YouTube Link:</label>
                      <input type="text" name="yt_link" class="form-control" placeholder="https://www.youtube.com/watch?v=..." required>
                  </div>
  
                  <!-- Add this file input for image upload -->
                  <div class="mb-3">
                      <label for="image" class="form-label">Cover Image:</label>
                      <input type="file" name="image" class="form-control" accept="image/*" required>
                  </div>

                  <div class="modal-footer mx-auto">
                    <button type="submit" class="btn btn-primary mx-auto">Submit</button>
                  </div>     
              </form>
          </div>
      </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script>

  //(Tracklist) Function to submiting the ID to the route that delete the selected item.
  function submitDeleteForm(button) {
    var trackId = $(button).data('track-id');
    var formId = 'deleteTrackForm' + trackId;
    document.getElementById(formId).submit();
  }

  //(Tracklist) Function to pass using GET to a page to edit information.
  function redirectToEditPage(trackId) {
    window.location.href = '/tracks/' + trackId + '/edit';
  }

  function confirmDelete(route) {
        if (confirm('Are you sure you want to delete this track?')) {
            document.getElementById('deleteTrackForm{{$track->id}}').submit();
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