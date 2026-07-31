<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\advertisements_model;
use Illuminate\Support\Facades\Auth;

class search extends Controller
{
    public function search(Request $request)
    {
        $query = trim($request->input('search'));

        $ads = advertisements_model::query()
            ->with('images')
            ->when($query, function ($repository) use ($query) {
                return $repository->where('title', 'like', "%{$query}%");
            })
            ->latest();

        if ($request->input('page') === 'glavnaya' || str_contains(url()->previous(), '/glavnaya')) {
            $ads = $ads
            ->get();
            return view('static1.glavnaya', compact('ads', 'query'));
        }

        if (str_contains(url()->previous(), '/my_notices')) {

    if (!Auth::check()) {
        return redirect()->route('login');
    }

    $query = $query ?? request()->input('query', '');

    $adsQuery = advertisements_model::where('user_id', Auth::id());

    if (!empty($query)) {
        $adsQuery->where('title', 'LIKE', '%' . $query . '%');
    }

    $ads = $adsQuery->get();

    return view('static1.my_notices', compact('ads', 'query'));
}

        if ($request->has('category_id')) {
            $id = $request->input('category_id');

            $categories = [
                1 => 'posuda', 2 => 'kantselarya', 3 => 'tekstyle', 4 => 'peryferya', 5 => 'gadjet',
                6 => 'merch', 7 => 'sport', 8 => 'nastolky', 9 => 'gameing', 10 => 'tvorchestvo',
                11 => 'odejda', 12 => 'uchebniky', 13 => 'komplect', 14 => 'kursovye', 15 => 'technika'
            ];

            if (isset($categories[$id])) {
                $slug = $categories[$id];
                $ads = $ads->where('category_id', $id)->get();
                return view("static1.categories.{$slug}", compact('ads', 'query'));
            }
        }

    }
}
