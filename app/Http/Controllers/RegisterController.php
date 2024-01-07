<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function registerPage()
    {
        return view('register');
    }
    public function registerAction(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        Admin::create($data);
        return redirect()->route('login-admin')
            ->with('success', 'Data User berhasil dibuat.');
    }

}
