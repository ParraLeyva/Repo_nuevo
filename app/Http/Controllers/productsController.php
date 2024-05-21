<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class productsController extends Controller
{
    public function index(){
        $products = products::orderBy('Nombre','desc') -> paginate(7);
        return view('indexproducts',compact('products'));
    }

    public function create(){
        return view('createproducts');
    }

    public function store(Request $request){
        $input = $request -> all();
        products::create($input);
        return redirect() -> route('products.index') -> with('Confirmacion', 'Cliente agregado');
    }

       
    public function show($id){
        $products =products::find($id);
        return view('showproducts', ['products'=>$products]);
    }

    public function edit(products $product){
        return view('editproducts', compact('product'));
    }

    public function update(Request $request,$id){
        $product = products::find($id);
        $input = $request -> all();
        $product -> update($input);
        return redirect() -> route('products.index') -> with('Confirmacion', 'Registro actualizado');
    }

    public function destroy(products $product){
        $product -> delete();
        return redirect() -> route('products.index') -> with('Confirmacion','Registro eliminado');
    }
}
