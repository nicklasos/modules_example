<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    include __DIR__ . '/api_v1.php';
});

