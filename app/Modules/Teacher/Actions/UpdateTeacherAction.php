<?php

declare(strict_types=1);

namespace App\Modules\Teachers\Actions;

use App\Models\Teacher;

class UpdateTeacherAction
{
    public function update(Teacher $teacher, array $data): void
    {
        $teacher->update($data);
    }
}
