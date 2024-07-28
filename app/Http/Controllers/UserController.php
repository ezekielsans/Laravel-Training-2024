<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    /**
     * Display the user's profile.
     *
     * @return string
     */
    public function profile()
    {
        $name = (new Profile)->getData()['name'];
        $address = Profile::address;
        $email = Profile::email;

        return "
            <strong>Name: </strong> $name
            <br>
            <strong>Address: </strong> $address
            <br>
            <strong>Email: </strong> $email
        ";
    }

    /**
     * Display the user's work experience.
     *
     * @return string
     */
    public function workExperience()
    {
        // env('DB_CONNECTION');
        config('database.default');

        return "
            <strong>Company: </strong> Inventive Media
            <br>
            <strong>Position: </strong> Trainer
        ";
    }

    /**
     * Display register page.
     *
     * @return view
     */
    public function register()
    {
        return view('register');
    }

    /**
     * Store a new user.
     *
     */
    public function store(RegistrationRequest $request)
    {
        $formData = $request->validated();

        $user = new User();
        $user->name = $formData['name'];
        $user->email = $formData['email'];
        $user->password = $formData['password'];
        $user->save();

        return redirect()->route('user.login');
    }

    /**
     * Display login page.
     *
     * @return view
     */
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $formData = $request->validate([
            'email' => ['required', 'string'],
            'password' => ['required', 'string']
        ]);

        $authenticate = Auth::attempt($formData);

        if ($authenticate) {
            $user = User::whereEmail($formData['email'])->first();

            Auth::login($user);

            return redirect()->route('admin.users.management');
        } else {
            return back()->with('error', 'Invalid Credentials');
        }
    }
}
