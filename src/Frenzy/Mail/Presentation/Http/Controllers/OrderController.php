<?php

declare(strict_types=1);

namespace ArtishUp\Frenzy\Mail\Presentation\Http\Controllers;

use Illuminate\Http\Request;
use Aws\Sns\Message;
use Aws\Sns\MessageValidator;
use Aws\Sns\Exception\InvalidSnsMessageException;
use ArtishUp\Shared\Presentation\Http\Controllers\Controller;

class OrderController extends Controller
{

    public function order(Request $request)
    {
        $message = Message::fromRawPostData();

        $validator = new MessageValidator();

        try {
            $validator->validate($message);
        } catch (InvalidSnsMessageException $e) {
            // Pretend we're not here if the message is invalid.
            http_response_code(404);
            error_log('SNS Message Validation Error: ' . $e->getMessage());
            die();
        }

        if ($message['Type'] === 'SubscriptionConfirmation') {
            file_get_contents($message['SubscribeURL']);
        }
    }
}
