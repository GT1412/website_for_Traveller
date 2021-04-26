<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Travel Website</title>
</head>
<body>  
<?php 
  include 'menu.php';
?>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/25.jpg" class="d-block w-90" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Travel The World</h5>
        <p> Travel The World Where You Want to Go </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/24.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5> Trekking , Hotballon , Etc</h5>
        <p>Enjoy So Many Adventure and Sports</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/23.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Beaches and Ice World </h5>
        <p>So Many Places for Travel Beaches , Ice-World , Etc</p>
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

<section class="my-1">
    <center><div class="py-5">
        <h2>About Us</h2>
    </div></center>

    <div class="container fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="img/22.jpg" class="img-fluid aboutimg" >
        </div>
    
        <div class="col-lg-6 col-md-6 col-12">
        <h3><b class="display-4"> Anthony Bourdain </b></h3>
            <p class="py-5️">“Travel isn’t always pretty. It isn’t always comfortable. Sometimes it hurts, it even breaks your heart. But that’s okay. The journey changes you; it should change you. It leaves marks on your memory, on your consciousness, on your heart, and on your body. You take something with you. Hopefully, you leave something good behind.”</p>
        <a href="about.php" class="btn btn-success">More About Us</a>
        </div>

    </div>
    </div>
    
</section>

<section class="my-1">
    <center><div class="py-5">
        <h2>Our Services Are...</h2>
    </div></center>
    <div class="card-group">
  <div class="card">
    <img src="img/12.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"> Trekking 👣</h5>
      <p class="card-text">The journey of a thousand miles begins with a single step.</p>
    </div>
  </div>

  <div class="card">
    <img src="img/13.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"> Adventure </h5>
      <p class="card-text">Together we will touch the sky.</p>
    </div> 
  </div>

  <div class="card">
    <img src="img/11.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Photography 📷</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    </div>
</div>
</section>
<hr>
<section class="my-1">
    <center><div class="py-5">
        <u><h2>Gallery</h2></u>
    </div></center>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/25.jpg" class="img-fluid 4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/25.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/25.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/25.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/25.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/25.jpg" class="img-fluid pb-4">
        </div>
      </div>
    </div>

</section>

<section class="my-1">
    <center><div class="py-5">
        <u><h2>Feedback</h2></u>
    </div></center>

      <div class="w-50 m-auto">
          <form action="user.php" method="post">

            <div class="form-group">
            <label>user</label>
            <input type="text" name="user" class="form-control" autocomplete="off" >
            </div>
            <div class="form-group">
            <label>email</label>
            <input type="text" name="email" class="form-control" autocomplete="off" >
            </div>
            <div class="form-group">
            <label>mobile</label>
            <input type="text" name="mobile" class="form-control" autocomplete="off" >
            </div>
            <div class="form-group">
            <label>Comment</label>
            <Textarea class="form-control" name="comment">

            </Textarea>
            </div>


            <button type="submit" class="btn btn-success">Submit</button>
            

          </form>
      </div>

</section>

<footer>
    <p class="p-3 bg-dark text-white text-center"> @GT Traveller</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>