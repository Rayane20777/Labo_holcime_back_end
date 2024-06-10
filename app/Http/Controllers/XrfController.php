<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\XrfRequest;
use App\Services\Interfaces\XrfServiceInterface;
use App\DTOs\XrfDTO;
use Exception;

class XrfController extends Controller
{
    use ResponseTrait;

    private XrfServiceInterface $service;

    public function __construct(XrfServiceInterface $service)
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

    public function store(XrfRequest $request): JsonResponse
    {
        $payload = XrfDTO::fromAdd($request->all());

        try {
            $data = $this->service->store($payload);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess($data, "Xrf created successfully");
    }

    public function edit(XrfRequest $request, int $id)
    {
        try{
           $data = $this->service->edit($request->all(),$id);
        }catch(Exception $e){
            return $this->responseError($e->getMessage());
        }
        return $this->responseSuccess($data, "Xrf updated successfully");

    }

    public function destroy(int $id): JsonResponse
    {
        try {
            $this->service->destroy($id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess(null, "Xrf deleted successfully");
    }

    public function restore(int $id): JsonResponse
    {
        try {
            $this->service->restore($id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess(null, "Xrf restored successfully");
    } 
}
