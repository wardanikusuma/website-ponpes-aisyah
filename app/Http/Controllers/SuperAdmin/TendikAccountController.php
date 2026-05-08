<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Tendik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TendikAccountController extends Controller
{
    public function index()
    {
        $tendiks = Tendik::latest()->get();
        return view('superadmin.tendik.index', compact('tendiks'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|unique:tendik,email',
            'password' => 'required|min:6',
            'jenjang' => 'required|in:PAUD,SD,SMP,SMA',
            'nuptk' => 'nullable|string|max:30',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        Tendik::create($validated);

        return back()->with('success', 'Akun Tendik berhasil dibuat.');
    }

    public function destroy($id)
    {
        Tendik::destroy($id);
        return back()->with('success', 'Akun Tendik berhasil dihapus.');
    }
}
