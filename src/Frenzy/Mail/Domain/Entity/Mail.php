<?php

namespace ArtishUp\Frenzy\Mail\Domain\Entity;

use ArtishUp\Frenzy\Mail\Domain\ValueObject\Body;
use ArtishUp\Frenzy\Mail\Domain\ValueObject\Email;
use ArtishUp\Frenzy\Mail\Domain\ValueObject\Subject;
use ArtishUp\Shared\Domain\Aggregate\AggregateRoot;

final class Mail extends AggregateRoot
{
    private Subject $subject;
    private Email $sender;
    private Recipient $recipient;
    private Body $body;

    private function __construct(
        Subject $subject,
        Email $sender,
        Recipient $recipient,
        Body $body
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
        Body $body
    ): self {
        return new self($subject, $sender, $recipient, $body);
    }

    public function subject(): Subject
    {
        return $this->subject;
    }

    public function sender(): Email
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

    public function toArray(): array
    {
        return [];
    }
}
