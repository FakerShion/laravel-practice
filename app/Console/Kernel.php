<?php

namespace IntelliHR\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * @var array
     */
    protected $commands = [
    ];

    protected function schedule(Schedule $schedule)
    {
    }
}
