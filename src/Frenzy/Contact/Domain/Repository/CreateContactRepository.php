<?php

declare(strict_types=1);

namespace ArtishUp\Frenzy\Contact\Domain\Repository;

use ArtishUp\Frenzy\Contact\Domain\Entity\Contact;

interface CreateContactRepository
{
    public function create(Contact $contact);
}
