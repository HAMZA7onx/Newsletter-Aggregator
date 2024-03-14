<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\AdminSide\Rsslist;

class NewRssAdded extends Mailable
{
    use Queueable, SerializesModels;

    public $rssLink;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Rsslist $rssLink)
    {
        $this->rssLink = $rssLink;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New RSS Feed Added')
            ->view('emails.new_rss_added');
    }
}
