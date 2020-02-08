<?php

namespace ArtishUp\Shared\Presentation\Http\Controllers;

class AliveController extends Controller
{

    public function alive()
    {
        return response('Megatron! ...Stupid insects tried to kill me!', 200);
    }
}
