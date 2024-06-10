<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\AnalyseChimiqueRequest;
use App\Services\Interfaces\AnalyseChimiqueServiceInterface;
use App\DTOs\AnalyseChimiqueDTO;
use Exception;

class AnalyseChimiqueController extends Controller
{
    use ResponseTrait;

    private AnalyseChimiqueServiceInterface $service;

    public function __construct(AnalyseChimiqueServiceInterface $service)
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

    public function store(AnalyseChimiqueRequest $request): JsonResponse
    {
        $payload = AnalyseChimiqueDTO::fromAdd($request->all());

        try {
            $data = $this->service->store($payload);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess($data, "Analyse chimique created successfully");
    }

    public function edit(AnalyseChimiqueRequest $request, int $id)
    {
        try{
           $data = $this->service->edit($request->all(),$id);
        }catch(Exception $e){
            return $this->responseError($e->getMessage());
        }
        return $this->responseSuccess($data, "Analyse chimique updated successfully");

    }

    public function destroy(int $id): JsonResponse
    {
        try {
            $this->service->destroy($id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess(null, "Analyse chimique deleted successfully");
    }

    public function restore(int $id): JsonResponse
    {
        try {
            $this->service->restore($id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess(null, "Analyse chimique restored successfully");
    } 
}
