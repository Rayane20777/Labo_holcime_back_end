<?php

namespace App\Repositories\Implementations;

use App\DTOs\RoleDTO;
use App\Repositories\Interfaces\RoleRepositoryInterface;
use App\Models\Role;

class RoleRepository implements RoleRepositoryInterface
{

    
    public function all(){
        return Role::all();
    }

  
}
