<?php
namespace App\Controllers\Catalogos;

use App\Controllers\BaseController;
use App\Models\Catalogos\LanguageModel;

class LanguageController extends BaseController{
  public function __construct() {
    $this->model = new LanguageModel();
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
      $data = ['language' => trim(ucfirst($this->request->getPost('language')))];
      
      $this->model->newRecord($data);
      return $this->response->setStatusCode(201);
    else :
      $data['titulo'] = lang('App.languages');
      return view('Administracion/languages', $data);
    endif;
	}

  public function tabla(){
    $data = $this->model->allRecords();
    $tabla = '';
    
    foreach($data as $item):
      $accion = '<div class=\"btn-group\">';
      $accion .= '<button type=\"button\" class=\"btn btn-primary waves-effect\" title=\"'.lang('App.update').'\" onclick=\"editar('. $item->languageId .')\" data-toggle=\"modal\" data-target=\"#modalEdit\">';
      $accion .= '<i class=\"fa fa-edit\"></i> </button>';
      $accion .= '<button type=\"button\" class=\"btn btn-danger waves-effect\" title=\"'.lang('App.delete').'\" onclick=\"eliminar('. $item->languageId .')\">';
      $accion .= '<i class=\"fas fa-trash-alt\"></i> </button> </div>';
      $tabla .= '{
        "system" : "'.$item->language.'",
        "acciones"  : "'.$accion.'"
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

    $data = ['language' => trim($this->request->getJsonVar('language'))];

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