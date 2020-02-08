<?php

namespace ArtishUp\Frenzy\Mail\Domain\ValueObject;

use ArtishUp\Shared\Domain\ValueObject\StringValueObject;

class Body extends StringValueObject
{

    public static function create(string $value): self
    {
        return new self($value);
    }
}
