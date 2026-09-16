<?php

namespace App\Http\Controllers\Api;

use App\DataTransferObjects\EducationDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEducationRequest;
use App\Http\Requests\UpdateEducationRequest;
use App\Http\Resources\Education\EducationResource;
use App\Http\Resources\Education\EducationResourceCollection;
use App\Models\Education;
use App\Repositories\EducationRepositoryInterface;

class EducationController extends Controller
{
    public function __construct(
        private readonly EducationRepositoryInterface $educationRepository
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = $this->educationRepository->getAll();
        return new EducationResourceCollection($educations);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEducationRequest $request)
    {
        $data = EducationDTO::fromRequest($request)->toArray();
        if (!empty($this->educationRepository->create($data))) {
            return $this->jsonResponse(self::MESSAGE_SUCCESS);
        }
        return $this->jsonResponse(self::MESSAGE_COULD_NOT_CREATE, 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $education = $this->educationRepository->getById($id);
        return new EducationResource($education);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEducationRequest $request)
    {
        $data = EducationDTO::fromRequest($request)->toArray();
        $id = $request->get('id');
        if (!empty($this->educationRepository->update($id, $data))) {
            return $this->jsonResponse(self::MESSAGE_SUCCESS);
        }
        return $this->jsonResponse(self::MESSAGE_COULD_NOT_UPDATE, 400);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if ($this->educationRepository->delete($id)) {
            return $this->jsonResponse(self::MESSAGE_SUCCESS);
        }
        return $this->jsonResponse(self::MESSAGE_COULD_NOT_DELETE, 400);
    }
}
