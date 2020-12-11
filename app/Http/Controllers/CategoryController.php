<?php

namespace App\Http\Controllers;

use App\DataTables\Admin\CategoryDataTable;
use App\Models\Cateogry;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $data  = array();
    public function __construct()
    {
        $this->data['sub_menu'] = 'category';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoryDataTable $dataTable)
    {
        // return view('admin.Category.list');
        return $dataTable->render('admin.Category.list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category              = new Cateogry();
        $category->name        = $request->name;
        $category->description = $request->description;
        $category->save();
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
        $category              = Cateogry::find($id);
        $category->name        = $request->name;
        $category->description = $request->description;
        $category->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Cateogry::find($id);
        $category->delete();
    }
}
