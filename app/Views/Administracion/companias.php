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
                      <th> <?= ucfirst(lang('App.company')) ?> </th>
                      <th> <?= lang('App.responsable') ?> </th>
                      <th> <?= lang('App.job_title') ?> </th>
                      <th>LinkedIn</th>
                      <th> <?= ucfirst(lang('App.email')) ?> </th>
                      <th> <?= ucfirst(lang('App.actions')) ?> </th>
                    </tr>
                  </thead>
                  <tbody></tbody>
                </table>
              </div>
            </div>
            <div class="col-12 col-md-5">
              <div class="card-box">
                <form id="form-1" class="form-horizontal" role="form" autocomplete="off">
                  <div class="form-group row">
                    <label for="compania" class="col-sm-3 col-form-label"> <?= ucfirst(lang('App.App.company')) ?>: </label>
                    <div class="col-sm-9">
                      <input type="text" id="compania" name="compania" class="form-control" placeholder="<?= ucfirst(lang('App.App.company')) ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="responsable" class="col-sm-3 col-form-label"> <?= lang('App.responsable') ?>: </label>
                    <div class="col-sm-9">
                      <input type="text" id="responsable" name="responsable" class="form-control" placeholder="<?= lang('App.responsable') ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="puesto" class="col-sm-3 col-form-label"> <?= lang('App.job_title') ?>: </label>
                    <div class="col-sm-9">
                      <input type="text" id="puesto" name="puesto" class="form-control" placeholder="<?= lang('App.job_title') ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="descripcion" class="col-sm-3 col-form-label"> <?= lang('App.description') ?>: </label>
                    <div class="col-sm-9">
                      <textarea name="descripcion" id="descripcion" class="form-control mb-2" maxlength="225" rows="6" placeholder="<?= lang('App.description') ?>"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="linkedin" class="col-sm-3 col-form-label"> LinkedIn: </label>
                    <div class="col-sm-9">
                      <input type="url" id="linkedin" name="linkedin" class="form-control" placeholder="LinkedIn">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="correo" class="col-sm-3 col-form-label"> <?= ucfirst(lang('App.email')) ?>: </label>
                    <div class="col-sm-9">
                      <input type="email" id="correo" name="correo" class="form-control" placeholder="<?= ucfirst(lang('App.email')) ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label"> <?= ucfirst(lang('App.password')) ?>: </label>
                    <div class="col-sm-9">
                      <input type="text" id="password" name="password"class="form-control" placeholder="<?= ucfirst(lang('App.password')) ?>">
                    </div>
                  </div>
                  <div class="form-group mb-0 justify-content-end row">
                    <div class="col-sm-9">
                      <button type="submit" class="btn btn-info waves-effect waves-light">
                        <i class="fa fa-save"></i> <?= ucfirst(lang('save')) ?>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Info -->
      <div class="modal fade bs-example-modal-center" id="modalInfo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalCenterLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalCenterLabel"> <i class="fa fa-info-circle"></i>  <?= ucfirst(lang('App.detail')) ?>  <?= ucfirst(lang('App.record')) ?> </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group row">
                <label for="compania" class="col-sm-3 col-form-label"> <?= ucfirst(lang('App.company')) ?>: </label>
                <div class="col-sm-9">
                  <p id="compania"></p>
                </div>
              </div>
              <div class="form-group row">
                <label for="responsable" class="col-sm-3 col-form-label"> <?= ucfirst(lang('App.responsable')) ?>: </label>
                <div class="col-sm-9">
                  <p id="responsable"></p>
                </div>
              </div>
                  <div class="form-group row">
                    <label for="puesto" class="col-sm-3 col-form-label"> <?= ucfirst(lang('App.job_title')) ?>: </label>
                    <div class="col-sm-9">
                      <p id="puesto"></p>
                    </div>
                  </div>
              <div class="form-group row">
                <label for="descripcion" class="col-sm-3 col-form-label"> <?= ucfirst(lang('App.description')) ?>: </label>
                <div class="col-sm-9">
                  <p id="descripcion"></p>
                </div>
              </div>
              <div class="form-group row">
                <label for="linkedin" class="col-sm-3 col-form-label"> LinkedIn: </label>
                <div class="col-sm-9">
                  <p id="linkedin"></p>
                </div>
              </div>
              <div class="form-group row">
                <label for="correo" class="col-sm-3 col-form-label"> <?= ucfirst(lang('App.email')) ?>: </label>
                <div class="col-sm-9">
                  <p id="correo"></p>
                </div>
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
                  <label for="compania" class="col-sm-3 col-form-label"> <?= ucfirst(lang('App.company')) ?>: </label>
                  <div class="col-sm-9">
                    <input type="text" id="compania" name="compania" class="form-control" placeholder="<?= ucfirst(lang('App.company')) ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="responsable" class="col-sm-3 col-form-label"> <?= ucfirst(lang('App.responsable')) ?>: </label>
                  <div class="col-sm-9">
                    <input type="text" id="responsable" name="responsable" class="form-control" placeholder="<?= ucfirst(lang('App.responsable')) ?>">
                  </div>
                </div>
                  <div class="form-group row">
                    <label for="puesto" class="col-sm-3 col-form-label"> <?= ucfirst(lang('App.job_title')) ?>: </label>
                    <div class="col-sm-9">
                      <input type="text" id="puesto" name="puesto" class="form-control" placeholder="<?= ucfirst(lang('App.job_title')) ?>">
                    </div>
                  </div>
                <div class="form-group row">
                  <label for="descripcion" class="col-sm-3 col-form-label"> <?= ucfirst(lang('App.description')) ?>: </label>
                  <div class="col-sm-9">
                    <textarea name="descripcion" id="descripcion" class="form-control mb-2" maxlength="225" rows="6" placeholder="<?= ucfirst(lang('App.description')) ?>"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="linkedin" class="col-sm-3 col-form-label"> LinkedIn: </label>
                  <div class="col-sm-9">
                    <input type="url" id="linkedin" name="linkedin" class="form-control" placeholder="LinkedIn">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="correo" class="col-sm-3 col-form-label"> <?= ucfirst(lang('App.email')) ?>: </label>
                  <div class="col-sm-9">
                    <input type="email" id="correo" name="correo" class="form-control" placeholder="<?= ucfirst(lang('App.email')) ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-sm-3 col-form-label"> <?= ucfirst(lang('App.password')) ?>: </label>
                  <div class="col-sm-9">
                    <input type="text" id="password" name="password"class="form-control" placeholder="<?= ucfirst(lang('App.password')) ?>">
                  </div>
                </div>
                <div class="form-group mb-0 justify-content-end row">
                  <div class="col-sm-9">
                    <button type="submit" class="btn btn-info waves-effect waves-light">
                      <i class="fa fa-save"></i> <?= ucfirst(lang('App.App.save')) ?>
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
          compania : { required: true, minlength: 3, maxlength: 60 },
          responsable : { required: true, minlength:3, maxlength: 150 },
          puesto : { required: true, minlength:3, maxlength: 150 },
          descripcion : { required: true, minlength: 25, maxlength: 255 },
          correo : {
            required: true,
            email: true,
          },
          password : { required: true, minlength: 8, maxlength: 25}
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
          compania : { required: true, minlength: 3, maxlength: 60 },
          responsable : { required: true, minlength:3, maxlength: 150 },
          puesto : { required: true, minlength:3, maxlength: 150 },
          descripcion : { required: true, minlength: 25, maxlength: 255 },
          correo : { email: true },
          password : { minlength: 8, maxlength: 25}
        },
        errorPlacement: function (error, element) {
          error.addClass("invalid-feedback");
          error.insertAfter(element);
        },
        highlight: function ( element, errorClass, validClass ) { $( element ).addClass( "is-invalid" ).removeClass( "is-valid" ); },
        unhighlight: function (element, errorClass, validClass) { $( element ).addClass( "is-valid" ).removeClass( "is-invalid" ); },
      });

      $('#form-1 #descripcion, #form-2 #descripcion').maxlength({
        alwaysShow : true,
        threshold : 10,
        warningClass : "badge badge-success mt-1 ",
        limitReachedClass : "badge badge-danger mt-1 ",
        placement : "bottom-right-inside"
      });

      function creaTabla(){
        table =  $('#datatable').DataTable({
          "language": { "url": "<?= base_url('public/libs/datatables/es_es.json') ?>" },
          "ajax" : {
            "url" : "<?= base_url('admin/company/table') ?>",
            "type" : "GET"
          },
          "columns" : [
            {'data' : 'compania'},
            {'data' : 'responsable'},
            {'data' : 'puesto'},
            {'data' : 'linkedin'},
            {'data' : 'correo'},
            {'data' : 'acciones'}
          ]
        });
      }
    });

    $('#form-1').submit(function(e){
      e.preventDefault();
      $.ajax({
        url : '<?= base_url('admin/company') ?>',
        type : 'POST',
        headers: {'X-Requested-With': 'XMLHttpRequest'},
        data: $("#form-1").serialize(),
        success : function(res) {
          resetCss();
          $("#form-1")[0].reset();
          table.ajax.reload();
          toastr["success"]("El registro guardado exitosamente", "Nuevo Registro");
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
    });

    $('#form-2').submit(function(e){
      let id = $('#id').val();
      e.preventDefault();
      $.ajax({
        url : '<?= base_url('admin/company') ?>/'+id,
        method : "PUT",
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        contentType: 'application/json',
        dataType: 'json',
        data: JSON.stringify({
          "compania"    : ""+$('#form-2  #compania').val()+"",
          "responsable" : ""+$('#form-2  #responsable').val()+"",
          "puesto" : ""+$('#form-2  #puesto').val()+"",
          "descripcion" : ""+$('#form-2  #descripcion').val()+"",
          "linkedin"    : ""+$('#form-2  #linkedin').val()+"",
          "correo"      : ""+$('#form-2  #correo').val()+"",
          "password"    : ""+$('#form-2  #password').val()+"",
        }),
        success : function(res) {
          table.ajax.reload();
          resetCss();
          $("#form-2")[0].reset();
          toastr["success"]("Registro actualizado exitosamente", "Actualizar Registro");
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

    function detalles(id) {
      $.ajax('<?= base_url('admin/company') ?>/'+ id, {
        method : "GET",
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        success : function(res) {
          let data = res;
          $('p#compania').html(data.response.companiaNombre);
          $('p#responsable').html(data.response.companiaResponsable);
          $('p#puesto').html(data.response.companiaResponsablePuesto);
          $('p#descripcion').html(data.response.companiaDescripcion);
          $('p#linkedin').html('<a href="'+data.response.companiaLinkedIn+'">'+data.response.companiaLinkedIn+'</a>');
          $('p#correo').html(data.response.companiaCorreo);
        }
      })
      $('#modelInfo').modal('show');
    }

    function editar(id) {
      $.ajax('<?= base_url('admin/company') ?>/'+ id, {
        method : "GET",
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        success : function(res) {
          let data = res;
          $('#id').val(data.response.companiaId);
          $('#form-2  #compania').val(data.response.companiaNombre);
          $('#form-2  #responsable').val(data.response.companiaResponsable);
          $('#form-2  #puesto').val(data.response.companiaResponsablePuesto);
          $('#form-2  #descripcion').val(data.response.companiaDescripcion);
          $('#form-2  #linkedin').val(data.response.companiaLinkedIn);
          $('#form-2  #correo').val(data.response.companiaCorreo);
        }
      })
      $('#modelEdit').modal('show');
    }

    function eliminar(id) {
      Swal.fire({
        title: '<?= ucfirst(lang('delete')) ?> <?= ucfirst(lang('record')) ?>',
        text: '¿Estas seguro de eliminar el registro?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: '<?= ucfirst(lang('App.confirm')) ?>!',
        cancelButtonText: '<?= ucfirst(lang('App.cancel')) ?>!',
        confirmButtonClass: "btn btn-success mt-2",
        cancelButtonClass: "btn btn-danger ml-2 mt-2",
        buttonsStyling: false,
      }).then((res) => {
        if (res .dismiss) {
          Swal.fire( '¡Acción Cancelada!', '', 'error');
        } else {
          $.ajax('<?= base_url('admin/companias') ?>/'+ id, {
            method: "DELETE",
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            success : function(res) {
              Swal.fire(
                '¡Registro Eliminado!',
                'El registro a sido eliminado con exito.',
                'success'
              );
              table.ajax.reload();
            },
            error: function (err) {
              Swal.fire(
                'Internal Server Error!',
                'Ha ocurrido un error al intendar eliminar el registro.',
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