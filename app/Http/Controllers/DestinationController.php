<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\Interfaces\DestinationServiceInterface;
use App\DTOs\DestinationDTO;
use Exception;
use App\Http\Requests\DestinationRequest;

class DestinationController extends Controller
{
    use ResponseTrait;

    private DestinationServiceInterface $service;

    public function __construct(DestinationServiceInterface $service)
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

        return $this->responseSuccess($data, "Destinations retrieved successfully");
    }

    public function store(DestinationRequest $request): JsonResponse
    {
        $payload = DestinationDTO::fromAdd($request->all());

        try {
            $data = $this->service->store($payload);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess($data, "Destination created successfully");
    }

    public function edit(DestinationRequest $request, int $id): JsonResponse
    {

        try {
          $data = $this->service->edit($request->all(),$id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }
        return $this->responseSuccess($data, "Destination updated successfully");
        
    }

    public function destroy(int $id): JsonResponse
    {
        try {
            $this->service->destroy($id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess(null, "Destination deleted successfully");
    }

    public function restore(int $id): JsonResponse
    {
        try {
            $this->service->restore($id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess(null, "Destination restored successfully");
    }

}
