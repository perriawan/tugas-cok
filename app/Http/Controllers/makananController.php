<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\makanan;

class makananController extends Controller
{
    public function create()
    {
        return view("penjualan.add");
    }

    public function store(Request $riquest) 
    {
        $data = makanan::create($riquest->all());
        if($data){
            return redirect('/');
        }
    }
}
