<?php

declare(strict_types=1);

namespace App\Modules\Teachers\Controllers;

use App\Http\Controllers\Controller;

class TeachersUpdateController extends Controller
{
    public function __invoke(): string
    {
        return 'Teacher updated';
    }
}
