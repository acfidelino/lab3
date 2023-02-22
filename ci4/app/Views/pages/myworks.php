<!DOCTYPE html>
<html>
<!-- Head -->
<head>
    <title> Fidelino - Week 5</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="css/myworks_styles.css" >
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
                <a class="nav-link active" aria-current="page" href="index">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">My Works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="w3schools-js">JavaScript Lessons</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container-fluid bg-img">
    <div class="overlay"> </div>
        <div class="row justify-content-center"> 
            <div class="col-sm-3 mt-5 card-group">    
                <div class="card card-color" style="z-index: 2 !important;">
                    <img src="media/index-pic.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">WEBPROG Index</h5>
                        <p class="card-text">Contains a list of all my websites in APCWEBPROG server. It is not updated for now.</p>
                        <a href="http://apcwebprog.csf.ph/~acfidelino/" class="btn btn-primary" target="_blank">Go now</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 mt-5 card-group">    
                <div class="card card-color" style="z-index: 2 !important;">
                    <img src="media/week-1.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">WEBPROG Week-1</h5>
                        <p class="card-text">It contains a copy-pasted lesson during our discussions.</p>
                        <a href="http://apcwebprog.csf.ph/~acfidelino/lab1" class="btn btn-primary" target="_blank">Go now</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 mt-5 card-group">    
                <div class="card card-color" style="z-index: 2 !important;">
                    <img src="media/week-3.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">WEBPROG Week-3</h5>
                        <p class="card-text">Contains my website for week 3. The CSS lessons were updated by overwriting so only the last lesson was reflected. 
                        click this link if you want to see the <a href="https://github.com/acfidelino/lab2/commits/main">commits</a> I did.
                        </p>
                        <a href="http://apcwebprog.csf.ph/~acfidelino/lab2/week3/" class="btn btn-primary" target="_blank">Go now</a>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
              <div class="col-md-9 mt-3" style="z-index: 2;">
                <div class="card card-color" style="height: 9rem; border: solid 1px #111a38;">
                  <img src="media/easetitik.png" class="card-img card-bg" alt="...">
                  <div class="card-img-overlay">
                    <h5 class="card-title">Resources</h5>
                    <p class="card-text">This is contains a list of all the references used in the making of this website.</p>
                    <p class="card-text"><small><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                       View now</small></button></p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">References Used:</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><a href="https://my-learning.w3schools.com/tutorial/html">HTML Tutorials</a></li>
                      <li class="list-group-item"><a href="https://my-learning.w3schools.com/tutorial/css">CSS Tutorials</a></li>
                      <li class="list-group-item"><a href="https://getbootstrap.com/docs/5.2/getting-started/introduction/">Bootstrap 5.2.4 Documentation</a></li>
                      <li class="list-group-item"><a href="https://www.w3schools.com/w3css/default.asp">w3.css Template</a></li>
                      <li class="list-group-item"><a href="https://www.freepik.com/free-photo/design-space-paper-textured-background_3220799.htm#query=texture%20background&position=4&from_view=keyword">Freepik Image by rawpixel.com</a></li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="resources" target="_blank"><button type="button" class="btn btn-primary">Open in New Tab</button></a>
                  </div>
                </div>
              </div>
            </div>
            
        </div>
        </div>
    </div>
</body>
</html>