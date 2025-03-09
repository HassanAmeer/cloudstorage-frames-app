<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CreateOrder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

     
    

    // public $baseUrl;
    // protected $baseUrl;
    public $orderid;
    public $orderdesc;
    public $subject;
    public $settings;
    public function __construct($subject, $settings, $orderid, $orderdesc)
    {
        $this->orderid = $orderid;
        $this->orderdesc = $orderdesc;
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
            subject: $this->subject ??  "New Participents",
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'temp.createorder',
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
        
        return $this->view('view.createorder')
            ->replyTo('ahmadhassanqaiser2305@gmail.com', 'Any Query?')
            ->with(['url'=>$baseUrl, 'orderid' => $this->orderid, 'orderdesc'=>$this->orderdesc, 'settings' => $this->settings]); 
    }
}