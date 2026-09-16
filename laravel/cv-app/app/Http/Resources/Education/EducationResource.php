<?php

namespace App\Http\Resources\Education;

use App\Models\EducationInterface;
use App\Models\Enums\Degree;
use App\Models\UniversityInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EducationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data =  parent::toArray($request);
        /** @var UniversityInterface $university */
        /** @var  EducationInterface $resource*/
        $resource = $this->resource;
        $university = $resource->getUniversity();
        $data['university'] = $university->getName();
        $data['degree_name'] = Degree::from($data['degree'])->name;
        return $data;
    }
}
