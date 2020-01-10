<?php
/**

 */
namespace App\Repositories;
use App\User as Model;

class UserRepository extends CoreRepository
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * @return mixed
     */
    protected function getModelClass()
    {
        return Model::class;
    }


    /** User Role */
    public function getUserRole($id)
    {
        $role = $this->startConditions()
            ->find($id)
            ->roles()
            ->get();
        foreach ($role as $r){
            $role = $r->name;
        }
        return $role;
    }



}