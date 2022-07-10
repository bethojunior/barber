<?php

namespace App\Repositories\Schedule;

use App\Contracts\Repository\AbstractRepository;
use App\Models\Schedule\Schedule;

class ScheduleRepository extends AbstractRepository
{

    public function __construct()
    {
        $this->setModel(Schedule::class);
    }


}
