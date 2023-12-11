<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;

class TodoController extends Controller
{
    private $title = 'TODO LIST';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages/todo-list/index', [
            'title' => $this->title,
            'data_check' => Todo::where('status', true)->get(),
            'data_uncheck' => Todo::where('status', false)->get(),
            'todo' => new Todo(),
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
    public function store(StoreTodoRequest $request)
    {
        Todo::create($request->all());
        return back()->with('berhasil', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTodoRequest $request, Todo $todo)
    {
        $data = $request->except('_token', '_method');
        Todo::where('id', $todo->id)->update($data);
        return back()->with('berhasil', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        Todo::destroy($todo->id);
        return back()->with('berhasil', 'Data berhasil dihapus!');
    }
}
