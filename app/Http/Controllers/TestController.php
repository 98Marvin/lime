<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use Illuminate\Http\Request;

class TestController extends Controller
{
    function list () {
        return Entity::all();
    }
}
