<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class usersController extends Controller
{
    public function index(){
        $users = user::orderBy('name','desc') -> paginate(7);
        return view('indexusers',compact('users'));
    }

    public function create(){
        return view('createusers');
    }

    public function store(Request $request){
        $input = $request -> all();
        user::create($input);
        return redirect() -> route('users.index') -> with('Confirmacion', 'Usuario agregado');
    }

    public function show($id){
        $user = user::find($id);
        return view('showusers',['user'=>$user]);
    }

    public function edit(user $user){
        return view('editusers', compact('user'));
    }

    public function update(Request $request,$id){
        $user = user::find($id);
        $input = $request -> all();
        $user -> update($input);
        return redirect() -> route('users.index') -> with('Confirmacion', 'Registro actualizado');
    }

    public function destroy(user $user){
        $user -> delete();
        return redirect() -> route('users.index') -> with('Confirmacion','Registro eliminado');
    }
}
