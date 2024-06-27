<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\DTOs\UserDTO;
use Exception;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;
use App\Services\Interfaces\UserServiceInterface;
class UserController extends Controller
{
    use ResponseTrait;

    private UserServiceInterface $service;

    public function __construct(UserServiceInterface $service)
    {
        $this->service = $service;
    }
    public function index(): JsonResponse
    {
        try {
            $data = $this->service->all();
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return response()->json($data);
    }

    public function store(UserRequest $request): JsonResponse
    {
        $payload = UserDTO::fromAdd($request->all());

        try {
            $data = $this->service->store($payload);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }
        return response()->json($data);

    }

    public function edit(UserEditRequest $request, int $id): JsonResponse
    {

        try {
          $data = $this->service->edit($request->all(),$id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }
        return response()->json($data);
        
    }

    public function destroy(int $id): JsonResponse
    {
        try {
            $this->service->destroy($id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess(null, "User deleted successfully");
    }

}
