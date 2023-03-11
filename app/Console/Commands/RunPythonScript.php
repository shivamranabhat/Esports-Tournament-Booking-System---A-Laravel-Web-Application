<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


class RunPythonScript extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run-python-script';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Execute the Python script';


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        exec('python ' . base_path('python/visualization.py'));
        $this->info('Python script executed successfully.');
    }
}
