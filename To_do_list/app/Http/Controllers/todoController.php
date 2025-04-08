<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo; //importing model

class TodoController extends Controller
{

    // Fucntion display data stored in database
    public function index()
    {
        $todo_task = Todo::all();
        return view('index', compact('todo_task')); //routin  to index page with selected data
    }

    // Function of insert data in database
    public function show_insert()
    {
        return view('show_insert');  //routing to show_insert page

    }
    // Function of insert data in database
    public function insert(Request $request)
    {
        $request->validate([
            'task_name' => 'required|min:3',
        ]); //validation of task_name

        Todo::create($request->all());
        return redirect('/'); //routing to index page

    }

    // Function for displaying data you need to update in database
    public function show_update($id)
    {
        $todo = Todo::findOrFail($id); //find the id of the task
        return view('show_update', compact('todo'));
    }

    // Function for update in database
    public function update(Request $request, $id)
    {
        $request->validate([
            'task_name' => 'required|min:3',
        ]);//validation of task_name

        $todo = Todo::findOrFail($id); //find the id of the task
        $todo->update($request->all()); //update the task
        return redirect('/');
    }

    // Function for delete
    public function delete($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect('/');
    }

}
