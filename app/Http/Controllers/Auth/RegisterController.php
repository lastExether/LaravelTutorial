<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index(){
      return view('auth.register');
      //En la linea de arriba lo que hacemos es pasarle la dirección donde está
      //la vista que queremos mostrar
      //auth es el directorio y register es la vista
    }
    public function store(Request $request){
      //dd($request->email, $request->name, $request->email, $request->password);
      //die dump, escribe lo que pongas en el paréntesis
      //VALIDATION
      $this->validate($request, [
        'name' => 'required|max:128',
        'username' => 'required|max:25',
        'email' => 'required|email|max:128',
        'password'=> 'required|confirmed'
      ]);

      User::create([
        'name' => $request->name,
        'username' => $request->username,
        'email' => $request->email,
        'password'=> Hash::make($request->password)
      ]);
    }
}
