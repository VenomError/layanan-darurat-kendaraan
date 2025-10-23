<?php

namespace App\Http\Controllers;

use App\Enum\UserRole;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Enum;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexAdmin()
    {
        return view('akun.admin.index', [
            'users' => User::where('role', UserRole::ADMIN->value),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createAdmin()
    {
        return view('akun.admin.create', [
            'roles' => UserRole::ADMIN->value,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeAdmin(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:akun.admin',
            'password' => 'required|string|min:8|confirmed',
            'role' => ['required', new Enum(UserRole::ADMIN->value)],
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect()->route('akun.admin.index')->with('success', 'Akun Admin Berhasil Dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editAdmin(User $user)
    {
        return view('akun.admin.update', [
            'user' => $user,
            'roles' => UserRole::ADMIN->value,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateAdmin(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:akun.admin,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'role' => ['required', new Enum(UserRole::class)],
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('avatar')) {
            $validatedData['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        if (!empty($validatedData['password'])) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }

        $user->update($validatedData);

        return redirect()->route('akun.admin.index')->with('success', 'User berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
