<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAccountController extends Controller
{
    public function index()
    {
        $admins = Admin::latest()->get();
        return view('superadmin.admin.index', compact('admins'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|unique:admin,email',
            'password' => 'required|min:6',
            'jenjang' => 'required|in:PAUD,SD,SMP,SMA',
            'nip' => 'nullable|string|max:30',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        Admin::create($validated);

        // Here we should trigger the email notification for new account
        // Mail::to($validated['email'])->queue(new AccountCreatedMail($validated));

        return back()->with('success', 'Akun admin berhasil dibuat.');
    }

    public function destroy($id)
    {
        Admin::destroy($id);
        return back()->with('success', 'Akun admin berhasil dihapus.');
    }
}
