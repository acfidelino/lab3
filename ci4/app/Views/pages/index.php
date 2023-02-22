<!DOCTYPE html>
<html>
<!-- Head -->
<head>
    <title> Fidelino - Week 5</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="css/index_styles.css" >
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/8cbc507dd9.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg" style="background-color: rgb(29, 41, 81);">
        <div class="container-fluid">
          <span class="navbar-text">
              <a class="navbar-brand" href="#" style="color: white;">Week-5: Fidelino</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          </span>
          <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="myworks">My Works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="w3schools-js">JavaScript Lessons</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="overlay"></div>
      <!--CAROUSEL-->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
          <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
        <div class="carousel-inner">
          <div class="carousel-item active caro-img-cont" style="position: relative;">
            <img src="media/Angelo Film.jpg" class="d-block w-100 caro-img" alt="...">
            <div class="carousel-caption d-none d-md-block content-overlay">
               <br><br><br><br><br><br><br><br><br>
               <a href="profile">
                   <h1>Profile</h1>
                   <p> Curious about me? <br></p>
               </a>
            </div>
          </div>
          <div class="carousel-item caro-img-cont">
            <img src="media/caf.jpg" class="d-block w-100 caro-img" alt="...">
            <div class="carousel-caption d-none d-md-block content-overlay">
                <br><br><br><br><br><br><br><br><br>
                <a href="myworks">
                    <h1>My Works</h1>
                    <p> This contains the link to my other works. <br>
                        Do bear in mind that not all are in here as uploading all is will take too much time.
                    </p>
                </a>
                </div>
          </div>
          <div class="carousel-item caro-img-cont">
            <img src="media/takas.png" class="d-block w-100 caro-img" alt="...">
            <div class="carousel-caption d-none d-md-block content-overlay">
                <br><br><br><br><br><br><br><br><br>
                <a href="w3schools-js">
                    <h1>JavaScript Lessons</h1>
                    <p> This is where all the current JavaScript commits will go. So that the website can remain
                      clean during in the meantime.
                    </p>
                </a>
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
      
</body>
</html>
