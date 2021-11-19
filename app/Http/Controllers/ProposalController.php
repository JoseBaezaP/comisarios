<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function __invoke($slug)
    {
        return view('video')->with(compact('slug'));
    }
}