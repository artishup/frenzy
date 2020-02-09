<?php

declare(strict_types=1);

namespace ArtishUp\Frenzy\Contact\Domain\Repository;

use ArtishUp\Shared\Domain\ValueObject\Uuid;
use ArtishUp\Frenzy\Contact\Domain\Entity\Contact;

interface FindContactRepository
{
    public function find(Uuid $uuid): ?Contact;
}
