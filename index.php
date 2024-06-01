<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/538907d71c.js" crossorigin="anonymous"></script>
    <script defer src="carousel.js"></script>
    <title>Home</title>
  </head>

  <body>
    <?php
    session_start();
    include "navbar.php";
    ?>
    <!-- START OF HERO -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
          <div class="col-lg-12">
            <div data-aos="fade-left" data-aos-delay="100">
              <img src="image/hero-title.png" class="img-fluid" alt="Toxz Tattoo & Body Piercing">
            </div>
            <h2 class="col-lg-12">WANT TO BOOK AN APPOINTMENT?</h2>
            <button class="btn btn-danger btn-sm" onclick="window.location.href = 'php/signup.php';">SIGN UP NOW</button>
          </div>
        </div>
      </div>
    </section>
  <!-- END OF HERO -->
    
  <!-- START OF GALLERY -->

  <div class="section-title">
    <h2>TATTOO</h2>
  </div>
  <div class="container" style="margin-top: 20px; margin-bottom: 70px;">
    <div id="carousel-tattoo" class="carousel slide mx-auto" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-tattoo" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-tattoo" data-slide-to="1"></li>
        <li data-target="#carousel-tattoo" data-slide-to="2"></li>
        <li data-target="#carousel-tattoo" data-slide-to="3"></li>
        <li data-target="#carousel-tattoo" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner bg-black">
        <div class="carousel-item active">
          <img class="d-block w-100" src="image/tattoo/tattoo1.jpg" alt="First slide" data-interval="800" style="object-fit: contain;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="image/tattoo/tattoo2.jpg" alt="Second slide" data-interval="800" style="object-fit: contain;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="image/tattoo/tattoo3.jpg" alt="Third slide" data-interval="800" style="object-fit: contain;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="image/tattoo/tattoo4.jpg" alt="Fourth slide" data-interval="800" style="object-fit: contain;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="image/tattoo/tattoo5.jpg" alt="Fifth slide" data-interval="800" style="object-fit: contain;">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel-tattoo" role="button" data-slide="prev">
        <span class="fa fa-caret-square-o-left fa-3x" aria-hidden="true" id="prev-icon"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-tattoo" role="button" data-slide="next">
        <span class="fa fa-caret-square-o-right fa-3x" aria-hidden="true" id="next-icon"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <br>
    <br>
    <div class="text-center">
      <button class="btn btn-danger" onclick="window.location.href = 'tattoo.php';">SEE FULL GALLERY</button>
    </div>
  </div>

  <div class="section-title">
    <h2>PIERCING</h2>
  </div>
  <div class="container" style="margin-top: 20px; margin-bottom: 70px;">
    <div id="carousel-piercing" class="carousel slide mx-auto" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-piercing" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-piercing" data-slide-to="1"></li>
        <li data-target="#carousel-piercing" data-slide-to="2"></li>
        <li data-target="#carousel-piercing" data-slide-to="3"></li>
        <li data-target="#carousel-piercing" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner bg-black">
        <div class="carousel-item active">
          <img class="d-block w-100" src="image/piercing/piercing1.jpg" alt="First slide" data-interval="800" style="object-fit: contain;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="image/piercing/piercing2.jpg" alt="Second slide" data-interval="800" style="object-fit: contain;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="image/piercing/piercing3.jpg" alt="Third slide" data-interval="800" style="object-fit: contain;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="image/piercing/piercing4.jpg" alt="Fourth slide" data-interval="800" style="object-fit: contain;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="image/piercing/piercing5.jpg" alt="Fifth slide" data-interval="800" style="object-fit: contain;">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel-piercing" role="button" data-slide="prev">
      <span class="fa fa-caret-square-o-left fa-3x" aria-hidden="true" id="prev-icon"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-piercing" role="button" data-slide="next">
        <span class="fa fa-caret-square-o-right fa-3x" aria-hidden="true" id="next-icon"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <br>
    <br>
    <div class="text-center">
      <button class="btn btn-danger" onclick="window.location.href = 'piercing.php';">SEE FULL GALLERY</button>
    </div>
  </div>
    
    
    
  <!-- END OF GALLERY -->



 


  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>