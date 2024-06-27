<?php

namespace App\Services\Implementations;

use App\DTOs\RoleDTO;
use App\Repositories\Interfaces\RoleRepositoryInterface;
use App\Services\Interfaces\RoleServiceInterface;
use App\Models\Role;
class RoleService implements RoleServiceInterface
{
    private RoleRepositoryInterface $repository;

    public function __construct(RoleRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    
    public function all()
    {
        return $this->repository->all();
    }

}
