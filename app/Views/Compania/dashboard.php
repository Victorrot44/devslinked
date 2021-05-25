<?= $this->extend('layouts/pages_starter') ?>

<?= $this->section('css') ?>
  
<?= $this->endSection() ?>

<?= $this->section('topbar') ?>
  <?= $this->include('templates/topbar/compania') ?>
<?= $this->endSection(); ?>

<?= $this->section('menu') ?>
  <?= $this->include('templates/menu/compania') ?>
<?= $this->endSection(); ?>

<?= $this->section('content') ?>
  <div class="wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="page-title-box">
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
            <h4 class="page-title">Dashboard</h4>
          </div>
        </div>
        <div class="col-12 col-md-4 col-xl-6">
          <div class="card-box">
            
          </div>
        </div>
      </div>
    </div>
  </div>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
  
<?= $this->endSection() ?>
