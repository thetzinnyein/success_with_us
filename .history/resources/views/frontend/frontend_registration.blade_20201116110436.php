<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend_asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend_asset/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend_asset/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend_asset/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend_asset/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend_asset/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend_asset/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('frontend_asset/css/style.css')}}" rel="stylesheet">

    <i class="fas fa-check-double"></i>
    <title>Success With Us</title>

    <!-- =======================================================
    * Template Name: Mentor - v2.1.0
    * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

  <nav class="nav-menu d-none d-lg-block">
    <ul>
      <li class="active"><a href="#header">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#why-us">Student</a></li>

      <li><a href="#popular-courses">Courses</a></li>
      <li><a href="#trainers">Trainers</a></li>



      <li><a href="#footer">Contact</a></li>

    </ul>
  </nav><!-- .nav-menu -->

  <section class="content col-md">
    <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> </h1>
        {{-- <p>Start a beautiful journey here</p> --}}
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        {{-- <li class="breadcrumb-item"><a href="#">Student Page</a></li> --}}
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h2>Student Regristration</h2>
          <form method="post" action="{{route('student.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Name:</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Student Name..">
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
                <label>email:</label>
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Email..">
                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-group">
                <label>description:</label>
                <input type="text" name="description" class="form-control" value="{{old('description')}}" placeholder="Description..">


            </div>

            <div class="form-group">
              <label>Photo: (<small class="text-danger">* jpeg|bmp|png</small>)</label>
              <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
              @error('photo')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
                <label for="password" class="">{{ __('Password') }}</label>


                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>


                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

            </div>



            <div class="form-group">
              <input type="submit" name="btnsubmit" value="Register" class="btn btn-success">
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
</section>

  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Mentor</h3>
            <p>
              Myanmar, Yangon <br><br>
              <strong>Phone:</strong> +959 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Laravel</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">PHP</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Success With Us</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{  asset('frontend_asset/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{  asset('frontend_asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{  asset('frontend_asset/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{  asset('frontend_asset/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{  asset('frontend_asset/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{  asset('frontend_asset/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{  asset('frontend_asset/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{  asset('frontend_asset/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend_asset/js/main.js')}}"></script>

</body>

</html>
