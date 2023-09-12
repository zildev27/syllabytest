<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index(Request $request){
        return Products::all();
    }
    
    public function show($id){
        return Products::find($id);  

    }

    public function delete(Request $request){
        return Products::destroy($id);
    }

    public function store(Request $request){
        return Products::create($request->all());    
    }

    public function update(Request $request, $id){
        $products = Products::find($id);
        $products->update($request->all());
        return $products;   
        
    }


}
