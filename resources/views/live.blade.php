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
  </style>

<title>Sioxi_Home</title>
</head>
<body class="dark-mode">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">sioxi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/live">Liveshows</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sns">Social Medias</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br>
- Pictures of Live shows in Osaka 
<br>

<img src="{{ asset('img/live1.jpg') }}" style="width: 30%; height: 30%;" alt="My Image">
<br><img src="{{ asset('img/live2.jpg') }}" style="width: 30%; height: 30%;" alt="My Image">
<br><img src="{{ asset('img/live3.jpg') }}" style="width: 30%; height: 30%;" alt="My Image">
<br><img src="{{ asset('img/live4.jpg') }}" style="width: 30%; height: 30%;" alt="My Image">


</body>


</body>
</html>
