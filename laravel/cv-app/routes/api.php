<?php

use App\Http\Controllers\Api\ApplicantController;
use App\Http\Controllers\Api\EducationController;
use App\Http\Controllers\Api\SkillController;
use App\Http\Controllers\Api\UniversityController;
use Illuminate\Support\Facades\Route;

Route::resource('applicants', ApplicantController::class);
Route::resource('educations', EducationController::class);
Route::resource('skills', SkillController::class);
Route::resource('universities', UniversityController::class);
