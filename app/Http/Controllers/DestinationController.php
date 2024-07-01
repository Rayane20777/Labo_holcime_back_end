<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\Interfaces\DestinationServiceInterface;
use App\DTOs\DestinationDTO;
use Exception;
use App\Http\Requests\DestinationRequest;
use Illuminate\Support\Facades\Gate;

class DestinationController extends Controller
{
    use ResponseTrait;

    private DestinationServiceInterface $service;

    public function __construct(DestinationServiceInterface $service)
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

    public function store(DestinationRequest $request): JsonResponse
    {

        try {

            $payload = DestinationDTO::fromAdd($request->all());
            $data = $this->service->store($payload);
            return response()->json($data);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }
    }

    public function edit(DestinationRequest $request, int $id): JsonResponse
    {

        try {
            $data = $this->service->edit($request->all(), $id);
            return response()->json($data);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }
    }

    public function destroy(int $id): JsonResponse
    {
        try {
            $this->service->destroy($id);
            return $this->responseSuccess(null, "Destination deleted successfully");
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }
    }

    public function restore(int $id): JsonResponse
    {
        try {
            $this->service->restore($id);
            return $this->responseSuccess(null, "Destination restored successfully");
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }
    }
}
