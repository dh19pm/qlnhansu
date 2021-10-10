<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function index()
    {
        return Inertia::render('Users/Index', [
            'filters' => Request::all('search', 'role', 'trashed'),
            'users' => Auth::user()->nhanvien->user
                ->orderBy('email')
                ->filter(Request::only('search', 'role', 'trashed'))
                ->get()
                ->transform(fn ($user) => [
                    'id' => $user->id,
                    'email' => $user->email,
                    'role' => $user->role,
                    'deleted_at' => $user->deleted_at,
                ]),
        ]);
    }

    public function edit(User $user)
    {
        return Inertia::render('Users/Edit', [
            'user' => [
                'id' => $user->id,
                'email' => $user->email,
                'role' => $user->role,
                'deleted_at' => $user->deleted_at,
            ],
        ]);
    }

    public function update(User $user)
    {
        Request::validate([
            'email' => ['required', 'max:50', 'email', Rule::unique('users')->ignore($user->id)],
            'password' => ['nullable'],
            'role' => ['required', 'boolean']
        ]);

        $user->update(Request::only('email', 'role'));

        if (Request::get('password')) {
            $user->update(['password' => Request::get('password')]);
        }

        return Redirect::back()->with('success', 'Đã cập nhật người dùng.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return Redirect::back()->with('success', 'Đã xoá người dùng.');
    }

    public function restore(User $user)
    {
        $user->restore();

        return Redirect::back()->with('success', 'Đã khôi phục người dùng.');
    }
}
