<?php

declare(strict_types=1);

namespace App\Modules\Teachers\Queries;

use App\Models\Teacher;
use Illuminate\Support\Collection;

class ListTeachersQuery
{
    /**
     * @return Collection<Teacher>
     */
    public function list(): Collection
    {
        return Teacher::all();
    }
}
