<?php
namespace App\Controllers\Catalogos;

use App\Controllers\BaseController;
use App\Models\Catalogos\ProgrammingLanguageModel;

class ProgrammingLanguageController extends BaseController{
  public function __construct() {
    $this->model = new ProgrammingLanguageModel();
  }

	public function index() {
    if ($this->request->getMethod() == 'post'):
      if (!$this->validate(['language' => 'required|max_length[50]'])):
        $res = [
          'error'         => true,
          'code_error'    => 400,
          'error_title'   => 'Invalid Form Validation',
          'error_message' => '',
          'response'      => $this->validator->getErrors()
        ];
        return $this->response->setStatusCode(400)->setJSON($res);
      endif;
      $data = ['programmingLanguage' => trim(ucfirst($this->request->getPost('language')))];
      
      $this->model->newRecord($data);
      return $this->response->setStatusCode(201);
    else :
      $data['titulo'] = lang('App.programming_languages');
      return view('Administracion/programming-languages', $data);
    endif;
	}

  public function tabla(){
    $data = $this->model->allRecords();
    $tabla = '';
    
    foreach($data as $item):
      $accion = '<div class=\"btn-group\">';
      $accion .= '<button type=\"button\" class=\"btn btn-primary waves-effect\" title=\"'.ucfirst(lang('App.update')).'\" onclick=\"editar('. $item->programmingLanguageId .')\" data-toggle=\"modal\" data-target=\"#modalEdit\">';
      $accion .= '<i class=\"fa fa-edit\"></i> </button>';
      $accion .= '<button type=\"button\" class=\"btn btn-danger waves-effect\" title=\"'.ucfirst(lang('App.delete')).'\" onclick=\"eliminar('. $item->programmingLanguageId .')\">';
      $accion .= '<i class=\"fas fa-trash-alt\"></i> </button> </div>';
      $tabla .= '{
        "language"    : "'.$item->programmingLanguage.'",
        "acciones"    : "'.$accion.'"
      },';
    endforeach;

    $tabla = substr($tabla, 0, strlen($tabla) - 1);
    $result = '{"data" : ['. $tabla .']}';
    return $this->response->setStatusCode(200)->setBody($result);
  }

  public function registroPorId(int $id) {
    $data = $this->model->getById($id);
    $res = [
      'error'         => false,
      'code_error'    => 0,
      'error_title'   => '',
      'error_message' => '',
      'response'      => $data
    ];
    return $this->response->setStatusCode(200)->setJSON($res);
  }

  public function getAll() {
    $data = $this->model->allRecords();
    $res = [
      'error'         => false,
      'code_error'    => 0,
      'error_title'   => '',
      'error_message' => '',
      'response'      => $data
    ];
    return $this->response->setStatusCode(200)->setJSON($res);
  }

  public function actualizarRegistro(int $id) {
    if (!$this->validate(['language' => 'required|max_length[50]'])):
      $res = [
        'error'         => true,
        'code_error'    => 400,
        'error_title'   => 'Invalid Form Validation',
        'error_message' => '',
        'response'      => $this->validator->getErrors()
      ];
      return $this->response->setStatusCode(400)->setJSON($res);
    endif;

    $data = ['programmingLanguage' => trim($this->request->getJsonVar('language'))];

    $this->model->updateRecord($id, $data);

    $respuesta = [ "messaje" => "EL registro a sido actualizado exitosamente." ];

    $res = [
      'error'         => false,
      'code_error'    => 0,
      'error_title'   => '',
      'error_message' => '',
      'response'      => $respuesta
    ];

    return $this->response->setStatusCode(201)->setJSON($res); 
  }

  public function eliminarRegistro(int $id) {
    $this->model->deleteRecord($id);
    return $this->response->setStatusCode(200);
  }
}
