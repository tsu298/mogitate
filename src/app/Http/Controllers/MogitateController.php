<?php

namespace App\Http\Controllers;

use App\Http\Requests\MogitateRequest;
use App\Models\Mogitate;

class MogitateController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function list()
    {
        $products = Mogitate::all();
        return view('list', ['products' => $products]);
    }

    public function detail(MogitateRequest $request)
    {
        return view('detail');
    }
}
