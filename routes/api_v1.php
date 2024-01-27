<?php

declare(strict_types=1);

use App\Modules\Teachers\Controllers\TeachersListController;
use App\Modules\Teachers\Controllers\TeachersUpdateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Teachers
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'teachers'], function () {

    Route::get('/', TeachersListController::class);
    Route::post('/', TeachersUpdateController::class);

});
