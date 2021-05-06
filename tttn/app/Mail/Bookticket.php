<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Bookticket extends Mailable
{
    use Queueable, SerializesModels;
    protected $veTemp;
    protected $ve;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($veTemp,$ve)
    {
        $this->veTemp = $veTemp;
        $this->ve = $ve;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Thanks for using booking system')->markdown('KH.bookmail',['veTemp'=>$this->veTemp,'ve'=>$this->ve]);
    }
}
