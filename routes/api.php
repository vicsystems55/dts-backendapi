<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ApprovalStageController;
use App\Http\Controllers\VisitorProfileController;
use App\Http\Controllers\SubmissionStatusController;
use App\Http\Controllers\VisitorsSubmissionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('visitor-submissions', VisitorsSubmissionController::class);

Route::resource('submission-statuses', SubmissionStatusController::class);

Route::resource('approval-stagess', ApprovalStageController::class);

Route::resource('vistor-profiles', VisitorProfileController::class);

Route::resource('departments', DepartmentController::class);


//auth

Route::post('register', [ApiAuthController::class, 'register']);

Route::post('login', [ApiAuthController::class, 'login']);





