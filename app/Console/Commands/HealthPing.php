<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HealthPing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:health-ping';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        \Log::info('Health ping executed at ' . now());
    }
}
