<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index()
    {
        $pageTitle = 'Profile Page';

        return view('profile', ['pageTitle' => $pageTitle]);
    }
}
