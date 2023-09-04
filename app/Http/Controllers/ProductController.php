<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function show($id){
        $data = product::find($id);

        if(!$data){
            abort(404);
        }

        return view('detail', ['data'=>$data]);

    }
}
