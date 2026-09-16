<?php

use App\Models\Applicant;
use App\Models\Skill;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ApplicantSkill as Model;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->foreignId(Model::FIELD_APPLICANT_ID)
                ->index()
                ->constrained(Applicant::TABLE_NAME, Applicant::FIELD_ID)
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId(Model::FIELD_SKILL_ID)
                ->index()
                ->constrained(Skill::TABLE_NAME, Skill::FIELD_ID)
                ->onUpdate('cascade')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Model::TABLE_NAME);
    }
};
