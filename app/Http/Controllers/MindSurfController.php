<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MindSurfController extends Controller
{
    function index()
    {
        return view('pages.home');
    }
}
