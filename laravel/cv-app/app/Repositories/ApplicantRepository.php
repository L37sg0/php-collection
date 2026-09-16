<?php

namespace App\Repositories;

use App\Models\Applicant as Model;
use App\Models\ApplicantInterface;
use Illuminate\Database\Eloquent\Collection;

class ApplicantRepository implements ApplicantRepositoryInterface
{

    public function getAll(): Collection
    {
        return Model::all();
    }

    public function getAllPaginated(int $limit)
    {
        return Model::paginate($limit);
    }

    public function getById(int $id): ?ApplicantInterface
    {
        return Model::findOrFail($id);
    }

    public function create(array $data): ?ApplicantInterface
    {
        return Model::create($data);
    }

    public function update(int $id, array $data): ?ApplicantInterface
    {
        return Model::whereId($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Model::destroy($id);
    }
}
