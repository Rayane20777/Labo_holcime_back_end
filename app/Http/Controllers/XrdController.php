<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\XrdRequest;
use App\Services\Interfaces\XrdServiceInterface;
use App\DTOs\XrdDTO;
use Exception;
use Illuminate\Support\Facades\Gate;

class XrdController extends Controller
{
    use ResponseTrait;

    private XrdServiceInterface $service;

    public function __construct(XrdServiceInterface $service)
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

    public function store(XrdRequest $request): JsonResponse
    {
        $payload = XrdDTO::fromAdd($request->all());

        try {
            if (Gate::allows('isSuperAdmin') || Gate::allows('Admin') || Gate::allows('User')) {
                $data = $this->service->store($payload);
            } else {
                return $this->responseError('Unauthorized', 403);
            }
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return response()->json($data);
    }

    public function edit(XrdRequest $request, int $id)
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
        return response()->json($data);

    }

    public function destroy(int $id): JsonResponse
    {
        try {
            $this->service->destroy($id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess(null, "Xrd deleted successfully");
    }

    public function restore(int $id): JsonResponse
    {
        try {
            $this->service->restore($id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess(null, "Xrd restored successfully");
    }
}
