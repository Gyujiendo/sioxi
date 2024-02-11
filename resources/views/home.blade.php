<!--Homepage-->

@extends('layouts.layout')

@section('title', 'sioxi_homepage')

@section('content')

<style>

/*I'm very aware that putting the CSS in another file is good practice, but this project is so small that i'm leaving here for now. */

body {
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      
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
      filter: brightness(28%); /* Adjust the brightness as needed */
    }

body.darker-mode {
  background-color: #272b30;
  color: #fff; 
}

.terminal::after {
  content: "|";
  animation: blink 1s step-end infinite;
}

@keyframes blink {
  0%, 100% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
}

@keyframes fadeOut {
  to {
    opacity: 0;
  }
}

@media only screen and (min-width: 740px) {
    .responsive-image {
      height: 400px !important;
      width: 400px !important;
    }
  }

</style>

<div id="video-container">
  <video id="video" autoplay muted loop>
    <source src="{{ asset('img/seavid.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br>
<!--Homepage text starts here-->
<div class="container text-lg text-center" style="height: 400px;">
  <div class="row">
    <div class="col-lg-6 col-12 mx-auto">

      <h1 class="terminal fs-1">

    </div>
  </div>
</div>
<!--Homepage text ends here-->

<br><br><br><br><br><br><br><br>
<div>

  <hr><br><br><br><br>
    
    <div class="container mx-auto">
      <!-- Bootstrap container -->

      <h1 class="text-center" data-aos="fade-up">What Sioxi is About?</h1><br><br><br>

      <div class="row">
        <!-- Bootstrap row -->

        <div class="col-md-4" data-aos="fade-right" data-aos-duration="1500">
          <!-- First column with col-4 -->
          <img src="{{ asset('img/sioxi.png') }}" class="img-fluid" alt="Sioxi Band" style="filter: brightness(90%);">
        </div>

        <div class="col-md-8" data-aos="fade-left" data-aos-duration="1500">
          <!-- Second column with col-8 -->
          <!-- Add your content for the second column here -->
      <h4>Step into the vibrant world of Sioxi, an Ironical Electro Pop sensation hailing from Osaka, Japan. Led by the charismatic Takano Ryuuta, whose anime protagonist charm extends from epic performances to culinary wizardry.
        <br><br> Okamotochan, the resident guitarist, brings a sweet touch to the chaos, mastering the art of napping anywhere. 
        <br><br> Behind the scenes, meet Yuji – the website wizard, karaoke enthusiast, and whiskey-fueled cowboy.
        <br><br> Sioxi's music, inspired by the likes of Porter Robinson, weaves irony and electronic pop into a mesmerizing experience. Dive into their emotive lyrics, ride the waves of feelings, and join this one-of-a-kind musical adventure.</h4>   
        </div>
      </div>
    </div>

<br><br><br><br><br><br><br><br><br><hr>
</div>

<!--Homepage carousel starts here-->


        <br><br><h1 class="text-center" data-aos="fade-right">最近入れた曲</h1><br><br>

        <hr class="w-75 mx-auto"><br><br>
 
          <div class="slick text-center mx-auto" style="width: 90%;">
              @foreach ($tracks as $key => $track)
                  <div data-aos="fade-right" data-aos-duration="1400">
                      <img src="{{ asset('storage/' . $track->img_path) }}" class="mx-auto text-white responsive-image" style="height: 250px; width: 250px;" alt="..."><br>
                      <h4>{{$track->title}}</h4>
                      <p>Debuted in {{ $track->debut_date->format('F jS, Y') }}</p>
                  </div>
              @endforeach

          </div>

        <hr>  

<!--Homepage carousel ends here-->

<!--Homepage text starts here-->
<div class="container text-lg text-center">
  <div class="row">
    <div class="col-lg-6 col-12 mx-auto">
      <br><br>

      <div class="card text-white border-0" style="background-color: transparent;">
        <div class="card-body">
          <h1><p data-aos="fade-up">ネクストライブの知らせ:</p><br>
            <hr>
            <br><p data-aos="fade-up">{{$lives->location}}</p> <br>
            @if ($lives->media->count() > 0)
            <img src="{{ asset('storage/' . $lives->media[0]->file_path) }}" class="img-fluid" alt="Thumbnail" data-aos="fade-up">
          @else
            <p>No thumbnail available</p>
          @endif
            <br><br>
            <p data-aos="fade-up">Join us! {{ $lives->live_date->format('F jS, Y') }}</p><br>

            <hr><br>
            <p data-aos="fade-up">カウントダウン</p><br>
            <span id="countdown" data-aos="fade-up"></span><br>

          </h1>
        </div>
      </div>

    </div>
    </div>
</div>

<!--Homepage text ends here-->

<br>

<br><br>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<!-- Add the typewriter animation script here -->
<script>
const text = "Ironical Electro Popband<br><br>寄せては返す感情の波に<br><br>膝までどっぷりと浸かって綴った<br><br>言葉";
const textElement = document.querySelector('.terminal');
let index = 0;

function typeText() {
  textElement.innerHTML = text.slice(0, index);
  index++;

  if (index <= text.length) {
    setTimeout(typeText, 40);
  } else {
    cursorElement.style.animationPlayState = 'paused';
  }
}

// Delayed start after 3 seconds
setTimeout(typeText, 3000);

  // Get the target date from the server-side variable
  const targetDate = new Date('{{ $lives->live_date->format("Y-m-d\TH:i:s") }}').getTime();

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
    countdownElement.innerHTML = `
      <span>|&nbsp${days}&middot;D |</span>
      <span>${hours}&middot;H |</span>
      <span>${minutes}&middot;M |</span>
      <span>${seconds}&middot;S&nbsp|
    `;
  }, 1000); // Update every second

  $(document).ready(function(){
        $('.slick').slick({
            slidesToShow: 3,
            slidesToScroll: 2,
            autoplay: true,
            arrows: true,
            autoplaySpeed: 1000,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });

</script>

@endsection
