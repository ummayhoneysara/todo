<?php

namespace App\Http\Controllers;
use App\todo;
use Illuminate\Http\Request;

class todosController extends Controller
{
    
    public function index() {
        //$todos = todo::all();
        // dd($todos);
        //return view('todos.index')->with('todos',todo::all());
        return view('todos.index')->with('todos',todo::all());
    }
    public function show(todo $todoId) {
        return view('todos.show')->with('todoId',$todoId);
    }
    public function create() {
        return view('todos.create');
        
    }
    public function store() {

        $this->validate(request(),[
            'name'=>'required|min:6|max:12',
            'description'=>'required',
        ]);
        $data = request()->all();
        $todo = new todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        session()->flash('msg','Todo Saved');

        return redirect('/todos');
    }
    public function edit(todo $todoId){
        // $todo = todo::find($todoId);
        return view('todos.edit',['todo'=>$todoId]);
        session()->flash('msg','Todo Edited');
        
    }
    public function update(todo $todoId) {
        

        $this->validate(request(),[
            'name'=>'required|min:6|max:12',
            'description'=>'required',
        ]);
        
        $data = request()->all();
        //$todo = todo::find($todoId);
        $todoId->name = $data['name'];
        $todoId->description = $data['description'];
        $todoId->completed = false;
        $todoId->save();
        session()->flash('msg','Todo Updated');
        return redirect('/todos');
        
    }
    public function delete(todo $todoId) {
        $todoId->delete();
        session()->flash('msg','Todo Deleted');
        return redirect('/todos');
        
    }
    public function complete(todo $todoId){
        $todoId->completed = true;  
        $todoId->save();

        session()->flash('msg','Todo Completed');
        return redirect('/todos');
    }
}
