<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Notifications\Login;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;
use Inertia\Response;
use phpDocumentor\Reflection\Types\Boolean;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Login', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store()
    {
        request()->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', request('email'))->first();

        if (! $user) {
            return back()->withErrors([
                'email' => 'The provided credentials are incorrect.',
            ]);
        }

        $link = URL::temporarySignedRoute('login.token', now()->addHour(), ['user' => $user->id, 'remember' => request('remember')]);

        $user->notify(new Login($link));

        return back()->with([
            'status' => 'We have e-mailed your a login link!',
        ]);

    }

    public function loginViaToken(User $user)
    {
        $remember = request()->query('remember', false);
        Auth::login($user, $remember);
        request()->session()->regenerate();
        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
