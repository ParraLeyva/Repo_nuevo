<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class customerController extends Controller
{
    public function index(){
        $customers = customer::orderBy('Nombre','desc') -> paginate(7);
        return view('index',compact('customers'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $input = $request -> all();
        customer::create($input);
        return redirect() -> route('customers.index') -> with('Confirmacion', 'Cliente agregado');
    }

    public function show($id){
        $customer =customer::find($id);
        return view('show', ['customer'=>$customer]);
    }
 

    public function edit(customer $customer){
        return view('edit', compact('customer'));
    }

    public function update(Request $request,$id){
        $customer = customer::find($id);
        $input = $request -> all();
        $customer->update($input);
        return redirect() -> route('customers.index') -> with('Confirmacion', 'Registro actualizado');
    }

    public function destroy(customer $customer){
        $customer -> delete();
        return redirect() -> route('customers.index') -> with('Confirmacion','Registro eliminado');
    }
}
