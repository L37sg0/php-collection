<?php

namespace App\Http\Controllers\Api;

use App\DataTransferObjects\SkillDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;
use App\Http\Resources\Skill\SkillResource;
use App\Http\Resources\Skill\SkillResourceCollection;
use App\Models\Skill;
use App\Repositories\SkillRepositoryInterface;

class SkillController extends Controller
{
    public function __construct(
        private readonly SkillRepositoryInterface $skillRepository
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = $this->skillRepository->getAll();
        return new SkillResourceCollection($skills);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSkillRequest $request)
    {
        $data = SkillDTO::fromRequest($request)->toArray();
        if (!empty($this->skillRepository->create($data))) {
            return $this->jsonResponse(self::MESSAGE_SUCCESS);
        }
        return $this->jsonResponse(self::MESSAGE_COULD_NOT_CREATE, 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $skill = $this->skillRepository->getById($id);
        return new SkillResource($skill);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkillRequest $request)
    {
        $data = SkillDTO::fromRequest($request)->toArray();
        $id = $request->get('id');
        if (!empty($this->skillRepository->update($id, $data))) {
            return $this->jsonResponse(self::MESSAGE_SUCCESS);
        }
        return $this->jsonResponse(self::MESSAGE_COULD_NOT_UPDATE, 400);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if ($this->skillRepository->delete($id)) {
            return $this->jsonResponse(self::MESSAGE_SUCCESS);
        }
        return $this->jsonResponse(self::MESSAGE_COULD_NOT_DELETE, 400);
    }
}
