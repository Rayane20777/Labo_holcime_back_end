<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\RoleRequest;
use App\Services\Interfaces\RoleServiceInterface;
use App\DTOs\RoleDTO;
use Exception;

class RoleController extends Controller
{
    use ResponseTrait;

    private RoleServiceInterface $service;

    public function __construct(RoleServiceInterface $service)
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

    
}
