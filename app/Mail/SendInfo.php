<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendInfo extends Mailable
{
    use Queueable, SerializesModels;

    public $file_path_pdf;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($maildata)
    {
        //
        $this->file_path_pdf=$maildata['file_path_pdf'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->subject('Certificate of participation')->markdown('emails.sendinfo')->attach(public_path($this->file_path_pdf));
    }
}
