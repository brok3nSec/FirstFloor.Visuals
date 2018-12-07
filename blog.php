<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>FirstFloor.</title>
</head>

<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "1stfloorproductions17@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <a href="index.html" class="navbar-brand">FirstFloor.Visuals</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="index.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="services.html" class="nav-link">Services</a>
          </li>
          <li class="nav-item active">
            <a href="blog.html" class="nav-link">Blog</a>
          </li>
          <li class="nav-item">
            <a href="contact.html" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- PAGE HEADER -->
  <header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <h1>Portraits</h1>
          <p>More Pics Coming Soon</p>
        </div>
      </div>
    </div>
  </header>

  <!-- BLOG SECTION -->
  <section id="blog" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card-columns">
            <div class="card">
              <img src="img/IMG_0667.PNG" alt="img/IMG_0667.PNG" class="img-fluid card-img-top">
              <div class="card-body">
              </div>
            </div>

            <div class="card">
              <img src="img/jeoni.JPG" alt="img/jeoni.jpg" class="img-fluid card-img-top">
              <div class="card-body">
              </div>
            </div>

            <div class="card">
              <img src="img/IMG_0666.PNG" alt="img/IMG_0666.PNG" class="img-fluid card-img-top">
              <div class="card-body">
              </div>
            </div>

            <div class="card">
              <img src="img/IMG_0657.PNG" alt="img/IMG_0657.PNG" class="img-fluid card-img-top">
              <div class="card-body">
              </div>
            </div>

            <div class="card">
              <img src="img/IMG_0711.PNG" alt="img/IMG_0711.PNG" class="img-fluid card-img-top">
              <div class="card-body">
                
              </div>
            </div>

            <div class="card">
              <img src="img/IMG_0713.PNG" alt="img/IMG_0713.PNG" class="img-fluid card-img-top">
              <div class="card-body">
              </div>
            </div>

            <div class="card">
              <img src="img/IMG_0714.PNG" alt="img/IMG_0714.PNG" class="img-fluid card-img-top">
              <div class="card-body">
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- FOOTER -->
  <footer id="main-footer" class="text-center p-4">
    <div class="container">
      <div class="row">
        <div class="col">
          <p>Copyright &copy;
            <span id="year"></span> Glozzom</p>
        </div>
      </div>
    </div>
  </footer>


  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

  </script>
  
</body>

</html>