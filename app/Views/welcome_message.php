<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <title>Devslinked</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="" name="description" />
  <meta content="SCIO GROUP" name="Victorrrot" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="<?= base_url('favicon.ico') ?>">
	<meta name="description" content="">
  <!-- App css -->
  <link href="<?= base_url('public/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('public/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('public/css/app.min.css') ?>" rel="stylesheet" type="text/css" />
  <!-- Animate css -->
  <link href="<?= base_url('public/libs/animate/animate.min.css') ?>" rel="stylesheet" type="text/css" />
	<!-- My Styles -->
  <link href="<?= base_url('public/css/styles.css') ?>" rel="stylesheet" type="text/css" />
</head>
<body>
  <!-- Scroll Top -->
  <button id="scrollTop" class="btn btn-outline-cyen rounded-circle scroll-top"> 
    <i class="fa fa-chevron-up fa-2x"></i>
  </button>
  <!-- /Scroll Top -->

  <!-- Menu -->
  <nav class="navbar navbar-expand-lg sticky-top navbar-cyen bg-black">
    <div class="container mx-auto">
      <a href="<? base_url() ?>" class="navbar-brand">
        <img src="<?= base_url('public/images/menu_logo.png') ?>" 
          width="300" height="100" alt="Devslinked Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item px-2 <?= url_is('/') ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url() ?>"> <strong> Home <span class="sr-only">(current)</span> </strong> </a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="#about"> <strong> About Us </strong> </a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="#bonus"> <strong> Why DEVS LINKED </strong> </a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="#contact"> <strong> Contact </strong> </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /Menu -->

  <!-- Content Page -->
  <main class="wrapper m-0 p-0">
    <!-- Hero -->
    <section id="about" class="hero">
      <div class="container pt-5">
        <div class="row d-flex justify-content-center mt-md-5">
          <div class="col-sm-12 col-md-5 align-self-start">
            <img class="img-fluid aniview" data-av-animation="bounceInLeft" src="<?= base_url('public/images/image_logo.png') ?>" alt="Devslinked Logo">
          </div>
          <div class="col-sm-12 offset-md-2 col-md-5 align-self-end">
            <p class="lead text-light px-2 aniview" data-av-animation="bounceInRight">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Quos natus possimus, soluta officiis hic, corrupti inventore quia ducimus vitae repudiandae.
            </p>
          </div>
          <div class="col-12 mt-md-5 mt-md-5 mb-md-5"></div>
          <div class="col-12 col-md-6">
            <div class="d-flex justify-content-center aniview" data-av-animation="bounceInLeft">
              <button type="button" class="btn btn-lg btn-outline-cyen rounded-1 mt-3 px-5">Devs linking Companies</button>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="d-flex justify-content-center aniview" data-av-animation="bounceInRight">
              <button type="button" class="btn btn-lg btn-cyen rounded-1 mt-3 px-5">Companies linking Devs</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Hero -->

    <!-- Beneficios -->
    <section id="bonus" class="bg-white">
      <div class="card">
        <div class="card-body bg-black">
          <h2 class="text-cyen text-center py-2"> <strong> Why DEVS LINKED </strong> </h2>
        </div>
      </div>
      <div class="container py-3">
        <div class="row">
          <div class="col-xl-6 col-12">
            <div class="card-box widget-user aniview" data-av-animation="bounceInLeft">
              <div class="row align-items-center">
                <div class="col-3 float-left">
                  <img src="<?= base_url('public/images/benefits_icon1.png') ?>" width="80" height="80" class="img-fluid" alt="Beneficio 1">
                </div>
                <div class="col float-right">
                  <h3 class="mt-0 text-morado"> Benefits </h3>
                  <p class="font-18 text-justify">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                    dolore magna aliquam erat volutpat
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-12">
            <div class="card-box widget-user aniview" data-av-animation="bounceInRight">
              <div class="row align-items-center">
                <div class="col-3 float-left">
                  <img src="<?= base_url('public/images/benefits_icon2.png') ?>" width="80" height="80" class="img-fluid" alt="Beneficio 2">
                </div>
                <div class="col float-right">
                  <h3 class="mt-0 text-morado"> Benefits </h3>
                  <p class="font-18 text-justify">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                    dolore magna aliquam erat volutpat
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-12">
            <div class="card-box widget-user aniview" data-av-animation="bounceInLeft">
              <div class="row align-items-center">
                <div class="col-3 float-left">
                  <img src="<?= base_url('public/images/benefits_icon3.png') ?>" width="80" height="80" class="img-fluid" alt="Beneficio 3">
                </div>
                <div class="col float-right">
                  <h3 class="mt-0 text-morado"> Benefits </h3>
                  <p class="font-18 text-justify">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                    dolore magna aliquam erat volutpat
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-12">
            <div class="card-box widget-user aniview" data-av-animation="bounceInRight">
              <div class="row align-items-center">
                <div class="col-3 float-left">
                  <img src="<?= base_url('public/images/benefits_icon4.png') ?>" width="80" height="80" class="img-fluid" alt="Beneficio 4">
                </div>
                <div class="col float-right">
                  <h3 class="mt-0 text-morado"> Benefits </h3>
                  <p class="font-18 text-justify">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                    dolore magna aliquam erat volutpat
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Beneficios -->

    <!-- Devslinked -->
    <section class="bg-black hero-shake-hands">
      <div class="container py-5 text-white">
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-md-6">
            <h1 class="text-center mb-3 text-white display-2">VISA TN</h1>
            <p class="text-justify font-18">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit vero rerum obcaecati ab exercitationem laborum totam earum nobis, quis officiis non labore deleniti doloremque blanditiis molestiae, commodi dignissimos, vel iste!
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /Devslinked -->

    <!-- Suscripciones -->
    <section id="contact" class="bg-cyen hero-subscriptions">
      <div class="container d-flex justify-content-end align-items-center">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-2">
          <img src="<?= base_url('public/images/form_logo.png'); ?>" width="300" height="200" class="img-fluid m-0 p-0 aniview" data-av-animation="bounceInRight" alt="Devslinked Logo">
          <p class="font-20 font-weight-bolder text-white aniview" data-av-animation="bounceInRight"> Join our Newsletter </p>
          <form action="" method="post">
            <input class="form-control form-control-lg rounded-1 mb-2 aniview" data-av-animation="bounceInRight" type="email" placeholder="Email">
            <button type="button" class="btn btn-lg btn-block rounded-1 btn-cyen aniview" data-av-animation="bounceInRight">
            <i class="fab fa-telegram-plane mr-2"></i> Send
            </button>
          </form>
        </div>
      </div>
    </section>
    <!-- /Suscripciones -->
  </main>
  <!-- /Content Page -->

  <!-- Footer -->
  <footer class="footer bg-black mt-auto">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md-6">
          <img src="<?= base_url('public/images/footer_icon.png'); ?>" width="225" height="100" class="img-fluid" alt="Devslinked Logo">
        </div>
        <div class="col-12 col-md-6">
          <div class="text-center text-md-right mb-2">
            <ul class="list-inline">
              <li class="list-inline-item px-2">
                <a href="javascript:void(0);" class="text-secondary" target="_blank">
                  <i class="fab fa-instagram fa-2x circule"></i>
                </a>
              </li>
              <li class="list-inline-item px-2">
                <a href="javascript:void(0);" class="text-secondary" target="_blank">
                  <i class="fab fa-facebook fa-2x circule"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="text-md-right text-cyen">
            <a href="javascript:void(0);" class="font-18 font-weight-bolder"> Privacy Policy </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- /Footer -->

  <!-- SCRIPTS -->
  <!-- Vendor js -->
  <script src="<?= base_url('public/js/vendor.min.js') ?>"></script>
  <!-- App js-->
  <script src="<?= base_url('public/js/app.min.js') ?>"></script>
  <!-- Aniview js -->
  <script src="<?= base_url('public/libs/aniview/jquery.aniview.js') ?>"></script>
  <script>
    const options = {
      animateThreshold: 100,
      scrollPollInterval: 20
    }
    $('.aniview').AniView(options);

    $(window).scroll(function() {
      var height = $(window).scrollTop();
      if (height > 100) {
        $('#scrollTop').fadeIn();
      } else {
        $('#scrollTop').fadeOut();
      }
    });

    $(document).ready(function() {
      $("a").on('click', function(event) {
        if (this.hash !== "") {
          event.preventDefault();
          var hash = this.hash;
          $('.active').removeClass('active');
          $('a[href$="'+ hash +'"]').addClass('active');
          $('html, body').animate(
            { scrollTop: $(hash).offset().top }, 800, function(){
            window.location.hash = hash;
          });
        }
      });

      $("#scrollTop").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
      });
    });
  </script>
</body>
</html>
