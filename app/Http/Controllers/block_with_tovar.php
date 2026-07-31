<?php
namespace App\Http\Controllers;
use App\Models\advertisements_model;

class block_with_tovar extends Controller
{
    public function index()
    {
        $ads = advertisements_model::with('images')->latest()->get();
        return view('static1.glavnaya', ['ads' => $ads, 'query' => null]);
    }

    public function indexDark()
    {
        $ads = advertisements_model::with('images')->latest()->get();
        return view('static2.home_page', ['ads' => $ads, 'query' => null]);
    }
}
