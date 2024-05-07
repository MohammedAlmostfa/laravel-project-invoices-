<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Invoicsmail extends Mailable
{
    use Queueable, SerializesModels;

    public $invoice_id;

    /**
     * Create a new message instance.
     *
     * @param  mixed  $invoice_id
     * @return void
     */
    public function __construct($invoice_id)
    {
        $this->invoice_id = $invoice_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
   public function build()
{
    $url = 'http://127.0.0.1:8000/invoicesdetails/'.$this->invoice_id;
    return $this->subject('إضافة فاتورة جديدة')
                ->view('invoice33', ['invoice_id' => $this->invoice_id]) // تأكد من أن 'emails.invoice' هو مسار العرض الفعلي لقالب HTML الخاص بك
                ->with([
                    'url' => $url,
                    'thankyou_note' => 'شكرا لاستخدامك مورا سوفت لإدارة الفواتير'
                ]);
}

                    
    
}
