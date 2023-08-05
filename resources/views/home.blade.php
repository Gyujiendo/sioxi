<!--Homepage-->

@extends('layouts.layout')

@section('title', 'sioxi_homepage')

@section('content')

<style>

body.darker-mode {
  background-color: #272b30; /* A darker gray color */
  color: #fff; /* Set text color to white or a suitable color for dark mode */
}

@keyframes blink {
  from {
    border-right-color: #00ff00;
  }
  to {
    border-right-color: transparent;
  }
}
.terminal::after {
  content: "|";
  animation: blink 1s step-end infinite;
}

.separation-line {
      border-top: 1px solid #ccc; /* Change the color and style as desired */
    }

</style>

<!--Homepage text starts here-->
<div class="container text-lg text-center" style="height: 300px;">
  <div class="row">
    <div class="col-lg-6 col-12 mx-auto">

      <br><br>

      <h1 class="terminal">Ironical Electro Popband<br><br>
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
<div class="col-lg-6 col-12 mx-auto bg-dark">
  <br>
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
  <br>
</div>
<!-- Homepage carousel ends here -->

<br><br><br><br>

<!--Homepage text starts here-->
<div class="container text-lg text-center">
  <div class="row">
    <div class="col-lg-6 col-12 mx-auto">

      <br><br>

      <div class="card bg-dark text-white">
        <div class="card-body">
          <h1>Next Live Info:<br><br>
            <div class="separation-line"></div>
            <br>
            Osaka - Club Somewhere super nice <br><br>
            Join us on October 31st - 7PM!<br><br>

            <span id="countdown"></span>

          </h1>
        </div>
      </div>

        

        <br><br>

    </div>
    </div>
</div>
<!--Homepage text ends here-->

<br>

<br><br>

<!-- Add the typewriter animation script here -->
<script>
  const text = "Ironical Electro Popband<br><br>寄せては返す感情の波に<br><br>膝までどっぷりと浸かって綴った言葉";
  const textElement = document.querySelector('.terminal');
  let index = 0;
  
  function typeText() {
    textElement.innerHTML = text.slice(0, index); // Use innerHTML to preserve HTML tags
    index++;
  
    if (index <= text.length) {
      setTimeout(typeText, 40);
    }
  }
  
  typeText();
 
  </script>

  <script>

   // Target date (October 31st, 7 PM)
   const targetDate = new Date('2023-10-31T19:00:00').getTime();

// Update the countdown every second
const countdownElement = document.getElementById('countdown');
setInterval(() => {
  const now = new Date().getTime();
  const timeRemaining = targetDate - now;

  const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
  const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

  // Display the countdown
  countdownElement.textContent = `${days}D, ${hours}H, ${minutes}M, ${seconds}S.`;
}, 1000); // Update every second

  </script>
  

@endsection
