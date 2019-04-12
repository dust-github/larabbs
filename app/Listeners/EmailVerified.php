<?php

namespace App\Listeners;

use Illuminate\Auth\Events\verified;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailVerified
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  verified  $event
     * @return void
     */
    public function handle(verified $event)
    {
        session()->flash('success', '邮箱验证成功 ^_^');
    }
}
