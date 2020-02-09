<?php

namespace ArtishUp\Shared\Domain\ValueObject;

class Email extends StringValueObject
{

    public static function create(string $value): self
    {
        return new self($value);
    }
}
