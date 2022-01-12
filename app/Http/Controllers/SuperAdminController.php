<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Color;
use App\Models\Size;

class SuperAdminController extends Controller
{
    public function index(){
        return "I am Super Admin";
    }

    public function colors(){
        return view('vendor.color');
    }

    public function sizes(){
        return view('vendor.size');
    }

    public function storeColor(Request $request){
    $color = Color::create($request->all());
    Session::flash('success', 'Color Inserted Successfully');
        return back();
    }

    public function storeSize(Request $request){
        $size = Size::create($request->all());
        Session::flash('success', 'Sizes Inserted Successfully');
        return back();
    }
}
