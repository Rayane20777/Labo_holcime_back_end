<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\PhaseTempsPriseRequest;
use App\Services\Interfaces\PhaseTempsPriseServiceInterface;
use App\DTOs\PhaseTempsPriseDTO;
use Exception;
use Illuminate\Support\Facades\Gate;

class PhaseTempsPriseController extends Controller
{
    use ResponseTrait;

    private PhaseTempsPriseServiceInterface $service;

    public function __construct(PhaseTempsPriseServiceInterface $service)
    {
        $this->service = $service;
        // $this->middleware(function ($request, $next) {
        //     if (Gate::allows('isSuperAdmin')) {
        //         return $next($request);
        //     }

        //     return $this->responseError('Unauthorized', 403);
        // });
    }

    public function index(): JsonResponse
    {
        try {
            if (Gate::allows('isSuperAdmin') || Gate::allows('isAdmin') || Gate::allows('isUser')) {

                $data = $this->service->all();
            } else {
                return $this->responseError('Unauthorized', 403);
            }
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }
        return response()->json($data);
    }

    public function store(PhaseTempsPriseRequest $request): JsonResponse
    {
        $payload = PhaseTempsPriseDTO::fromAdd($request->all());

        try {
            if (Gate::allows('isSuperAdmin') || Gate::allows('Admin') || Gate::allows('isUser')) {
                $data = $this->service->store($payload);
            } else {
                return $this->responseError('Unauthorized', 403);
            }
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess($data, "Phase Gachage created successfully");
    }

    public function edit(PhaseTempsPriseRequest $request, int $id)
    {
        try {
            if (Gate::allows('isSuperAdmin') || Gate::allows('isAdmin')) {
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
            if (Gate::allows('isSuperAdmin')) {
                $this->service->destroy($id);
            } else {
                return $this->responseError('Unauthorized', 403);
            }
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
