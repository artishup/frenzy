<?php

namespace ArtishUp\Shared\Presentation\Http\Middleware;

use Closure;
use Aws\Sns\Message;
use Illuminate\Http\Request;
use Aws\Sns\MessageValidator;
use Aws\Sns\Exception\InvalidSnsMessageException;
use Illuminate\Support\Facades\Log;

class AwsSnsMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $message = Message::fromRawPostData();

        $validator = new MessageValidator();

        try {
            $validator->validate($message);
        } catch (InvalidSnsMessageException $e) {
            return response('SNS Message Validation Error: ' . $e->getMessage(), 404);
        }

        if ($message['Type'] === 'SubscriptionConfirmation') {
            file_get_contents($message['SubscribeURL']);
            return response('Subscription Confirmed', 200);
        } elseif ($message['Type'] === 'Notification') {
            $request->request->add([
                'subject' => $message['Subject'],
                'message' => json_decode($message['Message'], true),
            ]);
        }

        return $next($request);
    }
}
