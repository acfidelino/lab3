<?php
// Check if the 'class' parameter is set in the URL
if (isset($_GET['class'])) {

    // Retrieve the value of the 'class' parameter from the URL
    $class = $_GET['class'];

    // Connect to the database
    require "db-localhost.php";

    // Execute the SQL command based on the value of the 'class' parameter
    if ($class == 'shs') {
        $sql = "SELECT * FROM myworks 
                WHERE class = 'SHS Projects'";
    } elseif ($class == 'webprog') {
        $sql = "SELECT * FROM myworks 
                WHERE class = 'WEBPROG Projects'";
    } else {
        $sql = "SELECT * FROM myworks 
                WHERE class = 'Other Projects'";
    }

        //Save the result
        $results= mysqli_query($conn,$sql);
        $gallery= array();

        //while loop to add items from the database to an array
        while ($row=mysqli_fetch_assoc($results)) {
            array_push($gallery, $row);
        }
    // Close the database connection
    mysqli_close($conn);
}
?>


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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-..."> </script>

  </head>


<body>
  <div class="container-fluid fluid-bg-light p-1 pb-4">
    
    <?php 
    if($class == "shs"){
      $page_title = "SHS Projects";
      $left = "gallery?class=others";
      $right = "gallery?class=webprog";
    } elseif ($class == "webprog") {
      $page_title = "WEBPROG Websites";
      $left = "gallery?class=shs";
      $right = "gallery?class=others";
    } else {
      $page_title = "Other Projects";
      $left = "gallery?class=webprog";
      $right = "gallery?class=shs";
    }
    ?>
  <div class="my-5 row">
    <div class="col d-flex justify-content-start pt-3 ps-5">
      <a href="<?php echo $left;?>" class="heading"> <i class="fa-solid fa-angles-left fa-2xl"></i> </a>
    </div>

    <div class="col d-flex justify-content-center">
      <h1 class="text-center"><?php echo $page_title;?></h1>
    </div>

    <div class="col d-flex justify-content-end pt-3 pe-5">
      <a href="<?php echo $right;?>" class="heading"><i class="fa-solid fa-angles-right fa-2xl"></i></a>
    </div>

  </div>
   
  
  <div class="row">
    <div class="col-md-12">
      <div class="grid">

      <?php 
      for ($i = 0; $i < count($gallery); $i++){
        //MODAL:
        echo ' 
        <div class="modal fade" id="viewItem_'.$gallery[$i]['id'].'" tabindex="-1" aria-labelledby="viewItemLabel_'.$gallery[$i]['id'].'" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="viewItemLabel">'.$gallery[$i]["name"].'</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <img src="'.$gallery[$i]["img_dir"].'" class="img-fluid mt-2 mb-3" alt="">
                    <div class="mb-3">
                      <label for="description" class="form-label">Description:</label>
                      <textarea class="form-control" id="description" rows="3" readonly>'.$gallery[$i]["description"].'</textarea>
                    </div>
                    <div class="mb-3">
                      <label for="link" class="form-label">Link:</label>
                      <input type="text" class="form-control" id="link" value="'.$gallery[$i]["link"].'" readonly>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        ';

          echo '
            <div class="grid-sizer"></div>
            <div class="gutter-sizer"></div>
            <div class="grid-item" style="border:0.5px gray solid;">
              <img src="'.$gallery[$i]["img_dir"].'" alt="">
              <div class="overlay">
              <a href="#viewItem_'.$gallery[$i]['id'].'" style="text-decoration:none; color:#FFFFFF;" data-bs-toggle="modal" data-bs-target="#viewItem_'.$gallery[$i]['id'].'" data-value="'.$gallery[$i]['id'].'">
                  <h6>'.$gallery[$i]["name"].'</h6>
                </a>
                <p class="fw-light">'.$gallery[$i]["description"].'</p>
              </div>
            </div>
          ';
      }
      ?>  
      </div>
    </div>
  </div>  
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>

    $(document).ready(function() {
    var $grid = $('.grid').masonry({
      itemSelector: '.grid-item',
      columnWidth: '.grid-sizer',
      gutter: '.gutter-sizer',
      percentPosition: true
    });
    $grid.imagesLoaded().progress(function() {
      $grid.masonry('layout');
    });
  });
  </script>
  

<script>
  $(document).ready(function() {
    
  // initialize Masonry
  var $grid = $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    gutter: '.gutter-sizer',
    percentPosition: true
  });

});
</script>


</body>
</html>