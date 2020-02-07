<?php

namespace Frenzy\Mail\Domain;

use Frenzy\Mail\Domain\ValueObject\Email;

class Recipient
{
    private string $name;
    private Email $email;

    private function __construct(string $name, Email $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public static function create(string $name, Email $email): self
    {
        return new self($name, $email);
    }

    public function name(): string
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
            'name'  => $this->name(),
            'email' => $this->email()->value()
        ];
    }
}
