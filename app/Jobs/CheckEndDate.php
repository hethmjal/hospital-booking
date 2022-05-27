<?php

namespace App\Jobs;

use Carbon\Carbon;
use App\Models\Visitor;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class CheckEndDate implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $visitors = Visitor::where('seconed_date','<',Carbon::now()->format('Y-m-d'))->get();

        foreach ($visitors as $visitor) {

            $date = Carbon::parse($visitor->seconed_date." ".$visitor->end_date);
            if( Carbon::now()->gt($date) ){
                $visitor->status = "finished";
                $visitor->save();
            }
        }
    }
}
