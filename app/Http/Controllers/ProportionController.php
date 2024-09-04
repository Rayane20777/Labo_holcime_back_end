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
use Illuminate\Support\Facades\Gate;

class ProportionController extends Controller
{
    use ResponseTrait;

    private ProportionServiceInterface $service;

    public function __construct(ProportionServiceInterface $service)
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

    public function store(ProportionRequest $request): JsonResponse
    {
        $payload = ProportionDTO::fromAdd($request->all());

        try {
            if (Gate::allows('isSuperAdmin') || Gate::allows('isAdmin') || Gate::allows('isUser')) {
                $data = $this->service->store($payload);
            } else {
                return $this->responseError('Unauthorized', 403);
            }
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess($data, "Proportion created successfully");
    }

    public function edit(ProportionEditRequest $request, int $id): JsonResponse
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
        return $this->responseSuccess($data, "Analyse chimique updated successfully");


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
