<?php

namespace App\Http\Controllers\Api;

use App\DataTransferObjects\ApplicantDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApplicantRequest;
use App\Http\Requests\UpdateApplicantRequest;
use App\Http\Resources\Applicant\ApplicantResourceCollection;
use App\Http\Resources\Applicant\ApplicantResource;
use App\Repositories\ApplicantRepositoryInterface;

class ApplicantController extends Controller
{
    public function __construct(
        private readonly ApplicantRepositoryInterface $applicantRepository
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applicants = $this->applicantRepository->getAllPaginated(5);
        return new ApplicantResourceCollection($applicants);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApplicantRequest $request)
    {
        $data = ApplicantDTO::fromRequest($request)->toArray();
        if (!empty($this->applicantRepository->create($data))) {
            return $this->jsonResponse(self::MESSAGE_SUCCESS);
        }
        return $this->jsonResponse(self::MESSAGE_COULD_NOT_CREATE, 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $applicant = $this->applicantRepository->getById($id);
        return new ApplicantResource($applicant->load(['skills', 'educations']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApplicantRequest $request)
    {
        $data = ApplicantDTO::fromRequest($request)->toArray();
        $id = $request->get('id');

        if (!empty($this->applicantRepository->update($id, $data))) {
            return $this->jsonResponse(self::MESSAGE_SUCCESS);
        }
        return $this->jsonResponse(self::MESSAGE_COULD_NOT_UPDATE, 400);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if ($this->applicantRepository->delete($id)) {
            return $this->jsonResponse(self::MESSAGE_SUCCESS);
        }
        return $this->jsonResponse(self::MESSAGE_COULD_NOT_DELETE, 400);
    }
}
