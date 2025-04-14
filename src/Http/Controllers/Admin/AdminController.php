<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Composer\InstalledVersions;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin');
    }

    public function config()
    {

        $data = [
            'logo' => config('itstudio.logo', ''),
            'copyright' => config('itstudio.copyright', ''),
            'timeout' => config('itstudio.copyright', 3000),
            'title' => config('itstudio.title', 'Fresh Laravel'),
            'company' => config('itstudio.company', 'ItStudio.at'),
            'version' => InstalledVersions::getPrettyVersion('itstudioat/fresh-laravel'),
        ];

        return response()->json($data, 200);
    }
}
