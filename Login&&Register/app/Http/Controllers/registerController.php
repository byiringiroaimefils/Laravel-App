<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\register;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'email|unique:author',
            'password' => 'required|min:6',
        ]);
        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        $register = register::create($data);
        if ($register) {
            return back()->with('success', 'registeration successful');
        } else {
            return back()->with('success', 'registeration Fail');
        }
    }
    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'email',
            'password' => 'required|min:6',
        ]);
        $user = register::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect()->route('dashbord');
            } else {
                return back()->with('success', 'incorrect username and password');
            }
        } else {
            return back()->with('success', 'fail');
        }
    }

    public function dashboard()
    {
        $data = null;

        if (Session::has('loginId')) {
            $data = register::where('id', Session::get('loginId'))->first();
            $get_user = register::all();
        }
        return view('dashbord', compact('data', 'get_user'));
    }

    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
        }
        return redirect()->route('login')->with('success', 'Logged out successfully');
    }

    public function edit_user($id)
    {
        $edit_user = register::findOrFail($id);
        return view('update', compact('edit_user'));
    }

    public function update_user(request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'email|required',
        ]);

        register::findOrFail($id)->update($request->all());
        return redirect('dashbord')->with('success', 'User successfully updated');
    }

    public function delete_user($id)
    {
        register::findOrFail($id)->delete();
        return redirect('dashbord')->with('success', 'User successfully deleted');
    }

}
