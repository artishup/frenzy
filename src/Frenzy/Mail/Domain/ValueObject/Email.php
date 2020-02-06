<?php

namespace Frenzy\Mail\Domain\ValueObject;

class Email
{
    private string $value;

    private function __construct(string $value)
    {
        $this->setValue($value);
    }

    public static function create(string $value): self
    {
        return new self($value);
    }

    private function setValue(string $value): void
    {
        //Validate email pattern
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value();
    }
}