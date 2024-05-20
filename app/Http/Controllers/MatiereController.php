<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\MatiereRequest;
use App\Services\Interfaces\MatiereServiceInterface;
use App\DTOs\MatiereDTO;
use Exception;

class MatiereController extends Controller
{
    use ResponseTrait;

    private MatiereServiceInterface $service;

    public function __construct(MatiereServiceInterface $service)
    {
        $this->service = $service;
    }

    public function store(MatiereRequest $request): JsonResponse
    {
        $payload = MatiereDTO::fromAdd($request->all());

        try {
            $data = $this->service->store($payload);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess($data, "Matiere created successfully");
    }

    public function edit(MatiereRequest $request, int $id):JsonResponse
    {
        $payload = MatiereDTO::fromEdit(array_merge($request->all(),['id' => $id]));

        try{
            $data = $this->service->edit($payload);
        }catch(Exception $e){
            return $this->responseError($e->getMessage());
        }
        return $this->responseSuccess($data,"Matiere updated successfully");
    }
}
