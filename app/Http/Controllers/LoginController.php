<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function signupForm() : View
    {
        return view('auth.signup');
    }
    
    public function signup(SignupRequest $request) : RedirectResponse
    {
        $generatedPhotoName = $request->file('photo')->store('avatarUser','public');

        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->birthday = $request->get('birthday');
        $user->photo = $generatedPhotoName;

        $user->save();

        Auth::login($user);//se loguea al iniciar sesion

        return redirect()->route('');
    }

    public function loginForm()
    {
        if(Auth::viaRemember()) {
            return 'Bienvenido de nuevo';
        } else if(Auth::check()) {
            return redirect()->route('');
        }else{
            //devuelve el formulario 
            return view('auth.login');
        }
    }

    public function login(Request $request) 
    {
        $credentials = $request->only('email','password');
        $rememberLogin = ($request->get('remember')) ? true : false;
        if(Auth::guard('web')->attempt($credentials)) {
            $request->ssesion()->regenerate();
            return redirect()->route('');
        } else {
            $error = 'No se a podido acceder';
            return view('auth.login',compact($error));
        }
    }

    public function logout(Request $request) : RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('index');
    }
}
