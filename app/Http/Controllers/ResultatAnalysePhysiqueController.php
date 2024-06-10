<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\ResultatAnalysePhysiqueRequest;
use App\Services\Interfaces\ResultatAnalysePhysiqueServiceInterface;
use App\DTOs\ResultatAnalysePhysiqueDTO;
use Exception;

class ResultatAnalysePhysiqueController extends Controller
{
    use ResponseTrait;

    private ResultatAnalysePhysiqueServiceInterface $service;

    public function __construct(ResultatAnalysePhysiqueServiceInterface $service)
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

    public function store(ResultatAnalysePhysiqueRequest $request): JsonResponse
    {
        $payload = ResultatAnalysePhysiqueDTO::fromAdd($request->all());

        try {
            $data = $this->service->store($payload);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess($data, "Phase Gachage created successfully");
    }

    public function edit(ResultatAnalysePhysiqueRequest $request, int $id)
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
