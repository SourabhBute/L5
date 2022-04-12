<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Facades;
use Illuminate\Support\Facades\DB;


class Down extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'down:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'down cron command';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //DB::table('tests')->delete();

        echo "operation done";
    }
}
