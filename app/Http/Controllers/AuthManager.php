<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Session\Session\flush;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
   function login()
   {
    if(Auth::check())
    {
        return redirect(route('home'));
    }
    return view('login');
   } 
   function registration()
   {
    if(Auth::check())
    {
        return redirect(route('home'));
    }
    return view('registration');
   }
   function loginPost(Request $request)
   {
    $request->validate([
        'email'=>'required',
        'password'=>'required'

    ]);
    $creadientials=$request->only('email','password');
    if(Auth::attempt($creadientials))
    {
        return redirect()->intended(route('home'));
    }
    else
    {
        return redirect(route('login'))->with('error',"Login Name Or Password Not valid");
    }

   }
   
function registrationPost(Request $request)
{
    $request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required'

    ]);
    $data['name']=$request->name;
    $data['email']=$request->email;
    $data['role']=$request->role;
    $data['password']=Hash::make( $request->password);
    $user= User::create($data);
    if(!$user)
    {
        return redirect(route('registration'))->with('error',"Registration fail try again");
    }
    return redirect(route('login'))->with('success',"Registration success, Login to access the app");

}
function logout()
{
    Session::flush();
    Auth::logout();
    return redirect(route('login'));
}
public function index() {
    $users = User::paginate(10);

    return view('index',['users'=> $users]);
}
public function edit($id) {
    $model = User::findOrFail($id);

    return view('edit', ['user' => $model]);
}

public function update(Request $request, $id) {
    $model = User::findOrFail($id);
    $input = $request->all();

    $model->update($input);

    return redirect()->route('index')->with('success', 'User updated successfully!');
}

public function delete($id) {
    $model = User::findOrFail($id);
    $model->delete();

    return redirect()->back()->with('success', 'User deleted successfully!');
}

}
