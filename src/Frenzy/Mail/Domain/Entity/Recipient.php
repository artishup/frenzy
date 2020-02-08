<?php

namespace ArtishUp\Frenzy\Mail\Domain\Entity;

use ArtishUp\Shared\Domain\Entity\Entity;
use ArtishUp\Frenzy\Mail\Domain\ValueObject\Name;
use ArtishUp\Frenzy\Mail\Domain\ValueObject\Email;

final class Recipient extends Entity
{
    private Name $name;
    private Email $email;

    private function __construct(Name $name, Email $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public static function create(Name $name, Email $email): self
    {
        return new self($name, $email);
    }

    public function name(): Name
    {
        return $this->name;
    }

    public function email(): Email
    {
        return $this->email;
    }

    public function toArray(): array
    {
        return [
            'name'  => $this->name()->value(),
            'email' => $this->email()->value()
        ];
    }
}
