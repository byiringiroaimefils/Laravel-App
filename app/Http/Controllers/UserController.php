<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('Data', compact('users'));
    }


    public function create()
    {
        return view('Home');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'level' => 'required|integer',
            'studentCode' => 'required|integer'
        ]);

        $newUser = User::create($data);
        return redirect()->route('data')->with('success', 'User created successfully');
    }


    public function edit(int $id)
    {
        $user = User::findOrFail($id);
        return view('edit', compact("user"));
    }


    public function update(Request $request, int $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'level' => 'required|integer',
            'studentCode' => 'required|integer'
        ]);
        User::findOrFail($id)->update($data);
        return redirect()->route('data')->with('success', 'User created successfully');
        
    }
    
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('data')->with('success', ' successfully Deleted');
    
    }
   
}
