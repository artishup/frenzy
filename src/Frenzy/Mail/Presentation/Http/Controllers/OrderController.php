<?php

declare(strict_types=1);

namespace ArtishUp\Frenzy\Mail\Presentation\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use ArtishUp\Shared\Presentation\Http\Controllers\Controller;

class OrderController extends Controller
{

    public function order(Request $request)
    {
        Log::debug('Message received', $request->get('message'));

        return response('Message received', 200);
    }
}
