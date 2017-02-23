<?php

namespace Spatie\ServerMonitor\Events;

use Spatie\ServerMonitor\Models\Check;
use Illuminate\Contracts\Queue\ShouldQueue;

class CheckWarning implements ShouldQueue
{
    /** @var \Spatie\ServerMonitor\Check */
    public $check;

    public function __construct(Check $check)
    {
        $this->check = $check;
    }
}
