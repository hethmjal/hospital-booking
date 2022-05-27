<?php

namespace App\Jobs;

use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CheckVisitorsStatus implements ShouldQueue
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

        $visitors = Visitor::where('date',Carbon::now()->format('Y-m-d'))->where('seconed_date',Carbon::now()->format('Y-m-d'))->get();

        foreach ($visitors as $visitor) {

            $date = Carbon::parse($visitor->date." ".$visitor->end_date);
            if( Carbon::now()->gt($date) ){
                $visitor->status = "finished";
                $visitor->save();
            }
        }
    }
}
