<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index(Request $request){
        $products = Products::all();
    }
    
    public function show(Request $request){
          
        
    }

    public function delete(Request $request){
          
        
    }

    public function store(Request $request){
          
        
    }

    public function update(Request $request){
          
        
    }


}
