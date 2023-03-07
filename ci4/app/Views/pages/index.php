<!DOCTYPE html>
<html>
<!-- Head -->

<head>
    <title>A.F. Portfolio</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/8cbc507dd9.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container-fluid" id="Home">
        <section>
            <div class="container-lg bordered-cont mt-5">
                <div class="row gx-5 p-4">
                    <div class="col">
                        <img src="media/me.png" style="min-width: 380px;" class="img-fluid">
                    </div>
                    <div class="col d-flex align-items flex-column">
                        <div>
                            <h1 class="heading mt-5"> Akira C. Fidelino </h1>
                        </div>
                        <div class="fs-5 mt-3 mb-2 caption">I'm a 2nd-Year BSCS Student from Asia Pacific College. Nice to meet you!</div>
                        <div class="mt-auto caption">You can contact me at: </div>
                        <div class="d-flex justify-content-start align-items-center mt-2 mb-3 heading">
                            <div class="me-4"><a href="https://www.facebook.com/akira.fidelino" target="_blank" class="link-caption"> <i class="fa-brands fa-facebook-f fa-xl"></i></a></div>
                            <div class="me-4"><a href="https://www.linkedin.com/in/akira-fidelino-525425204/" target="_blank" class="link-caption"> <i class="fa-brands fa-linkedin-in fa-xl"></i></a></div>
                            <div class="me-4"><button type="button" class="btn btn-link link-caption" data-bs-toggle="popover" data-bs-title="Student Email:" data-bs-content="acfidelino@student.apc.edu.ph"><i class="fa-regular fa-envelope fa-xl"></i></button></div>
                            <div class="me-4"><a href="https://github.com/acfidelino/" target="_blank" class="link-caption"> <i class="fa-brands fa-github fa-xl"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Profile">
            <div class="container mt-5 mb-5">
                <div class="row gx-5">
                    <div class="col d-flex align-items flex-column">
                        <div>
                            <h1 class="heading mt-4">Bio:</h1>
                        </div>
                        <div>
                            <p class="caption lh-lg ms-3 caption">Hi! I am Akira Fidelino. I graduated at APC for my Senior High under the course of
                                STEM-IT, and then pursued Bachelor of Science in Computer Sciences in the same school, so I can say
                                that I have a bit of experience in the different facets of information technology, especially
                                programming (Python and Java), web development (HTML, CSS, JavaScript, and PHP), database management
                                (MySQL). I also have a bit of background in game development and cyber security thanks to the school
                                organizations I belong to. Feel free to click the buttons below to get to know me more.
                            </p>
                        </div>
                        <div class="row mb-5">
                            <div class="col sm-3 mt-3 d-flex justify-content-start">
                                <a class="btn btn-custom px-5 fw-semibold" role="button" href="profile" style="letter-spacing: 3px;">PROFILE</a>
                            </div>
                            <div class="col sm-3 mt-3 d-flex justify-content-end">
                                <a class="btn btn-custom px-4 fw-semibold" role="button" href="myworks" style="letter-spacing: 3px;">PORTFOLIO</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-auto d-flex flex-column justify-content-center">
                        <img src="media/formalpic.png" class="img-fluid mx-auto mb-2" style="height:17rem; width:16rem; object-fit:cover; object-position: 0 15px">
                        <h3 class="caption text-center">Aki (he/him) </h3>
                        <p class="caption text-center fw-light">Computer Science Student</p>
                        <div class="col sm-3 mt-1 d-flex justify-content-center">
                            <a class="btn btn-custom px-5 fw-semibold" data-bs-toggle="modal" data-bs-target="#contactModal" role="button" href="#" style="letter-spacing: 3px;">MESSAGE ME</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

    <!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="http://apcwebprog.csf.ph/~acfidelino/lab2/db/mysql_insert.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="website" class="form-label">Website</label>
            <input type="url" class="form-control" id="website" name="website" value="http://" required>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">Female</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                <label class="form-check-label" for="other">Other</label>
            </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="comment" class="form-label">Comment</label>
            <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Submit">
        </div>
        </form>
    </div>
  </div>
</div>
</div>


<script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
</script>

</body>
</html>