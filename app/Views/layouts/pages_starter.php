<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>DavsLinked - <?= $titulo ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
	<meta content="Coderthemes" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="<?= base_url('public/images/favicon.ico') ?>">

	<?= $this->renderSection('css') ?>

	<!-- App css -->
	<link href="<?= base_url('public/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('public/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('public/css/app.min.css') ?>" rel="stylesheet" type="text/css" />
</head>
<body>
	<!-- Navigation Bar-->
	<header id="topnav">
		<!-- Topbar Start -->
		<div class="navbar-custom">
			<?= $this->renderSection('topbar') ?>
		</div>
		<!-- end Topbar -->
		<div class="topbar-menu">
			<div class="container-fluid">
				<?= $this->renderSection('menu') ?>
			</div>
			<!-- end container -->
		</div>
		<!-- end navbar-custom -->
	</header>
	<!-- End Navigation Bar-->
	
	<!-- ============================================================== -->
	<!-- Start Page Content here -->
	<!-- ============================================================== -->
	
	<?= $this->renderSection('content') ?>
	
	<!-- ============================================================== -->
	<!-- End Page content -->
	<!-- ============================================================== -->
	
	<!-- Footer Start -->
	<footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <?= date('Y') ?> &copy; Desarrollado por <a href="">SCIO Group</a>
        </div>
        <div class="col">
          <div class="text-md-right footer-links d-none d-sm-block">
            <a href="javascript:void(0);">About Us</a>
            <a href="javascript:void(0);">Help</a>
            <a href="javascript:void(0);">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
	<!-- end Footer -->

	<!-- Vendor js -->
	<script src="<?= base_url('public/js/vendor.min.js') ?>"></script>

	<?= $this->renderSection('js') ?>
	
	<!-- App js-->
	<script src="<?= base_url('public/js/app.min.js') ?>"></script>
</body>
</html>