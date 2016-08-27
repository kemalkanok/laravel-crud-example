<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class FrontEndCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = User::get();
        return view('frontend.crud.index',compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\CrudRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CrudRequest $request)
    {
        User::create($request->all());
        return redirect('/crud/')->withSuccess('Creation of completed');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        User::find($id)->delete();
        return back()->withSuccess('Deletion of completed');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $element = User::find($id);
        return view('frontend.crud.edit',compact('element'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CrudRequest $request, $id)
    {
        User::find($id)->update($request->all());
        return back()->withSuccess('Update  completed');



    }


}
