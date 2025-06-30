<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Direction;

class ProfileController extends Controller
{
    public function show()
    {
      
        $directions = Direction::all();

        return view('profile', compact('directions'));
    }
}
