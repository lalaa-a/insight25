<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register', [
            'status' => session('status'),
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:' . User::class,

            'describes' => 'required|string',
            'institute' => 'required|string|max:255',
            'isAiesecer' => 'nullable|boolean',
            'expectations' => 'required|string|max:255',
            'interest' => 'required|integer|min:0|max:5',
            'interestedField' => 'required|string|max:255',
            'jobPreference' => 'nullable|string|max:255',
            'agreePrivacyPolicy' => 'required|boolean|accepted',
            'whatsapp_number' => 'required|string|max:255',
            'cv' => 'nullable|file|mimes:pdf|max:10240',
            'coordinator' => 'nullable|string|max:255',
//            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

//        dd($request->all());

        $cvPath = null;
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cvs');
        }

//        dd($cvPath);

        $user = DB::transaction(function () use ($request, $cvPath) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                // 'password' => Hash::make($request->password),
            ]);

            $profile = $user->detail()->create([
                'describes' => $request->describes,
                'institute' => $request->institute,
                'isAiesecer' => $request->isAiesecer,
                'expectations' => $request->expectations,
                'interest' => $request->interest,
                'interestedField' => $request->interestedField,
                'jobPreference' => $request->jobPreference,
                'whatsapp_number' => $request->whatsapp_number,
                'cv' => $cvPath,
                'coordinator' => $request->coordinator,
            ]);

            return $user;
        });

        event(new Registered($user));
//        $user->notify(new \App\Notifications\Register());
        Mail::to($user)->send(new \App\Mail\Register());

        Auth::login($user);
//        return back()->with([
//            'status' => 'We have e-mailed your a login link!',
//        ]);
        return redirect(route('dashboard', absolute: false))->with(
            'status', 'Registration successful!',
        );
    }
}
