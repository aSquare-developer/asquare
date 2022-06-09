<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      $tasks = Task::orderBy('created_at', 'asc')->get();
      return view('api.home', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('api.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
      $this->validate($request, [
        'street' => 'required',
        'house_number' => 'required',
        'appartment_number' => 'required',
        'doorcode' => 'required'
      ]);

      $data = Task::firstOrNew(
        [
          'street' => $request->input('street'),
          'house_number' => $request->input('house_number'),
          'appartment_number' => $request->input('appartment_number')
        ]
      );

      $data->doorcode = $request->input('doorcode');
      $data->description = $request->input('description');

      if($data->exists) {
        // return redirect()->route('api/tasks/create')->with('error', 'The data is already present in the database.');
        return 'The data is already present in the database.';
      } else {
        $data->save();
        return redirect()->route('tasks.index');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getJsonFormat() {
      return Task::orderBy('created_at', 'asc')->get();
    }

}
