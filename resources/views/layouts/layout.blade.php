<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<style>
    /* CSS for dark mode */
    body.dark-mode {
      background-color: #343a40; /* Replace with the desired gray color */
      color: #fff; /* Set text color to white or a suitable color for dark mode */
    }

    .navbar-transparent {
  background-color: transparent !important;
  box-shadow: none !important;
}

.fade-efct {
  opacity: 0;
  transition: opacity 1s ease;
}

  </style>

<!--Yield for changing titles-->
<title>@yield('title')</title>
<!--Yield title ends here-->
</head>

<!--Body Starts here-->
<body class="dark-mode ">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/af3e0fd724.js" crossorigin="anonymous"></script>

<script>

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


</script>

<!--Navbar Starts Here-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid fs-5">
    <a class="navbar-brand " href="#" >SIOXI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto"> <!-- Add mx-auto class for center alignment -->
        <li class="nav-item">
          <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('tracklist') ? 'active' : '' }}" href="/tracklist">Tracklist</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('live') ? 'active' : '' }}" href="/live">Live</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('bio') ? 'active' : '' }}" href="/bio">Bio</a>
        </li>
      </ul>
      
      <ul class="navbar-nav ml-auto"> <!-- Add ml-auto class for right alignment -->
        <li class="nav-item">
          <a class="nav-link" href="/live"><i class="fa-brands fa-twitter fa-xl"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/live"><i class="fa-brands fa-facebook fa-xl"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/live"><i class="fa-brands fa-instagram fa-xl"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/live">Nihongo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/live">English</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--Navbar Ends Here-->

<!--Yield for placeholder in the main content-->
@yield('content')
<!--End of Yield-->

<!--Footer Starts Here-->
<div class="card bg-dark text-white">
  <div class="card-body">
    <h5 class="card-title">sioxi</h5>
    <p class="card-text">Website made by Endo Guilherme Yuji, 2023.</p>
  </div>
</div>
<!--Footer Ends Here-->

</body>
<!--Body Ends here-->
</html>
