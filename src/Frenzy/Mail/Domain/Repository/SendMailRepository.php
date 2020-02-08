<?php

declare(strict_types=1);

namespace ArtishUp\Frenzy\Mail\Domain\Repository;

use ArtishUp\Frenzy\Mail\Domain\Entity\Mail;

interface SendMailRepository
{
    public function send(Mail $mail);
}
