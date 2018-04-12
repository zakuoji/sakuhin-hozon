<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newController extends Controller
{
    //new acction add
    public function new2()
    {
        return view('new.new2', [
            'title' => 'new2',
            'body' => 'Hello World!'
        ]);
    }
}
