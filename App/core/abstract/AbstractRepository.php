<?php
namespace App\Core\Abstract;
use App\Core\DataBase;
use App\Entities\User;
use App\Core\App;
use App\Repositories\IRepository;

abstract class AbstractRepository 
{
    protected  $db;
  
    
    public function __construct()
    {
        // $this->db = DataBase::getInstance()->connect();
        $this->db = App::getDependencie('DataBase')->connect();
    }
 
}