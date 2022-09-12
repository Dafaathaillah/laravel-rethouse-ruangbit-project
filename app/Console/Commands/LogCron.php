<?php

namespace App\Console\Commands;

use App\Models\Property;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
<<<<<<< HEAD
use phpDocumentor\Reflection\Types\Null_;
=======
>>>>>>> origin/auth

class LogCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
<<<<<<< HEAD
    protected $signature = 'update:end_ads';
=======
    protected $signature = 'delete:end_ads';
>>>>>>> origin/auth

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
<<<<<<< HEAD
            $property->update(['start_ads' => null, 'end_ads' => null]);
=======
            $property->delete();
>>>>>>> origin/auth
        });

        /*
           Write your database logic we bellow:
           Item::create(['name'=>'hello new']);
        */
    }
}
