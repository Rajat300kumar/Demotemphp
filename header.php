<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Vereda - Digital Learning</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Font Awesome CDN -->
    <script src="https://use.fontawesome.com/0e92a0e72f.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">


  <!-- css style start--->
  <style type="text/css">
    .modal {
  display: none;
  position: fixed; 
  padding-top: 50px;
  left: 0; 
  top: 0;
  width: 100%;
  height: 100%; 
  background-color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0.5);
}
.modal-content {
  position: relative; 
  background-color: white;
  padding: 20px; 
  margin: auto; 
  width: 65%;  
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}
.close-btn {
  float: right; 
  color: lightgray; 
  font-size: 24px;  
  font-weight: bold;
}
.close-btn:hover {
  color: darkgray;
  cursor: pointer;
}
#dropdownoption{
  height: 7vh;
}
</style>
<!--css code end-->


<!--Css end-->
  </head>

  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-center clearfix boldtext">
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">
                  About
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">
                  Services
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="courses.php">
                  Courses 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">
                  Contact
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">
                  login
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
                 <!--<button type="button" class="btn btn-primary ">Trial class</button>-->

                 <button id="modal-btn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                 Open modal
                 </button></a>
                 <!--code for the modelwith help of html,css,javascript start-->
                     <!--html code start-->
                     <div class="modal">
                      <div class="modal-content">
                       <span class="close-btn text-right">&times;</span>
                        <h2>Join a Live Session</h2>
                        <select id="dropdownoption">
                          <option value="HTML" selected>HTML</option>
                          <option value="css">Css</option>
                          <option value="Javascript">Javascript</option>
                          <option value="Php">Php</option>
                          <option value="Mysql">Mysql</option>
                          <option value="webdesign">webdesign</option>
                        </select>
                        <form class="form m-0" action="" method="POST">
                          <div class="form__item">
                    <label class="form__label" for="email">Full Name*</label>
                    <input class="form__input form-control" type="text" name="name" id="name" required>
                  </div>
                  <div class="form__item">
                    <label class="form__label" for="Phone">Phone</label>
                    <input class="form__input form-control" type="Phone" name="Phone" id="Phone" required>
                  </div>
                  <div class="form__item">
                    <label class="form__label" for="email">Email Address*</label>
                    <input class="form__input form-control" type="email" name="email" id="email" required>
                  </div>
                  <div class="form__item form__item--actions">
                    
                    <button class="form__button btn btn-primary shadow-2 text-center" type="button" name="send" id="send" >Send Message</button>
                  </div>
                        </form>
                  
                      </div>
                     </div>
                    <!--html code start-->

                 
                 <!--code for the modelwith help of html,css,javascript end-->
  

               
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#courses">
                <button type="button" class="btn btn-success">Details</button>
              </a>
              </li>
            </ul>
           <!--  <div class="btn-sing float-right">
              <a class="btn btn-border" href="#feature">FAQ</a>
            </div> -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu navbar-nav">
          <li>
            <a class="page-scroll " href="index.php">
              Home
            </a>
          </li>
          <li>
            <a class="page-scroll" href="about.php">
              About
            </a>
          </li>
          <li>
            <a class="page-scroll" href="services.php">
              Courses
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#contact">
              Contact
            </a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->
      <script type="text/javascript">
       
      </script>
</header>