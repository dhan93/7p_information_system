<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = [
        // name
        'name' => 'required',
        // phone
        'phone' => 'required|numeric|unique:users,phone',
        // email
        'email' => 'unique:users,email|nullable|email',
      ];

      $errorMessage = [
        'required' => 'Kolom :attribute harus diisi.',
        'unique' => ':attribute sudah dipakai akun lain.',
        'numeric' => 'Kolom :attribute harus berupa angka',
        'email' => 'format email tidak valid',
      ];

      $attributes = [
        'name' => 'NAMA',
        'phone' => 'NOMOR WHATSAPP',
        'email' => 'ALAMAT EMAIL',
      ];

      $validated = Validator::make($request->all(), $rules, $errorMessage, $attributes)->validate();

      $user = User::Create([
        "name"=>$validated['name'],
        "email"=>$validated['email'],
        "password"=>bcrypt('sekolah7ps4'),
        "phone"=>$validated['phone'],
        "role_id"=>1,
        "multiple_courses"=>0,
        "default_course"=>4
      ]);

      $user->courses()->attach(4, ['id'=>'4_'.$user->id]);

      if ($user) {
        return back()->with('status', 'Akun baru berhasil ditambahkan');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
