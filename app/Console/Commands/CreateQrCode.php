<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateQrCode extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'QRCode:Create {dataUrl} {fileName}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Custom Qr Code Generate';

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
  
        $shortLink = explode('_',$this->argument('fileName'));
        
        if(count($shortLink ??[])>0){
            $this->info('Creating QR Code');
             $script = "../../qr_code_nodejs-Service/QRCodeScriptWhite.js"; 
        
           exec('node '.$script.' '.$this->argument('dataUrl').' '.$this->argument('fileName'), $output);

        $model = \App\ShortLink::find($shortLink[0]);
        $model->qr_code = $this->argument('fileName').'.png';
        $model->update();
        $this->info('Creating QR Code and Updated');
      }
    }
}
