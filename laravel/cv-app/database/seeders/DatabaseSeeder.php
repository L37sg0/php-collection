<?php

namespace Database\Seeders;

use App\Models\Applicant;
use App\Models\Education;
use App\Models\Skill;
use App\Models\University;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Applicant::factory(100)->create();
        University::factory(100)->create();
        Skill::factory(100)->create();

        foreach (Applicant::all() as $applicant) {
            $minUnvId = University::first()->getAttribute(University::FIELD_ID);
            $maxUnvId = University::orderBy(University::FIELD_ID, 'DESC')->first()->getAttribute(University::FIELD_ID);
            Education::factory(rand(1,3))->create([
                Education::FIELD_APPLICANT_ID => $applicant->getAttribute(Applicant::FIELD_ID),
                Education::FIELD_UNV_ID => rand($minUnvId, $maxUnvId)
            ]);


            $minSkillId = Skill::first()->getAttribute(Skill::FIELD_ID);
            $maxSkillId = Skill::orderBy(Skill::FIELD_ID, 'DESC')->first()->getAttribute(Skill::FIELD_ID);
            for ($i = 0; $i < 5; $i++) {
                $applicant->skills()->attach(rand($minSkillId, $maxSkillId));
            }
        }

    }
}
