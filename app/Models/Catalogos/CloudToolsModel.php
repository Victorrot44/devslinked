<?php
namespace App\Models\Catalogos;

use CodeIgniter\Model;

class CloudToolsModel extends Model{
  protected $table      = 'cloudTool';
  protected $primaryKey = 'cloudToolId';

  protected $useAutoIncrement = true;

  protected $returnType     = 'object'; // array | object | Endity
  protected $useSoftDeletes = true;

  protected $allowedFields = ['cloudTool', 'cloudToolTypeSoftwareId'];

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
    $fields = 'cloudTool.cloudToolId, cloudTool.cloudTool, typeSoftware.typeSoftware';
    return $this->select($fields)
                ->join('typeSoftware', 'typeSoftware.typeSoftwareId = cloudTool.cloudToolTypeSoftwareId')
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