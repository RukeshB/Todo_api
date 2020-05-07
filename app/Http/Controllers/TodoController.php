<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\TodoModel;
use Validator;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \response()->json(TodoModel::get(),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation=[
            'user_id'=>'required',
            'title'=>'required|min:3',
        ];
        $validator = Validator::make($request->all(),$validation);
        if($validator->fails())
        {
            return \response()->json($validator->errors(),400);
        }
        $todo = TodoModel::create($request->all());
        return \response()->json($todo,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = TodoModel::find($id);
        if(is_null($todo))
        {
            return \response()->json(["message"=>"data not found"],404);
        }
        return \response()->json($todo,200);
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
         $todo = TodoModel::find($id);
         if(is_null($todo))
         {
             return \response()->json(["message"=>"data not found"],404);
         }
         $todo->update($request->all());
         return \response()->json($todo,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = TodoModel::find($id);
        if(is_null($todo))
        {
            return \response()->json(["message"=>"data not found"],404);
        }
        $todo->delete();
        return \response()->json(null,204);
    }
}
