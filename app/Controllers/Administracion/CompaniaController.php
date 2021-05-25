<?php
namespace App\Controllers\Administracion;

use App\Controllers\BaseController;
use App\Models\Administracion\CompaniaModel;

class CompaniaController extends BaseController{

  public function __construct() {
    $this->model = new CompaniaModel();
  }

	public function index() {
    if ($this->request->getMethod() == 'post'):
      if (!$this->validate([
        'compania' => 'required',
        'descripcion' => 'required|max_length[255]',
        'correo' => 'required|valid_email|is_unique[compania.companiaCorreo]',
        'password' => 'required|max_length[20]|min_length[8]'
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
        'companiaNombre'      => trim($datos['compania']),
        'companiaDescripcion' => trim($datos['descripcion']),
        'companiaLinkedIn'    => trim($datos['linkedin']),
        'companiaCorreo'      => trim($datos['correo']),
        'companiaPassword'    => trim($datos['password'])
      ];

      $this->model->nuevo($data);
      return $this->response->setStatusCode(201);
    else :
      $data['titulo'] = 'Compañias';
      return view('Administracion/companias', $data);
    endif;
	}

  public function tabla(){
    $data = $this->model->obtenerRegistros();
    $tabla = '';
    
    foreach($data as $item):
      $accion = '<div class=\"btn-group\">';
      $accion .= '<button type=\"button\" class=\"btn btn-info waves-effect\" title=\"Detalles\" onclick=\"detalles('. $item->companiaId .')\" data-toggle=\"modal\" data-target=\"#modalInfo\">';
      $accion .= '<i class=\"fa fa-info\"></i> </button>';
      $accion .= '<button type=\"button\" class=\"btn btn-primary waves-effect\" title=\"Editar\" onclick=\"editar('. $item->companiaId .')\" data-toggle=\"modal\" data-target=\"#modalEdit\">';
      $accion .= '<i class=\"fa fa-edit\"></i> </button>';
      $accion .= '<button type=\"button\" class=\"btn btn-danger waves-effect\" title=\"Eliminar\" onclick=\"eliminar('. $item->companiaId .')\">';
      $accion .= '<i class=\"fas fa-trash-alt\"></i> </button> </div>';
      $tabla .= '{
        "compania" : "'.$item->companiaNombre.'",
        "linkedin" : "<a href=\"'.$item->companiaLinkedIn.'\">'.$item->companiaLinkedIn.'</a>",
        "correo" : "'.$item->companiaCorreo.'",
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
      'compania' => 'required',
      'descripcion' => 'required|max_length[255]',
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
      'companiaNombre'      => trim($this->request->getJsonVar('compania')),
      'companiaDescripcion' => trim($this->request->getJsonVar('descripcion')),
      'companiaLinkedIn'    => trim($this->request->getJsonVar('linkedin')),
      'companiaCorreo'      => trim($this->request->getJsonVar('correo')),
    ];

    if(trim($this->request->getJsonVar('password')) != "") :
      $data['companiaPassword'] = trim($this->request->getJsonVar('password'));
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
