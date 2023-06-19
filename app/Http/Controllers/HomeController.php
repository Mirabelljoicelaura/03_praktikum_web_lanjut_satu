<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{

    function index()
    {
        $home = Home::all();
        return view('home', compact('home'));
    }
}
