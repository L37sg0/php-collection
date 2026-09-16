<?php

namespace App\Http\Resources\Applicant;

use App\Http\Resources\Education\EducationResource;
use App\Http\Resources\Education\EducationResourceCollection;
use App\Models\ApplicantInterface;
use App\Models\Enums\Degree;
use App\Models\Enums\Gender;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApplicantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = parent::toArray($request);
        $data['gender_name'] = Gender::from($data['gender'])->name;
        /** @var ApplicantInterface $resource */
        $resource = $this->resource;
        $data['educations'] = EducationResource::collection($resource->getEducations());
        return $data;
    }
}
