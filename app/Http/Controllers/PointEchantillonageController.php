<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\Interfaces\PointEchantillonageServiceInterface;
use App\DTOs\PointEchantillonageDTO;
use Illuminate\Support\Facades\Gate;
use Exception;
use App\Http\Requests\PointEchantillonageRequest;

class PointEchantillonageController extends Controller
{
    use ResponseTrait;

    private PointEchantillonageServiceInterface $service;

    public function __construct(PointEchantillonageServiceInterface $service)
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
                return response()->json($data);
            
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

    }

    public function store(PointEchantillonageRequest $request): JsonResponse
    {
        $payload = PointEchantillonageDTO::fromAdd($request->all());

        try {
            $data = $this->service->store($payload);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }
        return response()->json($data);

    }

    public function edit(PointEchantillonageRequest $request, int $id): JsonResponse
    {
        try {
            $data = $this->service->edit($request->all(), $id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }
        return $this->responseSuccess($data, "Point Echantillonage updated successfully");

    }

    public function destroy(int $id): JsonResponse
    {
        try {
            $this->service->destroy($id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess(null, "Point Echantillonage deleted successfully");
    }

    public function restore(int $id): JsonResponse
    {
        try {
            $this->service->restore($id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess(null, "Point Echantillonage restored successfully");
    }

}
