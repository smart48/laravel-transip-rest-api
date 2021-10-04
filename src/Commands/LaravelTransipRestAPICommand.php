<?php

namespace Smart48\LaravelTransipRestAPI\Commands;

use Illuminate\Console\Command;

class LaravelTransipRestAPICommand extends Command
{
    public $signature = 'laravel-transip-rest-api';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
