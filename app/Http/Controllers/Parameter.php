<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
class Parameter extends Controller
{

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('vparameter');


    }
}
