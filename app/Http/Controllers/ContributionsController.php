<?php

namespace App\Http\Controllers;

use App\Contribution;
use Illuminate\Http\Request;

class ContributionsController extends Controller
{
    public function store()
    {
        Contribution::create([
            'contribution' =>request('contribution'),
        ]);
    }
}
