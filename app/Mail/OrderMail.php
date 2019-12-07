<?php
 
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $orderMail;
    public $user;
    public function __construct($orderMail)
    {
        $this->orderMail = $orderMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'authshoes12@gmail.com';
        $subject = 'Mã giảm giá';
        $name = 'AUTHSHOES';
        return $this->view('client.orderMail')
                    ->from($address, $name)
                    ->bcc($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject)
                    ->with(['nameOrder' => $this->orderMail->user->name,
                            'totalOrder' => $this->orderMail->total,
                            'codeOrder' => $this->orderMail->code_order,
                            'locationOrder' => $this->orderMail->location,]);
    
    }
}
