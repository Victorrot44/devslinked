<?php
namespace App\Models\Catalogos;

use CodeIgniter\Model;

class SoftwareModel extends Model{
  protected $table      = 'software';
  protected $primaryKey = 'softwareId';

  protected $useAutoIncrement = true;

  protected $returnType     = 'object'; // array | object | Endity
  protected $useSoftDeletes = true;

  protected $allowedFields = ['software', 'softwareTypeSoftwareId'];

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

  public function allRecords() {
    $fields = 'software.softwareId, software.software, typeSoftware.typeSoftware';
    return $this->select($fields)
                ->join('typeSoftware', 'typeSoftware.typeSoftwareId = software.softwareTypeSoftwareId')
                ->findAll();
  }

  public function newRecord(Array $data) {
    return $this->insert($data);
  }

  public function getById($id) {
    return $this->find($id);
  }

  public function updateRecord(int $id, Array $data) {
    return $this->update($id, $data);
  }

  public function deleteRecord(int $id) {
    return $this->delete($id);
  }
}