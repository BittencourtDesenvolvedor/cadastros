<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('can:level')->only('edit');
    }


    public function index()
    {
        return view('users/index', [
            'users' =>DB::table('users')->orderBy('name')->paginate('10')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         return view('users/edit', [
              'user' => User::findOrFail($id)
         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $id)
    {
        User::findOrFail($id->id)->update($id->all());
        return redirect()->route('user-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
