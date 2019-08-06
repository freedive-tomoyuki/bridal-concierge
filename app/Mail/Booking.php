<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Booking extends Mailable
{
    use Queueable, SerializesModels;

    protected $application_info;
    protected $date_info;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($application_info, $date_info)
    {
        $this->application_info = $application_info;
        $this->date_info = $date_info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->text('emails.booking')
                    ->subject('予約メール')
                    ->with(['application' => $this->application_info, 'date' => $this->date_info]);
                ;
    }
}
