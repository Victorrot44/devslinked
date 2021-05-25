<?php

namespace App\Models\Compania;

use CodeIgniter\Model;

class PersonalModel extends Model{
  protected $table      = 'personal';
  protected $primaryKey = 'personalId';

  protected $useAutoIncrement = true;

  protected $returnType     = 'object'; // array | object | Endity
  protected $useSoftDeletes = true;

  protected $allowedFields = ['personalCompaniaId', 'personalTipoPersonal', 'personalNombre', 'personalApePaterno', 'personalApeMaterno', 'personalCorreo', 'personalPassword'];

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

  public function obtenerRegistros($id) {
    return $this->where('personalCompaniaId', $id)->findAll();
  }

  public function obtenerPorId(int $id) {
    return $this->select('personalId, personalTipoPersonal, personalNombre, personalApePaterno, personalApeMaterno, personalCorreo')->find($id);
  }

  public function actualizar(int $id, Array $data) {
    return $this->update($id, $data);
  }

  public function eliminar(int $id) {
    return $this->delete($id);
  }
}