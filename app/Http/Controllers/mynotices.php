<?php

namespace App\Http\Controllers;

use App\Models\advertisements_model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class mynotices extends Controller
{
    public function myNotices()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $ads = advertisements_model::where('user_id', Auth::id())
            ->with('images')
            ->get();

        return view('static1.my_notices', compact('ads'));
    }
}
