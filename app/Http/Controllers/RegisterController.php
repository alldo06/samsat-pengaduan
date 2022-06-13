<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
	public function index()
	{
		return view('register.index');
	}

	public function store(Request $request)
	{
		$validatedData = $request->validate([
			'nama' => 'required|max:255',
			'nama_pengguna' => 'required|min:4|max:16|unique:users',
			'tanggal_lahir' => 'required',
			'nomor_hp' => 'required|numeric',
			'email' => 'required|email:rfc,dns|unique:users',
			'password' => 'required|min:5|max:20',
		]);

		$validatedData['password'] = bcrypt($validatedData['password']);

		User::create($validatedData);

		return redirect('/login')->with('success', 'Registrasi Berhasil');
	}
}
