<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        Todo::all();
    }

    /**
     * todoを登録する
     *
     * 登録画面にて入力した情報をDBに登録する機能
     *
     * @bodyParam title string required Title of Todo
     * @bodyParam note string
     * @bodyParam complete_todo boolean
     */
    public function store(Request $request)
    {
        Todo::create([
            'title' => $request->title,
            'note' => $request->note,
            'complete_todo' => $request->complete_todo,
        ]);
    }

    /**
     * todoを更新する
     *
     * 更新画面にて入力した情報をDBに登録する機能
     *
     * @urlParam id integer required
     *
     * @bodyParam title string required Title of todo.
     * @bodyParam note string
     * @bodyParam complete_todo boolean
     */
    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);

        $todo->title = $request->input('title');
        $todo->note = $request->input('note');
        $todo->complete_todo = $request->input('complete_todo');

        $todo->save();
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
    }
}
