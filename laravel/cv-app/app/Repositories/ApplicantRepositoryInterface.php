<?php

namespace App\Repositories;

use App\Models\ApplicantInterface;
use Illuminate\Database\Eloquent\Collection;

interface ApplicantRepositoryInterface
{
    public function getAll(): Collection;

    public function getAllPaginated(int $limit);

    public function getById(int $id): ?ApplicantInterface;

    public function create(array $data): ?ApplicantInterface;

    public function update(int $id, array $data): ?ApplicantInterface;

    public function delete(int $id): bool;
}
