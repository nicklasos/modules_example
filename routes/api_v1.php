<?php

declare(strict_types=1);

use App\Modules\Student\Controllers\StudentsListController;
use App\Modules\Teachers\Controllers\TeachersListController;
use App\Modules\Teachers\Controllers\TeachersUpdateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Teachers module
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'teacher'], function () {

    Route::get('/', TeachersListController::class);
    Route::post('/', TeachersUpdateController::class);

});


/*
|--------------------------------------------------------------------------
| Student module
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'student'], function () {

    Route::get('/', StudentsListController::class);

});
