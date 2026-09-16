<?php

namespace App\Modules\Base\Database\Factories;

use App\Modules\Base\Models\Group as Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Model::class;

    /**
     * @inheritDoc
     */
    public function definition()
    {
        $name = ucfirst($this->faker->word);

        return [
            Model::FIELD_NAME           => $name,
            Model::FIELD_DESCRIPTION    => $this->faker->text(50)
        ];
    }
}
