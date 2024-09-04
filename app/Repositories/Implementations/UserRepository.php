<?php

namespace App\Repositories\Implementations;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\DTOs\UserDTO;

class UserRepository implements UserRepositoryInterface
{

    public function all(){
        return User::all();
    }
    
    public function register($data)
    {
        return User::create($data);
    }

    public function store($data)
    {
        return User::create([
            'username' => $data->username,
            'password' => $data->password,
            'role' => $data->role,
            
        ]);
    }

    public function edit($data, $id)
    {
        $user = User::where('id',$id)->first();
        $user->username = $data['username'];
        // $user->password = $data['password'];
        $user->role = $data['role'];
        $user->update();

        return $user;
    }

    public function resetPassword($data, $id)
    {
        $user = User::where('id',$id)->first();
        $user->password = $data['password'];
        $user->update();

        return $user;
    }

    public function destroy(int $id)
    {
        $user = User::findOrFail($id);
        return $user->delete();
    }

}
