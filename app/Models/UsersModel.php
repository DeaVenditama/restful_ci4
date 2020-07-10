<?php
namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username','firstname','lastname','address','age','avatar','password','salt','created_date','created_by','updated_date','updated_by'
    ];
    protected $returnType = 'App\Entities\Users';
    protected $useTimestamps = false;

    public function findById($id)
    {
        $data = $this->find($id);
        if($data)
        {
            return $data;
        }
        return false;
    }

}
