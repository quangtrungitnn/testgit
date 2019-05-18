<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category_model;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category_model::paginate(5);
        return view('Category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $category = new Category_model();

        $category->name = $request->input('name');
        $category->description = $request->input('gender');


        //$category = new Category_model();
        //$category->makeObjFromRequest($request);

        return View('Category.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate{[
            'name' => 'required',
            'description' => 'required',
        ]};
        Category_model::create($request->all());
        return redirect()->route('Category.index')->with('success', 'Category Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category_model::find($id);

        return view('Category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = $id === 'false' ? $request->id : $id;
        $category = Category_model::find($id);
        $category->makeObjFromRequest($request);

        $category->save();

        Category_model::find($id)->update($request->all());

        echo $request->name;die;
        return redirect()->route('Category.index')->with('success', 'Category update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category_model::find($id)->Delete();
        if ($category == 0) {
            return response(
                [
                    "status" => "404",
                    "message" => 'Product not exist'
                ], 404);
        } else {
            return redirect()->route('Category.index')->with('success', 'Delete successfully');
        }
    }
}
