<?php

namespace App\Http\Controllers;

use App\Models\advertisements_model; // Подключаем вашу модель
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class mynotices extends Controller
{
    public function myNotices()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Загружаем объявления текущего пользователя вместе с их картинками
        $ads = advertisements_model::where('user_id', Auth::id())
            ->with('images')
            ->get();

        return view('static1.my_notices', compact('ads'));
    }
}
