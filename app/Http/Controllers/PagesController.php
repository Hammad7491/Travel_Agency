<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function search()
    {
        // Define the phone number you want to display on the search page
        $phone = '+1-833-387-2565';

        // Pass it to the view
        return view('search', compact('phone'));
    }


    public function aboutus()
    {
        return view('aboutus');
    }
}
