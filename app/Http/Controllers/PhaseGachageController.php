<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\PhaseGachageRequest;
use App\Services\Interfaces\PhaseGachageServiceInterface;
use App\DTOs\PhaseGachageDTO;
use Exception;
use Illuminate\Support\Facades\Gate;

class PhaseGachageController extends Controller
{
    use ResponseTrait;

    private PhaseGachageServiceInterface $service;

    public function __construct(PhaseGachageServiceInterface $service)
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
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return response()->json($data);
    }

    public function store(PhaseGachageRequest $request): JsonResponse
    {
        $payload = PhaseGachageDTO::fromAdd($request->all());

        try {
            if (Gate::allows('isSuperAdmin') || Gate::allows('Admin') || Gate::allows('User')) {

                $data = $this->service->store($payload);
            } else {
                return $this->responseError('Unauthorized', 403);
            }
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess($data, "Phase Gachage created successfully");
    }

    public function edit(PhaseGachageRequest $request, int $id)
    {
        try {
            if (Gate::allows('isSuperAdmin') || Gate::allows('Admin')) {
                $data = $this->service->edit($request->all(), $id);
            } else {
                return $this->responseError('Unauthorized', 403);
            }
        } catch (Exception $e) {
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
