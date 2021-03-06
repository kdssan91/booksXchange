<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
    <link href="css/style.css" rel="stylesheet">
    <title>booksXchange</title>
  </head>
  <body>
      <!-- HEADER SECTION --> 
      
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top py-3 main-navbar" id="main-navbar">
            <div class="container">
            <a href="index.php" class="navbar-brand">booksXchange</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form action="" class="form-inline">
                <input type="text" class="form-control mr-2" placeholder="Search Books">
                <input type="submit" value="Search Books" class="btn btn-outline-light">
                </form>
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link active">About</a>
                </li>
                <li class="nav-item mr-5">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">
                    <i class="fas fa-sign-in-alt"></i> Login</a>
                </li>
                <li class="nav-item">
                    <a href="signup.php" class="nav-link">
                    <i class="fas fa-user-plus"></i> Sign Up</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
      <br><br>
    
    <!-- ABOUT SECTION --> 
    <section id="about" class="py-4">
    <div class="container" style="background: #dcdcdc; border-radius: 7px; box-shadow: 3px 3px 2px rgba(0, 0, 0, 0.4)">
      <div class="row mt-4">
        <div class="col-md-8">
          <h3 class="py-4">Books Exchange System</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, aut?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A incidunt fugiat quis debitis nemo possimus sequi, animi aperiam aspernatur fuga sint. Porro aliquam maxime ab placeat fugiat asperiores nostrum dolore!</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae aliquid expedita veritatis omnis laudantium unde et hic non fuga doloremque.</p>
        </div>
        <div class="col-md-4 align-self-center">
          <img src="img/book_image1.jpg" alt="" class="img-fluid book-exchange__about">
        </div>
      </div>
    </div>
    </section>

    <!-- CONTACT SECTION --> 
    <section id="contact__about" class="py-4">
    
      <div class="container p-3" style="background: #97cad2; border-radius: 7px; box-shadow: 3px 3px 2px rgba(0, 0, 0, 0.5)">
        <div class="row">
          <div class="col-md-4">
            <div class="card p-4">
              <div class="card-body">
                <h4>Reach Us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <h4>Address</h4>
                <p>Pune, Maharashtra, India</p>
                <h4>Email</h4>
                <p>booksXchanges@gmail.com</p>
                <h4>Phone</h4>
                <p>(+91) 899 999 990 0</p>
              </div>
            </div>
          </div>
          <div class="col-md-8">
              <div class="card p-4">
                <div class="card-body">
                  <h3 class="text-center mb-4">Leave a Message</h3>
                  <form action="">
                    <div class="form-group">
                      <div class="input-group input-group-lg">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white">
                              <i class="fas fa-user"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control bg-dark text-white" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-primary text-white">
                            <i class="fas fa-envelope"></i>
                          </span>
                        </div>
                        <input type="email" class="form-control bg-dark text-white" placeholder="Email">
                      </div>
                    </div>
                    <div class="fom-group">
                      <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-primary text-white">
                            <i class="fas fa-pencil-alt"></i>
                          </span>
                        </div>
                        <textarea class="form-control bg-dark text-white" placeholder="Message"></textarea>
                      </div>
                      <input type="submit" value="Submit" class="btn btn-primary btn-block btn-lg mt-3">
                    </div>
                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FOOTER SECTION --> 

    <footer id="main-footer" class="p-4">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 mx-auto">
                    <p class="lead">
                        Copyright &copy; <span id="year"></span> booksXchange
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script>
        // Get Full Year
        $('#year').text(new Date().getFullYear());

      // Lightbox Init
      $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
       });
    </script>
  </body>
</html>


