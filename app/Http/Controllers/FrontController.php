<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Models\Customer;

class FrontController extends Controller
{
    public function changeLang($lang)
    {
        Session::put('language', $lang);
        return redirect()->back();
    }

    public function index()
    {
        $data = \DB::table('customer')->order('id', 'desc')->get();
        dd($data);
        return view('customer.index');
    }
}
