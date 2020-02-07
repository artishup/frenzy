<?php

namespace Frenzy\Mail\Domain;

use Frenzy\Mail\Domain\ValueObject\Email;
use Frenzy\Mail\Domain\ValueObject\Subject;

class Mail
{
    private Subject $subject;
    private Email $sender;
    private Recipient $recipient;
    private string $body;

    private function __construct(
        Subject $subject,
        Email $sender,
        Recipient $recipient,
        string $body
    ) {
        $this->subject = $subject;
        $this->sender = $sender;
        $this->recipient = $recipient;
        $this->body = $body;
    }

    public static function create(
        Subject $subject,
        Email $sender,
        Recipient $recipient,
        string $body
    ): self {
        return new self($subject, $sender, $recipient, $body);
    }

    public function subject(): Subject
    {
        return $this->subject;
    }

    public function senderl(): Email
    {
        return $this->sender;
    }

    public function recipient(): Recipient
    {
        return $this->recipient;
    }

    public function body(): string
    {
        return $this->body;
    }
}
