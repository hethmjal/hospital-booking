<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'type' => ['required'],
            'phone' => ['required', 'max:255'],



            'identification_number' => ['required','unique:users,identification_number' ,'max:255'],



            'password' => ['required', Rules\Password::defaults()],
        ],
    [
      'name.required'=>'الرجاء ادخال الاسم',
      'email.required'=>'الرجاء ادخال البريد الالكتروني',
      'type.required'=>'الرجاء ادخال نوع المستخدم',
      'phone.required'=>'الرجاء ادخال رقم الهاتف',
      'identification_number.required'=>'الرجاء ادخال رقم الهوية',


      'identification_number.unique'=>'تم تسجيل حساب بنفس رقم الهوية مسبقا!',



      'password.required'=>'الرجاء ادخال كلمة مرور',

    ]);

    $key = substr($request->identification_number, 0, strpos($request->identification_number, "0$"));

  //  return $key;
    if ($key != "$0975$9") {
        return redirect()->back();
    }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'phone' => $request->phone,
            'identification_number' => $request->identification_number,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);
        if ($user->type == 'director') {
            return redirect()->route('createvisitors');
        } else {
            return redirect()->route('viewvisitors');
        }
      //  return redirect(RouteServiceProvider::HOME);
    }
}
