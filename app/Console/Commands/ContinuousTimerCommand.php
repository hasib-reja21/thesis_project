<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ContinuousTimerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {   
        $minutes = 3; // Initial timer set to 3 minutes
        $seconds = $minutes * 60;

        while ($seconds > 0) {
            $this->line('Time Left: ' . gmdate('i:s', $seconds)); // Output time to console

            sleep(1); // Pause for 1 second
            $seconds--;
        // return Command::SUCCESS;
    }
}
}