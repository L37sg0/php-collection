<?php

namespace L37sg0\Rockstar\Database\Factories;

use App\Models\Globals;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use L37sg0\Rockstar\Models\TourDate as Model;

class TourDateFactory extends Factory
{
    protected $model = Model::class;

    /**
     * @inheritDoc
     */
    public function definition()
    {
        return [
            Model::FIELD_DATE => Carbon::today()->addDays(rand(10,100))->format(Globals::DATE_FORMAT_YMD),
            Model::FIELD_PLACE => $this->faker->city . '/' . $this->faker->country
        ];
    }
}
