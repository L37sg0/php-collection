<?php

namespace App\Repositories;

use App\Models\SkillInterface;
use Illuminate\Database\Eloquent\Collection;

interface SkillRepositoryInterface
{
    public function getAll(): Collection;

    public function getById(int $id): ?SkillInterface;

    public function create(array $data): ?SkillInterface;

    public function update(int $id, array $data): ?SkillInterface;

    public function delete(int $id): bool;
}
