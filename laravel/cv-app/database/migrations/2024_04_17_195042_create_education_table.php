<?php

use App\Models\Applicant;
use App\Models\University;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Education as Model;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->foreignId(Model::FIELD_APPLICANT_ID)
                ->index()
                ->constrained(Applicant::TABLE_NAME)
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId(Model::FIELD_UNV_ID)
                ->index()
                ->constrained(University::TABLE_NAME, University::FIELD_ID)
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamp(Model::FIELD_DATE_FROM)->nullable();
            $table->timestamp(Model::FIELD_DATE_TO)->nullable();
            $table->tinyInteger(Model::FIELD_DEGREE);
            $table->string(Model::FIELD_SPECIALTY, 100);
            $table->float(Model::FIELD_ACCREDITATION_ASSESSMENT);
            $table->timestamps();
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
