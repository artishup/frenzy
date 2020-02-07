<?php

namespace Frenzy\Core\Presentation\Http\Controllers;

use Shared\Presentation\Http\Controllers\Controller;

class AliveController extends Controller
{

    public function alive()
    {
        return response('Megatron! ...Stupid insects tried to kill me!', 200);
    }
}
