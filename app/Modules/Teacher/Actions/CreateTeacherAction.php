<?php

declare(strict_types=1);

namespace App\Modules\Teachers\Actions;

use App\Models\Teacher;

class CreateTeacherAction
{
    public function create(string $name): Teacher
    {
        return Teacher::create([
            'name' => $name,
        ]);
    }
}
