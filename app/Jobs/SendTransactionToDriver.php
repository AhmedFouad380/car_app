<?php

namespace App\Jobs;

use App\Models\Driver;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendTransactionToDriver implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $data;
    protected $driver;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data, $driver)
    {
        $this->data = $data;
        $this->driver=$driver;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $driver = Driver::find($this->driver);
        $fcmRegIds = array();
        array_push($fcmRegIds, $driver->fcm_token);
        $request = $this->data;
        $request->type = 1;
        $request->title = 'طلب جديد  ';

        sendNotification($request,$fcmRegIds,'ios');
    }
}
