<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\Interfaces\AnalyseServiceInterface;
use App\DTOs\AnalyseDTO;
use Exception;
use App\Http\Requests\AnalyseRequest;

class AnalyseController extends Controller
{
    use ResponseTrait;

    private AnalyseServiceInterface $service;

    public function __construct(AnalyseServiceInterface $service)
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

    public function store(AnalyseRequest $request): JsonResponse
    {
        try {
            $payload = AnalyseDTO::fromAdd($request->all());
            $analyse = $this->service->store($payload);
            return response()->json($analyse, 201);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }
    }

    public function edit(AnalyseRequest $request, int $id)
    {
        try {
            $analyse = $this->service->edit($request->all(),$id);
            return response()->json($analyse);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }
        
    }

    public function destroy(int $id): JsonResponse
    {
        try {
            $this->service->destroy($id);
            return response()->json(null, 204);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }
    }

    public function restore(int $id): JsonResponse
    {
        try {
            $this->service->restore($id);
            return response()->json(null, 204);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }
    }

    public function lockAnalyse(int $id): JsonResponse
    {
        try{
            $analyse = $this->service->lockAnalyse($id);
            return response()->json($analyse, 'locked succesfully');
        }catch(Exception $e){
            return $this->responseError($e->getMessage());
        }
    }
}
