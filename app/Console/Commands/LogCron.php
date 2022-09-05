<?php

namespace App\Console\Commands;

use App\Models\Property;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class LogCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:property';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'property ads has expired and already to delete the ads';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // return 0;
        // Log::info("Cron is working fine!");

        Property::where('end_ads', '<', Carbon::now())->each(function ($property) {
            $property->delete();
        });

        /*
           Write your database logic we bellow:
           Item::create(['name'=>'hello new']);
        */
    }
}
