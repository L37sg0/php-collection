<?php

namespace App\Repositories;

use App\Models\Skill as Model;
use App\Models\SkillInterface;
use Illuminate\Database\Eloquent\Collection;

class SkillRepository implements SkillRepositoryInterface
{

    public function getAll(): Collection
    {
        return Model::all();
    }

    public function getById(int $id): ?SkillInterface
    {
        return Model::findOrFail($id);
    }

    public function create(array $data): ?SkillInterface
    {
        return Model::create($data);
    }

    public function update(int $id, array $data): ?SkillInterface
    {
        return Model::whereId($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Model::destroy($id);
    }
}
