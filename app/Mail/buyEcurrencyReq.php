<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class buyEcurrencyReq extends Mailable
{
    use Queueable, SerializesModels;

    public $latestTransaction;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($latestTransaction)
    {
        $this->latestTransaction = $latestTransaction;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.buyEcurrencyReq',['transaction'=>$this->latestTransaction]);
    }
}
