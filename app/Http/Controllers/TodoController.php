<?php

namespace App\Http\Controllers;

use App\Models\Cpenerima;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function penerima(){
        $date =Cpenerima::all();
        $data =Todo::all();
        return view('home.penerima',compact('data','date'));
    }
    public function create(){
        $date =Cpenerima::all();
        $data =user::all();
        return view('home.create',compact('data','date'));
    }

    public function edit($id){
        $date =Cpenerima::all();
        $data =Todo::findOrFail($id);
        $user =user::all();
        return view('home.edit',compact(['data','date','user']));
    }
    public function addTodo(Request $request){
        // var_dump($request->user_id);
        $todo=new Todo();
        $todo->name_id=$request->name_id;
        $todo->g_id=$request->g_id;
        $todo->u_id=$request->u_id;
        $todo->s_id=$request->s_id;
        $todo->keterangan=$request->keterangan;
        $todo->user_id=$request->user_id;
        $todo->save();
        return redirect()->route('home');
    }

    public function deleteTodo($id){
        $td = Todo::find($id);
        $td->delete();
        return redirect()->route('home');
    }

    public function editTodo(Request $request,$id){
        // var_dump($request->user_id);
        $todo=Todo::find($id);
        $todo->name_id=$request->name_id;
        $todo->g_id=$request->g_id;
        $todo->u_id=$request->u_id;
        $todo->s_id=$request->s_id;
        $todo->keterangan=$request->keterangan;
        $todo->user_id=$request->user_id;
        $todo->save();
        return redirect()->route('home');
    }
}
