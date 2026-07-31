<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\advertisements_model; //Подключаем модель
use Illuminate\Support\Facades\Auth;

class create_advertisements extends Controller
{
    public function store(Request $request)
    {
        //Проверяем чтобы в цене были цифры
        $request->validate([
            'price' => 'required|numeric',
        ]);

        //Создаем запись в таблице advertisements
        $ad =advertisements_model::create([
            'user_id' => Auth::id(), //ID юзера (если нет авторизации, ставим 2)
            'category_id' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'status' => 'active',
            'address' => $request->address,
            'number' => $request->number,
        ]);

        //Проверяем передал ли пользователь файлы в images
        if ($request->hasFile('images')) {
    foreach ($request->file('images') as $index => $file) {

        $fileName = time() . '_' . $index . '.' . $file->getClientOriginalExtension();

        $file->move(public_path('ads'), $fileName);

        \App\Models\advertisements_images_model::create([
            'advertisements_id' => $ad->advertisements_id,
            'category_id'       => $ad->category_id,
            'image_url'         => 'ads/' . $fileName,
            'is_main'           => ($index === 0),
        ]);
    }
}

        $referer = $request->header('referer');

        if (($referer && (str_contains($referer, 'static2') || str_contains($referer, 'v2'))) || $request->input('theme') === 'dark') {
            return redirect()->route('home.v2');
        }
        return redirect()->route('home');
    }
}
