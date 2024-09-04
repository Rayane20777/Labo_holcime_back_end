<?php

namespace App\Services\Implementations;

use App\DTOs\UserDTO;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Services\Interfaces\UserServiceInterface;
use App\Traits\ResponseTrait;

class UserService implements UserServiceInterface
{
    use ResponseTrait;
    private UserRepositoryInterface $repository;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function store(UserDTO $data)
    {
        return $this->repository->store($data);
    }
    

    public function register($data)
    {
        $data = $this->getData($data);
        $user = $this->repository->register($data);
        $token = auth()->login($user);
        $authorization = $this->createToken($token);
        
        return array_merge(compact("user"), compact('authorization'));
    }
    public function login($data)
    {

        $data = $this->getData($data);
        $data = array_filter($data, fn($key) => in_array($key, ['username', 'password']), ARRAY_FILTER_USE_KEY);
        $token = auth()->attempt($data);

    
        $user = auth()->user();
        $authorization = $this->createToken($token);

    return $this->compactData($user, $authorization);
}

    
    public function logout()
    {
        auth()->logout();
    }
    
    public function getData(UserDTO $data)
    {
        return get_object_vars($data);
    }

    public function compactData($user, $authorization)
    {
        return array_merge(compact("user"), compact('authorization'));
    }
    
    public function createToken(string $token)
    {

        return [
          'token' => $token,
          'type' => 'bearer',
          'expires_in' => auth()->factory()->getTTL() * 60 * 24 * 7,
        ];
    }

    public function edit($data, int $id)
    {
        return $this->repository->edit($data, $id);
    }

    public function resetPassword($data, int $id)
    {
        return $this->repository->resetPassword($data, $id);
    }

    public function destroy(int $id)
    {
        return $this->repository->destroy($id);
    }
    
}       