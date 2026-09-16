<?php

namespace App\Repositories;

use App\Models\University as Model;
use App\Models\UniversityInterface;
use Illuminate\Database\Eloquent\Collection;

class UniversityRepository implements UniversityRepositoryInterface
{

    public function getAll(): Collection
    {
        return Model::all();
    }

    public function getById(int $id): ?UniversityInterface
    {
        return Model::findOrFail($id);
    }

    public function create(array $data): ?UniversityInterface
    {
        return Model::create($data);
    }

    public function update(int $id, array $data): ?UniversityInterface
    {
        return Model::whereId($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Model::destroy($id);
    }
}
