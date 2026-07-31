<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; //для авторизации пользователя
use Illuminate\Http\Request; //данные из формы
use Illuminate\Support\Facades\DB; //базы данных
use Illuminate\Support\Facades\Hash; //хеширование паролей
use Exception;

class proverka_registr extends Controller
{
    //Берем все данные, которые пользователь ввел в форме
    public function store(Request $request)
    {
        try {
            //Удаляем пробелы и берем данные из формы
            $username = trim($request->input('username'));
            $password = trim($request->input('password'));

            //Ищем в таблице users первую запись, где колонка username совпадает с данными из формы
            $user = DB::table('users')->where('username', $username)->first();

            //Проверяем, существует ли пользователь и совпадают ли пароли
            if ($user && Hash::check($password, $user->password_hash)) {
                Auth::loginUsingId($user->user_id); //авторизация пользователя
                $request->session()->regenerate(); //пересоздание сессии
                return redirect()->route('home');
            }
            else{return redirect()->route('error');}

        } catch (Exception $e) {
            return redirect()->route('error');
        }
    }
}
