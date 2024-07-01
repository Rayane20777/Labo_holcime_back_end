<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\MatiereRequest;
use App\Services\Interfaces\MatiereServiceInterface;
use App\DTOs\MatiereDTO;
use Exception;
use Illuminate\Support\Facades\Gate;

class MatiereController extends Controller
{
    use ResponseTrait;

    private MatiereServiceInterface $service;

    public function __construct(MatiereServiceInterface $service)
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

    public function matiereFilter(int $id): JsonResponse
    {
        try {
            $matiere = $this->service->matiereFilter($id);

        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return response()->json($matiere);
    }

    public function userMatiereFilter(int $id): JsonResponse
    {
        try {
            $matiere = $this->service->userMatiereFilter($id);

        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return response()->json($matiere);
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

    public function edit(MatiereRequest $request, int $id)
    {
        try {
            $data = $this->service->edit($request->all(), $id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }
        return $this->responseSuccess($data, "Matiere updated successfully");

    }

    public function destroy(int $id): JsonResponse
    {
        try {
            $this->service->destroy($id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess(null, "Matiere deleted successfully");
    }

    public function restore(int $id): JsonResponse
    {
        try {
            $this->service->restore($id);
        } catch (Exception $e) {
            return $this->responseError($e->getMessage());
        }

        return $this->responseSuccess(null, "Matiere restored successfully");
    }
}
