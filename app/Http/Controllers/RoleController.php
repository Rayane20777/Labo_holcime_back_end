<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\RoleRequest;
use App\Services\Interfaces\RoleServiceInterface;
use App\DTOs\RoleDTO;
use Exception;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{
    use ResponseTrait;

    private RoleServiceInterface $service;

    public function __construct(RoleServiceInterface $service)
    {
        $this->service = $service;
        $this->middleware(function ($request, $next) {
            if (Gate::allows('isSuperAdmin')) {
                return $next($request);
            }

            return $this->responseError('Unauthorized', 403);
        })->except('index');
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
