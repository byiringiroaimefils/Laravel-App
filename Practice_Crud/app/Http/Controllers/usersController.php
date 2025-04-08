<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userModel;

class usersController extends Controller
{
    public function index(){
        return view("crude.index");
    }

    public function display(){
        $all_users = userModel::all();
        return view("crude.display", compact('all_users'));
    }

    public function insertData(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'email|required | unique:users_management',
            'password' => 'required|min:6'
        ]);

        userModel::create($request->all());
        return redirect()->route('display')->with('success','user successfully inserted');
    }

    public function select($id){
        $update = userModel::findOrFail($id);
        return view('crude.update', compact('update'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'email|required' ,
            'password' => 'required|min:6'
        ]);

        userModel::findOrFail($id)->update($request->all());
        return redirect()->route('display')->with('success','user successfully updated');
    }

    public function delete($id){
        userModel::findOrFail($id)->delete();
        return back()->with('success','user successfully Delete');
    }
}
