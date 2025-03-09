<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Custom extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

     
    

    // protected $baseUrl;
    public $body;
    public $subject;
    public $settings;
    public function __construct($body, $subject, $settings)
    {
        $this->body = $body;
        $this->subject = $subject;
        $this->settings = $settings;

        // $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        // $host = $_SERVER['HTTP_HOST'];
        // $baseUrl = $requestScheme . '://' . $host;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject ??  "From Admin",
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'temp.custom',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }


    public function build()
    {
        
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $requestScheme . '://' . $host;
        
        return $this->view('view.custom')
            ->replyTo('ahmadhassanqaiser2305@gmail.com', 'Any Query?')
            ->with(['url'=>$baseUrl, 'body' => $this->body, 'settings' => $this->settings]); 
    }
}