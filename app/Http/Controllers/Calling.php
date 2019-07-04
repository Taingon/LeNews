<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calling extends Controller
{
    public function callName($SivSloy)
    {
        return "Leangsiv In Calling controller $SivSloy";
    }
}
