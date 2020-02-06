<?php

namespace Prime\Presentation\Http\Controllers;

use Shared\Presentation\Http\Controllers\Controller;

class AliveController extends Controller
{

    public function alive()
    {
        return response('I am Optimus Prime, leader of the autobots.', 200);
    }
}
