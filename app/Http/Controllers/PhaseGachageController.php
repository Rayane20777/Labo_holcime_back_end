<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\PhaseGachageRequest;
use App\Services\Interfaces\PhaseGachageServiceInterface;
use App\DTOs\PhaseGachageDTO;
use Exception;

class PhaseGachageController extends Controller
{
    use ResponseTrait;

    private PhaseGachageServiceInterface $service;

    public function __construct(PhaseGachageServiceInterface $service)
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

        return $this->responseSuccess($data, "Phase Gachage retrieved successfully");
    }

    public function store(PhaseGachageRequest $request): JsonResponse
    {
        $payload = PhaseGachageDTO::fromAdd($request->all());

        try {
            $data = $this->service->store($payload);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess($data, "Phase Gachage created successfully");
    }

    public function edit(PhaseGachageRequest $request, int $id)
    {
        try{
           $data = $this->service->edit($request->all(),$id);
        }catch(Exception $e){
            return $this->responseError($e->getMessage());
        }
        return $this->responseSuccess($data, "Phase Gachage updated successfully");

    }

    public function destroy(int $id): JsonResponse
    {
        try {
            $this->service->destroy($id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess(null, "Phase Gachage deleted successfully");
    }

    public function restore(int $id): JsonResponse
    {
        try {
            $this->service->restore($id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess(null, "Phase Gachage restored successfully");
    } 
}
