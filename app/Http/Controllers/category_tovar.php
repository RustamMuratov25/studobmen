<?php
namespace App\Http\Controllers;

use App\Models\advertisements_model;

class category_tovar extends Controller
{
   public function posuda2(){
    $ads = advertisements_model::where('category_id', 1)->with('images')->get();
    return view('static2.categories.posuda2', compact('ads'));
}

public function kantselarya2(){
    $ads = advertisements_model::where('category_id', 2)->with('images')->get();
    return view('static2.categories.kantselarya2', compact('ads'));
}


public function tekstyle2(){
    $ads = advertisements_model::where('category_id', 3)->with('images')->get();
    return view('static2.categories.tekstyle2', compact('ads'));
}

public function peryferya2(){
    $ads = advertisements_model::where('category_id', 4)->with('images')->get();
    return view('static2.categories.peryferya2', compact('ads'));
}

public function gadjet2(){
    $ads = advertisements_model::where('category_id', 5)->with('images')->get();
    return view('static2.categories.gadjet2', compact('ads'));
}

public function merch2(){
    $ads = advertisements_model::where('category_id', 6)->with('images')->get();
    return view('static2.categories.merch2', compact('ads'));
}

public function sport2(){
    $ads = advertisements_model::where('category_id', 7)->with('images')->get();
    return view('static2.categories.sport2', compact('ads'));
}

public function nastolky2(){
    $ads = advertisements_model::where('category_id', 8)->with('images')->get();
    return view('static2.categories.nastolky2', compact('ads'));
}

public function gameing2(){
    $ads = advertisements_model::where('category_id', 9)->with('images')->get();
    return view('static2.categories.gameing2', compact('ads'));
}

public function tvorchestvo2(){
    $ads = advertisements_model::where('category_id', 10)->with('images')->get();
    return view('static2.categories.tvorchestvo2', compact('ads'));
}

public function odejda2(){
    $ads = advertisements_model::where('category_id', 11)->with('images')->get();
    return view('static2.categories.odejda2', compact('ads'));
}

public function uchebniky2(){
    $ads = advertisements_model::where('category_id', 12)->with('images')->get();
    return view('static2.categories.uchebniky2', compact('ads'));
}

public function komplect2(){
    $ads = advertisements_model::where('category_id', 13)->with('images')->get();
    return view('static2.categories.komplect2', compact('ads'));
}

public function kursovye2(){
    $ads = advertisements_model::where('category_id', 14)->with('images')->get();
    return view('static2.categories.kursovye2', compact('ads'));
}

public function technika2(){
    $ads = advertisements_model::where('category_id', 15)->with('images')->get();
    return view('static2.categories.technika2', compact('ads'));
}

public function posuda(){
    $ads = advertisements_model::where('category_id', 1)->with('images')->get();
    return view('static1.categories.posuda', compact('ads'));
}

public function kantselarya(){
    $ads = advertisements_model::where('category_id', 2)->with('images')->get();
    return view('static1.categories.kantselarya', compact('ads'));
}


public function tekstyle(){
    $ads = advertisements_model::where('category_id', 3)->with('images')->get();
    return view('static1.categories.tekstyle', compact('ads'));
}

public function peryferya(){
    $ads = advertisements_model::where('category_id', 4)->with('images')->get();
    return view('static1.categories.peryferya', compact('ads'));
}

public function gadjet(){
    $ads = advertisements_model::where('category_id', 5)->with('images')->get();
    return view('static1.categories.gadjet', compact('ads'));
}

public function merch(){
    $ads = advertisements_model::where('category_id', 6)->with('images')->get();
    return view('static1.categories.merch', compact('ads'));
}

public function sport(){
    $ads = advertisements_model::where('category_id', 7)->with('images')->get();
    return view('static1.categories.sport', compact('ads'));
}

public function nastolky(){
    $ads = advertisements_model::where('category_id', 8)->with('images')->get();
    return view('static1.categories.nastolky', compact('ads'));
}

public function gameing(){
    $ads = advertisements_model::where('category_id', 9)->with('images')->get();
    return view('static1.categories.gameing', compact('ads'));
}

public function tvorchestvo(){
    $ads = advertisements_model::where('category_id', 10)->with('images')->get();
    return view('static1.categories.tvorchestvo', compact('ads'));
}

public function odejda(){
    $ads = advertisements_model::where('category_id', 11)->with('images')->get();
    return view('static1.categories.odejda', compact('ads'));
}

public function uchebniky(){
    $ads = advertisements_model::where('category_id', 12)->with('images')->get();
    return view('static1.categories.uchebniky', compact('ads'));
}

public function komplect(){
    $ads = advertisements_model::where('category_id', 13)->with('images')->get();
    return view('static1.categories.komplect', compact('ads'));
}

public function kursovye(){
    $ads = advertisements_model::where('category_id', 14)->with('images')->get();
    return view('static1.categories.kursovye', compact('ads'));
}

public function technika(){
    $ads = advertisements_model::where('category_id', 15)->with('images')->get();
    return view('static1.categories.technika', compact('ads'));
}
}
