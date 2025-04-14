<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{

    public function index()
    {
        return view('homepage');
    }

    public function config()
    {
        $data = [
            'logo' => config('itstudio.logo', ''),
            'copyright' => config('itstudio.copyright', ''),
            'timeout' => config('itstudio.copyright', 3000),
            'title' => config('itstudio.title', 'Fresh Laravel'),
            'company' => config('itstudio.company', 'ItStudio.at'),
        ];

        return response()->json($data, 200);
    }
}
