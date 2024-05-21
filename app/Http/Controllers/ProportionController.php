<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\Interfaces\ProportionServiceInterface;
use App\DTOs\ProportionDTO;
use Exception;
use App\Exceptions\ProportionNotFoundException;
use App\Http\Requests\ProportionRequest;
use App\Http\Requests\ProportionEditRequest;
class ProportionController extends Controller
{
    use ResponseTrait;

    private ProportionServiceInterface $service;

    public function __construct(ProportionServiceInterface $service)
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

        return $this->responseSuccess($data, "Proportions retrieved successfully");
    }

    public function store(ProportionRequest $request): JsonResponse
    {
        $payload = ProportionDTO::fromAdd($request->all());

        try {
            $data = $this->service->store($payload);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess($data, "Proportion created successfully");
    }

    public function edit(ProportionEditRequest $request, int $id): JsonResponse
    {

        try {
            $data = $this->service->edit($request->all(),$id);
        } catch (ProportionNotFoundException $e) {
            return $this->responseError($e->getMessage(), 404);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess($data, "Proportion updated successfully");
    }

    public function destroy(int $id): JsonResponse
    {
        try {
            $this->service->destroy($id);
        } catch (ProportionNotFoundException $e) {
            return $this->responseError($e->getMessage(), 404);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess(null, "Proportion deleted successfully");
    }

    public function restore(int $id): JsonResponse
    {
        try {
            $this->service->restore($id);
        } catch (ProportionNotFoundException $e) {
            return $this->responseError($e->getMessage(), 404);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess(null, "Proportion restored successfully");
    }
}