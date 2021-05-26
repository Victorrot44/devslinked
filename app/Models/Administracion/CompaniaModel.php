<?php

namespace App\Models\Administracion;

use CodeIgniter\Model;

class CompaniaModel extends Model{
  protected $table      = 'compania';
  protected $primaryKey = 'companiaId';

  protected $useAutoIncrement = true;

  protected $returnType     = 'object'; // array | object | Endity
  protected $useSoftDeletes = true;

  protected $allowedFields = ['companiaNombre', 'companiaResponsable', 'companiaResponsablePuesto', 'companiaDescripcion', 'companiaLinkedIn', 'companiaCorreo', 'companiaPassword'];

  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  protected $validationRules    = [];
  protected $validationMessages = [];
  protected $skipValidation     = true;

  protected $beforeInsert = []; // Antes de Insertar
  protected $afterInsert  = []; // Despues de Insertar
  protected $beforeUpdate = []; // Antes de Actualizar
  protected $afterUpdate  = []; // Despues de Actualizar
  protected $afterFind    = []; // Despues de Buscar
  protected $afterDelete  = []; // Despues de Eliminar

  public function __construct(){
    parent::__construct();
    $this->db = db_connect();
  }

  public function nuevo(Array $data) {
    return $this->insert($data);
  }

  public function obtenerRegistros() {
    return $this->findAll();
  }

  public function obtenerPorId(int $id) {
    return $this->select('companiaId, companiaNombre, companiaResponsable, companiaResponsablePuesto, companiaDescripcion, companiaLinkedIn, companiaCorreo')->find($id);
  }

  public function actualizar(int $id, Array $data) {
    return $this->update($id, $data);
  }

  public function eliminar(int $id) {
    return $this->delete($id);
  }
}