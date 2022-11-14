<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessQRCode implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $shortLink;
    
    /**
     * Create a new job instance.
     *
     * @return void
     */
    
    public function __construct(\App\ShortLink $shortLink)
    {
        //
        $this->shortLink = $shortLink;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        \Artisan::call('QRCode:Create', [
            'dataUrl' => $this->shortLink->short_link,
            'fileName'=> $this->shortLink->id.'_'.$this->shortLink->vendor,
        ]);
    
    }
}
