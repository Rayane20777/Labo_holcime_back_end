<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\DTOs\UserDTO;
use Illuminate\Support\Facades\Gate;
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

        $this->middleware(function ($request, $next) {
            if (Gate::allows('isSuperAdmin')) {
                return $next($request);
            }

            return $this->responseError('Unauthorized', 403);
        });
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
            if (Gate::allows('isSuperAdmin') || Gate::allows('Admin') || Gate::allows('User')) {
                $data = $this->service->store($payload);
            } else {
                return $this->responseError('Unauthorized', 403);
            }
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }
        return response()->json($data);

    }

    public function edit(UserEditRequest $request, int $id): JsonResponse
    {

        try {
            if (Gate::allows('isSuperAdmin') || Gate::allows('Admin')) {
                $data = $this->service->edit($request->all(), $id);
            } else {
                return $this->responseError('Unauthorized', 403);
            }
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
