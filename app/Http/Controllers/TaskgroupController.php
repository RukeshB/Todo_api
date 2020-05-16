<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\TaskgroupModel;
use Validator;

class TaskgroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \response()->json(TaskgroupModel::get(),200);
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
        $validation = ['title' => 'required|min:3',
                        'due_date'=> 'required',
                    ];
        $validator = Validator::make($request->all(),$validation);
        if($validator->fails())
        {
            return \response()->json($validator->errors(),400);
        }
        $group = TaskgroupModel::create($request->all());
        return \response()->json($group,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = TaskgroupModel::find($id);
        if(is_null($group))
        {
            return \response()->json(['message'=>'data not found'],404);
        }
        return \response()->json($group,200);
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
        $group = TaskgroupModel::find($id);
        if(is_null($group))
        {
            return \response()->json(['message'=>'data not found'],404);
        }
        $group->update($request->all());
        return \response()->json($group,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group = TaskgroupModel::find($id);
        if(is_null($group))
        {
            return \response()->json(['message'=>'data not found'],404);
        }
        $group->delete();
        return \response()->json($group,204);
    }
}
