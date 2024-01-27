<?php

declare(strict_types=1);

namespace App\Modules\Teachers\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Teachers\Exceptions\TeacherNotFoundException;
use App\Modules\Teachers\Queries\ListTeachersQuery;
use App\Modules\Teachers\Resources\TeacherResource;
use App\Modules\Teachers\Services\Feature1\TeacherBusinessLogic;

class TeachersListController extends Controller
{
    public function __construct(
        private readonly TeacherBusinessLogic $businessLogic,
        private readonly ListTeachersQuery    $query,
    )
    {
    }

    public function __invoke()
    {
        if ($this->businessLogic->doSomeStuff()) {
            return TeacherResource::collection($this->query->list());
        }

        throw new TeacherNotFoundException();
    }
}
