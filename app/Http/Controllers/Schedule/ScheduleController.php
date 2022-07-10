<?php

namespace App\Http\Controllers\Schedule;

use App\Http\Controllers\Controller;
use App\Http\Requests\Schedule\CreateScheduleRequest;
use App\Http\Requests\Schedule\IsAvailableScheduleRequest;
use App\Services\Schedule\ScheduleService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{

    protected $service;

    /**
     * @param ScheduleService $service
     */
    public function __construct(ScheduleService $service)
    {
        $this->service = $service;
    }

    public function create(CreateScheduleRequest $request)
    {
        $create = $this->service
            ->create($request->all());

        return $create;
    }

    /**
     * @param IsAvailableScheduleRequest $request
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function is_available(IsAvailableScheduleRequest $request){
        $teste = '2022-07-10T16:59';
        $date = Carbon::parse($request->input('date'))->format('d/m/y H:m');

        return $this->service
            ->verifyIfIsAvailable($request->date);
    }

}
