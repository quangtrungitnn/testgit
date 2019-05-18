<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductModel;

class ProductController extends Controller
{

    public function index()
    {
        $Products = ProductModel::paginate(5);
        return view('products.index', compact('Products'));
    }


    public function create(Request $request)
    {
        $product = new ProductModel();

        $product->name = $request->input('name');
        $product->producer = $request->input('producer');
        $product->unit_price = $request->input('unit_price');
        $product->promotion_price = $request->input('promotion_price');
        $product->image = $request->input('image');
        $product->id_category = $request->input('id_category');

        return view('products.create', compact('product'));
    }


    public function store(Request $request)
    {
        $request->validate{[
            'name' => 'required',
            'producer' => 'required',
            'unit_price' => 'required',
            'promotion_price' => 'required',
            'image' => 'required',
            'id_category' => 'required',
        ]};

        ProductModel::create($request->all());
        return redirect()->route('products.index')->with('success', 'Product Created successfully');
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $product = ProductModel::find($id);
        return view('products.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        $product = ProductModel::find($id);

        $product->name = $request->input('name');
        $product->producer = $request->input('producer');
        $product->unit_price = $request->input('unit_price');
        $product->promotion_price = $request->input('promotion_price');
        $product->image = $request->input('image');
        $product->id_category = $request->input('id_category');

        $product->save();
        //$category = new Category_model();
        //$category->makeObjFromRequest($request);

        // $category->save();

        ProductModel::find($id)->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product update successfully');
    }


    public function destroy($id)
    {
        $product = ProductModel::find($id)->Delete();

        if ($product == 0) {
            return " san pham da het";
        } else {
            return redirect()->route('products.index')->with('success', 'Delete successfully');
        }

    }
}
