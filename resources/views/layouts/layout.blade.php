<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link href="{{ asset('css/lightbox.css') }}" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>

.fa-youtube,
.fa-tiktok,
.fa-instagram,
.fa-x-twitter {
    transition: all 0.3s ease; /* Add a smooth transition for all properties over 0.3 seconds with ease timing function */
}

.fa-youtube:hover {
    transform: scale(1.2);
}

.fa-instagram:hover {
    transform: scale(1.2);
}

.fa-x-twitter:hover {
    transform: scale(1.2); 
}

.fa-tiktok:hover {
    transform: scale(1.2); 
}


.coolfont{
  font-family: 'Roboto', sans-serif;
  font-family: 'Noto Sans JP', sans-serif;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

a {
    animation: fadeIn 0.7s ease;
}  

body {
  display: flex;
  flex-direction: column;
  min-height: 100vh; /* Ensure at least 100% of the viewport height */
  transition: background-color 3s ease;
  overflow-y: scroll; /* Always show vertical scrollbar */
  scrollbar-width: thin; /* Customize the width of the scrollbar (optional) */
  overflow-x: hidden !important;  
}


    body.dark-mode {
      background-color: #343a40; /* Replace with the desired gray color */
      color: #fff; /* Set text color to white or a suitable color for dark mode */
    }

    .navbar-transparent {
  background-color: transparent !important;
  box-shadow: none !important;
}

a {
    transition: color 0.9s ease;
}

.fade-efct {
  opacity: 0;
  transition: opacity 1s ease;
}

/* Custom scrollbar styles */
::-webkit-scrollbar {
  width: 5px;
  z-index: 1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #f1f1f1;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #0f4a53;
}

   /* Add the following CSS to your stylesheet */
.underline-hover {
  position: relative;
  transition: color 0.3s ease;
  color: #fff; /* Set your default color */
}

.underline-hover:hover {
  color: #fff; /* Set your hover color */
}

.underline-hover::before {
  content: '';
  position: absolute;
  width: 100%;
  height: 2px; /* Set the underline thickness */
  bottom: 0;
  left: 0;
  background-color: #fff; /* Set the underline color */
  transform: scaleX(0);
  transform-origin: bottom right;
  transition: transform 0.3s ease;
}

.underline-hover:hover::before,
.underline-hover.active::before {
  transform: scaleX(1);
  transform-origin: bottom left;
}

@media only screen and (min-width: 800px) {
   #mobilever{
    display: none;
   }  }

   @media only screen and (max-width: 800px) {
   #desktopver{
    display: none;
   }  }   




  </style>

<!--Yield for changing titles-->
<title>@yield('title')</title>
<!--Yield title ends here-->
</head>

<!--Body Starts here-->
<body class="dark-mode coolfont">

<!-- Desktop Navbar Starts Here-->
<nav  id="desktopver" style="z-index: 5;" class="navbar navbar-expand-lg navbar-dark {{ Request::is('home', 'tracklist', 'live', 'bio', 'store') ? '' : 'bg-dark' }}">
  <div class="container-fluid fs-6">
    &nbsp;&nbsp;<a class="navbar-brand " href="#" >SIOXI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto text-center fs-6">
        <li class="nav-item" style="padding-left: 5px; padding-right: 5px;">
          <a class="nav-link {{ Request::is('home') ? 'active' : '' }} underline-hover" href="{{ url('/home') }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HOME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item" style="padding-left: 5px; padding-right: 5px;">
          <a class="nav-link {{ Request::is('tracklist') ? 'active' : '' }} underline-hover" href="{{ url('/tracklist') }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RECORDS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item" style="padding-left: 5px; padding-right: 5px;">
          <a class="nav-link {{ Request::is('live') ? 'active' : '' }} underline-hover" href="{{ url('/live')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LIVE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item" style="padding-left: 5px; padding-right: 5px;">
          <a class="nav-link {{ Request::is('bio') ? 'active' : '' }} underline-hover" href="{{ url('/bio')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BIO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item" style="padding-left: 5px; padding-right: 5px;">
          <a class="nav-link {{ Request::is('store') ? 'active' : '' }} underline-hover" href="{{ url('/store')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STORE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
      </ul>
      
      <ul class="navbar-nav ml-auto"> <!-- Add ml-auto class for right alignment -->
        <li class="nav-item dropdown mx-auto">
          <a href="https://www.youtube.com/@sioxi109" target="_blank" style="color: inherit; text-decoration: none;"><i class="fa-brands fa-youtube fa-xl"></i></a>
          &nbsp;&nbsp;&nbsp;
          <a href="https://www.instagram.com/sioxi_official/" target="_blank" style="color: inherit; text-decoration: none;"><i class="fa-brands fa-instagram fa-xl"></i></a>
          &nbsp;&nbsp;&nbsp;
          <a href="https://www.tiktok.com/@sioxi_official" target="_blank" style="color: inherit; text-decoration: none;"><i class="fa-brands fa-tiktok fa-lg"></i></a>
          &nbsp;&nbsp;&nbsp;
          <a href="https://twitter.com/_sioxi_" target="_blank" style="color: inherit; text-decoration: none;"><i class="fa-brands fa-x-twitter fa-lg"></i></a>
          &nbsp;&nbsp;&nbsp;          



        </li>
      </ul>
      
    </div>
  </div>
</nav>
<!--Desktop Navbar Ends Here-->

<!-- Mobile Navbar Starts Here--><div id="mobilever">
<nav class="navbar navbar-expand-lg navbar-dark {{ Request::is('home', 'tracklist', 'live', 'bio', 'store') ? '' : 'bg-dark' }}">
  <div class="container-fluid">
    <a class="navbar-brand " href="#" style="padding-left: 5px;">SIOXI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto text-center fs-6">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ url('/home') }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HOME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
        <hr>
        <li class="nav-item" style="padding-left: 5px; padding-right: 5px;">
          <a class="nav-link {{ Request::is('tracklist') ? 'active' : '' }}" href="{{ url('/tracklist') }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RECORDS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
        <hr>
        <li class="nav-item" style="padding-left: 5px; padding-right: 5px;">
          <a class="nav-link {{ Request::is('live') ? 'active' : '' }}" href="{{ url('/live')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LIVE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
        <hr>
        <li class="nav-item" style="padding-left: 5px; padding-right: 5px;">
          <a class="nav-link {{ Request::is('bio') ? 'active' : '' }}" href="{{ url('/bio')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BIO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
        <hr>
        <li class="nav-item" style="padding-left: 5px; padding-right: 5px;">
          <a class="nav-link {{ Request::is('store') ? 'active' : '' }}" href="{{ url('/store')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STORE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
      </ul>

      <hr>
      
      <ul class="navbar-nav ml-auto" style="padding-left: 10px;"> <!-- Add ml-auto class for right alignment -->
        <li class="nav-item dropdown mx-auto">
          <a href="https://www.youtube.com/@sioxi109" target="_blank" style="color: inherit; text-decoration: none;"><i class="fa-brands fa-youtube fa-xl"></i></a>
          &nbsp;&nbsp;&nbsp;
          <a href="https://www.instagram.com/sioxi_official/" target="_blank" style="color: inherit; text-decoration: none;"><i class="fa-brands fa-instagram fa-xl"></i></a>
          &nbsp;&nbsp;&nbsp;
          <a href="https://www.tiktok.com/@sioxi_official" target="_blank" style="color: inherit; text-decoration: none;"><i class="fa-brands fa-tiktok fa-lg"></i></a>
          &nbsp;&nbsp;&nbsp;
          <a href="https://twitter.com/_sioxi_" target="_blank" style="color: inherit; text-decoration: none;"><i class="fa-brands fa-x-twitter fa-lg"></i></a>
          &nbsp;&nbsp;&nbsp;          



        </li>
      </ul>
      
    </div>
  </div>
</nav>
<!--Mobile Navbar Ends Here--></div>

<!--Logged in or not toast-->
@if(auth()->check())
   <div class="position-fixed bottom-0 end-0 mb-3 rounded-pill" style="z-index: 1050; margin-right: 20px; !important;">
    <div id="liveToast" class="toast rounded-pill" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header text-white bg-dark">
            <strong class="me-auto">sioxi</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body text-white" style="background-color: #343a40;">
            Hello! You are logged in as <b>{{ auth()->user()->name }}</b>.
            
            <br><br>
            <form id="logoutForm" method="POST" action="{{ route('logout') }}">
              Click <a href="#" onclick="document.getElementById('logoutForm').submit()"><b>here</b></a> to log out.
              @csrf
          </form>
          
        </div>
    </div>
  </div> 
@endif
<!--Toast ends here -->


<!--Yield for placeholder in the main content-->
@yield('content')
<!--End of Yield-->



<!--Desktop Footer Starts Here--><div id="desktopver">
<div class="card text-white border-0" style="background-color: transparent;">
  <div class="row g-0"><hr>
    <div class="col-md-1 text-start">
      <br><br>
      <h3 style="padding-left:50px;">SIOXI</h3>
    </div>
    <div class="col-md-11 text-center">
      <br>
        <p>Vocalist and Song Writer: Ryuuta Takano (鷹野隆太)</p>
         <p>Website made by <a href="https://www.linkedin.com/in/guilherme-yuji-endo-652b06150/" target="_blank" style="color: inherit; text-decoration: none;"><u>Endo Guilherme Yuji</u></a> (エンドウ・ギレルメ・ユウジ)</p>
      </div>
      <br>
      </div>
    </div>
  </div>
</div>
<!--Desktop Footer Ends Here--></div>

<!--Mobile Footer Starts Here--><div id="mobilever">
<div class="card text-white border-0" style="background-color: transparent;">
  <div class="row g-0"><hr>
    <div class="col-md-1 text-start">
      
      <h3 style="text-align: center;">SIOXI</h3>
    </div>
    <div class="col-md-11 text-center mx-auto w-75">
      <br>
        <p>Vocalist and Song Writer: Ryuuta Takano (鷹野隆太)</p>
         <p>Website made by <a href="https://www.linkedin.com/in/guilherme-yuji-endo-652b06150/" target="_blank" style="color: inherit; text-decoration: none;"><u>Endo Guilherme Yuji</u></a> (エンドウ・ギレルメ・ユウジ)</p>
      </div>
      <br>
      </div>
    </div>
  </div>
</div>
<!--Mobile Footer Ends Here--></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/af3e0fd724.js" crossorigin="anonymous"></script>
<script src="https://cdn.tiny.cloud/1/pwplctzynx3xnhaj643leuhh1lgkp5aad190xu6zeb24rtep/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>

AOS.init();

tinymce.init({
    selector: 'textarea',
    plugins: 'undo redo | bold italic underline strikethrough | link table | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
    toolbar: 'undo redo | bold italic underline strikethrough | link table | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
    menubar: false, // Add this line to hide the menubar
});


$(document).ready(function() {
  // Function to handle the fade-in animation
  function animateFadeIn() {
    var scrollTop = $(window).scrollTop();
    var viewportHeight = $(window).height();

    $(".fade-efct").each(function() {
      var elementOffset = $(this).offset().top;
      var distanceFromTop = elementOffset - scrollTop;

      if (distanceFromTop < viewportHeight) {
        $(this).animate({ opacity: 1 }, 500); // Adjust the duration to your desired value
      }
    });
  }

  // Trigger the fade-in animation on page load
  animateFadeIn();

  // Trigger the fade-in animation on scroll
  $(window).scroll(function() {
    animateFadeIn();
  });
});

const alertPlaceholder = document.getElementById('liveAlertPlaceholder');
  const appendAlert = (message, type) => {
    const wrapper = document.createElement('div');
    wrapper.innerHTML = [
      `<div class="alert alert-${type} alert-dismissible" role="alert">`,
      `   <div>${message}</div>`,
      '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
      '</div>',
    ].join('');

    alertPlaceholder.innerHTML = ''; // Clear previous alerts
    alertPlaceholder.append(wrapper);
  };

  $(document).ready(function() {
    // Trigger the toast on page load
    $('#liveToast').toast('show');
  }); 

  function submitForm() {
        document.getElementById('logoutForm').submit();
    }

    $(document).ready(function(){
        $("a").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();

                var hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){
                    window.location.hash = hash;
                });
            }
        });
    });  

    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

</script>

</body>
<!--Body Ends here-->
</html>
