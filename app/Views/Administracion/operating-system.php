<?= $this->extend('layouts/pages_starter') ?>

<?= $this->section('css') ?>
  <!-- Data Table css -->
  <link href="<?= base_url('public/libs/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('public/libs/datatables/responsive.bootstrap4.css') ?>" rel="stylesheet" type="text/css" />
  <!-- Notification css (Toastr) -->
  <link href="<?= base_url('public/libs/toastr/toastr.min.css') ?>" rel="stylesheet" type="text/css" />
  <!-- Sweet Alert css -->
  <link href="<?= base_url('public/libs/sweetalert2/sweetalert2.min.css') ?>" rel="stylesheet" type="text/css" />
<?= $this->endSection() ?>

<?= $this->section('topbar') ?>
  <?= $this->include('templates/topbar/admin') ?>
<?= $this->endSection(); ?>

<?= $this->section('menu') ?>
  <?= $this->include('templates/menu/admin') ?>
<?= $this->endSection(); ?>

<?= $this->section('content') ?>
      <div class="wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="page-title-box">
                <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"> <a href="<?= base_url('admin/dashboard') ?>"> <?= ucfirst(lang('App.dashboard')) ?> </a> </li>
                    <li class="breadcrumb-item"> <?= lang('App.catalogs') ?> </li>
                    <li class="breadcrumb-item active"> <?= $titulo?> </li>
                  </ol>
                </div>
                <h4 class="page-title"> <?= $titulo?> </h4>
              </div>
            </div>
            <div class="col-12 col-md-7">
              <div class="card-box table-responsive">
                <table id="datatable" class="table table-bordered table-bordered dt-responsive nowrap text-center">
                  <thead>
                    <tr class="text-center">
                      <th> <?= ucfirst(lang('App.operating_system')) ?> </th>
                      <th> <?= ucfirst(lang('App.actions')) ?> </th>
                    </tr>
                  </thead>
                  <tbody></tbody>
                </table>
              </div>
            </div>
            <div class="col-12 col-md-5">
              <div class="card-box">
                <h4 class="text-center mb-3"><?= lang('App.add') ?>  <?= lang('App.record') ?></h4>
                <form id="form-1" class="form-horizontal" role="form" autocomplete="off">
                  <div class="form-group row">
                    <label for="system" class="col-sm-3 col-form-label"> <?= lang('App.operating_system') ?>: </label>
                    <div class="col-sm-9">
                      <input type="text" id="system" name="system" class="form-control" placeholder="<?= lang('App.operating_system') ?>">
                    </div>
                  </div>
                  <div class="form-group mb-0 justify-content-end row">
                    <div class="col-sm-9">
                      <button type="submit" class="btn btn-info waves-effect waves-light">
                        <i class="fa fa-save"></i> <?= ucfirst(lang('App.save')) ?>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Edit -->
      <div class="modal fade bs-example-modal-center" id="modalEdit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalCenterLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalCenterLabel"> <i class="fa fa-edit"></i> <?= ucfirst(lang('App.update')) ?> <?= ucfirst(lang('App.record')) ?> </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="form-2" class="form-horizontal" role="form" autocomplete="off">
                <input type="hidden" name="id" id="id">
                <div class="form-group row">
                    <label for="system" class="col-sm-3 col-form-label"> <?= lang('App.operating_systems') ?>: </label>
                    <div class="col-sm-9">
                      <input type="text" id="system" name="system" class="form-control" placeholder="<?= lang('App.operating_systems') ?>">
                    </div>
                  </div>
                  <div class="form-group mb-0 justify-content-end row">
                  <div class="col-sm-9">
                    <button type="submit" class="btn btn-info waves-effect waves-light">
                      <i class="fa fa-save"></i> <?= ucfirst(lang('App.save')) ?>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
  <!-- Data Table js -->
  <script src="<?= base_url('public/libs/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?= base_url('public/libs/datatables/dataTables.bootstrap4.js') ?>"></script>
  <script src="<?= base_url('public/libs/datatables/dataTables.responsive.min.js') ?>"></script>
  <script src="<?= base_url('public/libs/datatables/responsive.bootstrap4.min.js') ?>"></script>
  <!-- Sweet Alerts js -->
  <script src="<?= base_url('public/libs/sweetalert2/sweetalert2.min.js') ?>"></script>
  <!-- Toastr js -->
  <script src="<?= base_url('public/libs/toastr/toastr.min.js') ?>"></script>
  <!-- Bootstrap MaxLength js -->
  <script src="<?= base_url('public/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') ?>"></script>
  <!-- JQuery Validation js -->
  <script src="<?= base_url('public/libs/jquery-validation/jquery.validate.min.js') ?>"></script>
  <script src="<?= base_url('public/libs/jquery-validation/additional-methods.min.js') ?>"></script>
  <script src="<?= base_url('public/libs/jquery-validation/localization/messages_es.min.js') ?>"></script>
  
  <script>
    var table;
    $(document).ready(function(){

      creaTabla();

      $('#form-1').validate({
        lang : 'es',
        rules : {
          system : { required: true, maxlength: 40 }
        },
        errorPlacement: function (error, element) {
          error.addClass("invalid-feedback");
          error.insertAfter(element);
        },
        highlight: function ( element, errorClass, validClass ) { $( element ).addClass( "is-invalid" ).removeClass( "is-valid" ); },
        unhighlight: function (element, errorClass, validClass) { $( element ).addClass( "is-valid" ).removeClass( "is-invalid" ); },
      });

      $('#form-2').validate({
        lang : 'es',
        rules : {
          system : { required: true, maxlength: 40 }
        },
        errorPlacement: function (error, element) {
          error.addClass("invalid-feedback");
          error.insertAfter(element);
        },
        highlight: function ( element, errorClass, validClass ) { $( element ).addClass( "is-invalid" ).removeClass( "is-valid" ); },
        unhighlight: function (element, errorClass, validClass) { $( element ).addClass( "is-valid" ).removeClass( "is-invalid" ); },
      });

      function creaTabla(){
        table =  $('#datatable').DataTable({
          "language": { "url": "<?= base_url('public/libs/datatables/es_es.json') ?>" },
          "ajax" : {
            "url" : "<?= base_url('admin/catalogs/operating-systems/table') ?>",
            "type" : "GET"
          },
          "columns" : [
            {'data' : 'system'},
            {'data' : 'acciones'}
          ]
        });
      }
    });

    $('#form-1').submit(function(e){
      e.preventDefault();
      if ($("#form-1").valid() === true) {
        $.ajax({
          url : '<?= base_url('admin/catalogs/operating-systems') ?>',
          type : 'POST',
          headers: {'X-Requested-With': 'XMLHttpRequest'},
          data: $("#form-1").serialize(),
          success : function(res) {
            resetCss();
            $("#form-1")[0].reset();
            table.ajax.reload();
            toastr["success"]("<?= lang('Messages.save_successful')?>", "<?= lang('App.new') ?> <?= lang('App.record') ?>");
          },
          statusCode : {
            400 : function(err){
              let data = err;
              console.log(data);
            },
            500 : function (err){
              let data = err;
              Swal.fire(
                data.statusText,
                data.responseJSON.message,
                'error'
              );
            }
          }
        });
      } else {
        $("#form-1").focusInvalid;
      }
    });

    $('#form-2').submit(function(e){
      let id = $('#id').val();
      e.preventDefault();
      $.ajax({
        url : '<?= base_url('admin/catalogs/operating-systems') ?>/'+id,
        method : "PUT",
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        contentType: 'application/json',
        dataType: 'json',
        data: JSON.stringify({
          "system"   : ""+$('#form-2  #system').val()+""
        }),
        success : function(res) {
          table.ajax.reload();
          resetCss();
          $("#form-2")[0].reset();
          toastr["success"]("<?= lang('Messages.update_successful') ?>", "<?= lang('App.update') ?> <?= lang('App.record') ?>");
          $("#modalEdit .close").click();
        },
        statusCode : {
          400 : function(err){
            let data = err;
            console.log(data);
            $("#modalEdit .close").click();
          },
          500 : function (err){
            let data = err;
            Swal.fire(
              data.statusText,
              data.responseJSON.message,
              'error'
            );
            $("#modalEdit .close").click();
          }
        }
      });
    });
    
    function resetCss() {
      $('.form-control').removeClass("is-invalid").removeClass('is-valid');
    }

    $('#modalEdit .close').on('click', function(){
      resetCss();
      $("#form-2")[0].reset();
    });

    function editar(id) {
      $.ajax('<?= base_url('admin/catalogs/operating-systems') ?>/'+ id, {
        method : "GET",
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        success : function(res) {
          let data = res;
          $('#id').val(data.response.operatingSystemId);
          $('#form-2  #system').val(data.response.operatingSystem);
        }
      })
      $('#modelEdit').modal('show');
    }

    function eliminar(id) {
      Swal.fire({
        title: '<?= ucfirst(lang('App.delete')) ?> <?= ucfirst(lang('App.record')) ?>',
        text: '<?= lang('Messages.question_deleted') ?>',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: '<?= ucfirst(lang('App.confirm')) ?>!',
        cancelButtonText: '<?= ucfirst(lang('App.cancel')) ?>!',
        confirmButtonClass: "btn btn-success mt-2",
        cancelButtonClass: "btn btn-danger ml-2 mt-2",
        buttonsStyling: false,
      }).then((res) => {
        if (res .dismiss) {
          Swal.fire( '<?= lang('Messages.cancel_deleted') ?>', '', 'error');
        } else {
          $.ajax('<?= base_url('admin/catalogs/operating-systems') ?>/'+ id, {
            method: "DELETE",
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            success : function(res) {
              Swal.fire(
                '<??> <?= lang('Messages.record_deleted') ?>!',
                '<?= lang("Messages.delete_successful") ?>',
                'success'
              );
              table.ajax.reload();
            },
            error: function (err) {
              Swal.fire(
                'Internal Server Error!',
                '<?= lang('Messages.error_deleted') ?>',
                'warning'
              );
              table.ajax.reload();
            }
          });
        }
      });
    }

  </script>
<?= $this->endSection() ?>