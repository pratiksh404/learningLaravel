<?php

namespace App\Listeners;

use App\Mail\WelcomeNewUserMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class WelcomeNewCustomerListener implements ShouldQueue
{
    use InteractsWithQueue;
    public function handle($event)
    { 
		sleep(10);
        Mail::to($event->customer->email)->send(new WelcomeNewUserMail());
    }
}
