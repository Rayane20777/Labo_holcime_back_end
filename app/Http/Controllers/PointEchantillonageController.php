<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\Interfaces\PointEchantillonageServiceInterface;
use App\DTOs\PointEchantillonageDTO;
use Exception;

class PointEchantillonageController extends Controller
{
    use ResponseTrait;

    private PointEchantillonageServiceInterface $service;

    public function __construct(PointEchantillonageServiceInterface $service)
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

        return $this->responseSuccess($data, "Point Echantillonages retrieved successfully");
    }

    public function store(Request $request): JsonResponse
    {
        $payload = PointEchantillonageDTO::fromAdd($request->all());

        try {
            $data = $this->service->store($payload);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess($data, "Point Echantillonage created successfully");
    }

    public function update(Request $request, int $id)
    {

        try {
            $this->service->edit($request->all(),$id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

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
