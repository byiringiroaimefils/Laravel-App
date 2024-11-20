<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use Illuminate\Support\Facades\DB;
class StoryController extends Controller
{
    public function index()
    {
        $users = Story::get();
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

        $newUser = Story::create($data);
        return redirect()->route('data')->with('success', 'User created successfully');
    }


    public function edit(int $id)
    {
        $user = Story::findOrFail($id);
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
        Story::findOrFail($id)->update($data);
        return redirect()->route('data')->with('success', 'User created successfully');
        
    }
    
    public function delete($id)
    {
        $user = Story::find($id);
        $user->delete();
        return redirect()->route('data')->with('success', ' successfully Deleted');
    
    }
   
}
