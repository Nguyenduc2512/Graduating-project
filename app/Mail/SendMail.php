<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $promo;
    public function __construct($promo)
    {
        $this->promo = $promo;
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
        return $this->view('admin.discount.notice')
                    ->from($address, $name)
                    ->bcc($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject)
                    ->with(['namePromo' => $this->promo->code,
                            'nameDown' => $this->promo->down,
                            'nameStart' => $this->promo->start_time,
                            'nameEnd' => $this->promo->end_time,]);
    
    }
}
