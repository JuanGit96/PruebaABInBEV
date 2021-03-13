<?php

namespace App\Http\Controllers;

use App\Children;
use App\Http\Requests\ChildrenRequest;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{
    use ApiResponser;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $childrens = Children::all();

        return $this->showAll($childrens);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChildrenRequest $request)
    {
        $children = Children::create($request->all());

        return $this->showOne($children, 'children creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Children $children)
    {
        return $this->showOne($children);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChildrenRequest $request, Children $children)
    {
        $children->name = $request->name;
        $children->age = $request->age;
        $children->employee_id = $request->employee_id;

        if(!$children->isDirty())
        {
            return response()->json(["error" => 'se debe especificar al menos un valor diferente para actualizar', "code" => 422],422);
        }

        $children->save(); 
        
        return $this->showOne($children, 'children actulizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Children $children)
    {
        $children->delete();

        return $this->showMessage('children eliminado correctamente');
    }
}
