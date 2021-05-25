<?php
namespace App\Controllers\Compania;

use App\Controllers\BaseController;
use App\Models\Compania\PersonalModel;

class PersonalController extends BaseController{
  
  public function __construct() {
    $this->model = new PersonalModel();
  }

	public function index() {
    if ($this->request->getMethod() == 'post'):
      if (!$this->validate([
        'nombre'    => 'required',
        'paterno'   => 'required',
        'tipo'      => 'required|numeric',
        'correo'    => 'required|valid_email|is_unique[personal.personalCorreo]',
        'password'  => 'required|max_length[20]|min_length[8]'
      ])):
        $res = [
          'error'         => true,
          'code_error'    => 400,
          'error_title'   => 'Invalid Form Validation',
          'error_message' => '',
          'response'      => $this->validator->getErrors()
        ];
        return $this->response->setStatusCode(400)->setJSON($res);
      endif;

      $datos = $this->request->getVar();
      $data = [
        'personalCompaniaId'  => 1,
        'personalNombre'      => trim($datos['nombre']),
        'personalApePaterno'  => trim($datos['paterno']),
        'personalApeMaterno'  => trim($datos['materno']),
        'personalTipoPersonal'=> trim($datos['tipo']),
        'personalCorreo'      => trim($datos['correo']),
        'personalPassword'    => trim($datos['password'])
      ];
      
      $this->model->nuevo($data);
      return $this->response->setStatusCode(201)->setJSON($datos);
    else :
      $data['titulo'] = 'Personal';
      return view('Compania/personal', $data);
    endif;
	}

  public function correoUnico() {
    if (!$this->validate(['correo' => 'is_unique[personal.personalCorreo]|is_unique[compania.companiaCorreo]'])):
      return $this->response->setStatusCode(200)->setBody("false");
    endif;
    return $this->response->setStatusCode(200)->setBody("true");
  }

  public function tabla(){
    $id = 1;
    $data = $this->model->obtenerRegistros($id);
    $tabla = '';
    
    foreach($data as $item):
      $accion = '<div class=\"btn-group\">';
      $accion .= '<button type=\"button\" class=\"btn btn-primary waves-effect\" title=\"Editar\" onclick=\"editar('. $item->personalId .')\" data-toggle=\"modal\" data-target=\"#modalEdit\">';
      $accion .= '<i class=\"fa fa-edit\"></i> </button>';
      $accion .= '<button type=\"button\" class=\"btn btn-danger waves-effect\" title=\"Eliminar\" onclick=\"eliminar('. $item->personalId .')\">';
      $accion .= '<i class=\"fas fa-trash-alt\"></i> </button> </div>';
      if ($item->personalTipoPersonal == 1):
        $tipo = 'RRHH';
      else :
        $tipo = 'Tech Lead';
      endif;
      $tabla .= '{
        "personal" : "'.$item->personalNombre.' '.$item->personalApePaterno.' '.$item->personalApeMaterno.'",
        "tipo" : "'.$tipo.'",
        "correo" : "'.$item->personalCorreo.'",
        "acciones" : "'.$accion.'"
      },';
    endforeach;

    $tabla = substr($tabla, 0, strlen($tabla) - 1);
    $result = '{"data" : ['. $tabla .']}';
    return $this->response->setStatusCode(200)->setBody($result);
  }

  public function registroPorId(int $id) {
    $data = $this->model->obtenerPorId($id);
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
    if (!$this->validate([
      'nombre' => 'required',
      'paterno' => 'required',
      'correo' => 'required|valid_email',
    ])):
      $res = [
        'error'         => true,
        'code_error'    => 400,
        'error_title'   => 'Invalid Form Validation',
        'error_message' => '',
        'response'      => $this->validator->getErrors()
      ];
      return $this->response->setStatusCode(400)->setJSON($res);
    endif;

    $data = [
      'personalNombre'      => trim($this->request->getJsonVar('nombre')),
      'personalApePaterno'  => trim($this->request->getJsonVar('paterno')),
      'personalApeMaterno'  => trim($this->request->getJsonVar('materno')),
      'personalTipoPersonal'=> trim($this->request->getJsonVar('tipo')),
      'companiaCorreo'      => trim($this->request->getJsonVar('correo')),
    ];

    if(trim($this->request->getJsonVar('password')) != "") :
      $data['personalPassword'] = trim($this->request->getJsonVar('password'));
    endif;

    $this->model->actualizar($id, $data);

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
    $this->model->eliminar($id);
    return $this->response->setStatusCode(200);
  }
}
