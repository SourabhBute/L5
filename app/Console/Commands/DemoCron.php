<?php 

namespace App\Console\Commands;

use Illuminate\Console\Command;

Class DemoCron extends Commands {

    protected $signature ="demo:cron";

    protected $description ="demo cron command";

    public function __construct() {

    	parent:: __construct();
    }

    public function handle() {
        \Log::info("cron is working fine");
    }




}









