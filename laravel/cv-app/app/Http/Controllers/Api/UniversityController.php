<?php

namespace App\Http\Controllers\Api;

use App\DataTransferObjects\UniversityDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUniversityRequest;
use App\Http\Requests\UpdateUniversityRequest;
use App\Http\Resources\University\UniversityResource;
use App\Http\Resources\University\UniversityResourceCollection;
use App\Models\University;
use App\Repositories\UniversityRepositoryInterface;

class UniversityController extends Controller
{
    public function __construct(
        private readonly UniversityRepositoryInterface $universityRepository
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universities = $this->universityRepository->getAll();
        return new UniversityResourceCollection($universities);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUniversityRequest $request)
    {
        $data = UniversityDTO::fromRequest($request)->toArray();
        if (!empty($this->universityRepository->create($data))) {
            return $this->jsonResponse(self::MESSAGE_SUCCESS);
        }
        return $this->jsonResponse(self::MESSAGE_COULD_NOT_CREATE, 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $university = $this->universityRepository->getById($id);
        return new UniversityResource($university);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUniversityRequest $request)
    {
        $data = UniversityDTO::fromRequest($request)->toArray();
        $id = $request->get('id');
        if (!empty($this->universityRepository->update($id, $data))) {
            return $this->jsonResponse(self::MESSAGE_SUCCESS);
        }
        return $this->jsonResponse(self::MESSAGE_COULD_NOT_UPDATE, 400);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if ($this->universityRepository->delete($id)) {
            return $this->jsonResponse(self::MESSAGE_SUCCESS);
        }
        return $this->jsonResponse(self::MESSAGE_COULD_NOT_DELETE, 400);
    }
}
