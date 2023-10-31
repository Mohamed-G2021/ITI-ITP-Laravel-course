<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    function showAboutUsPage()
    {
        return view('about');
    }

    function showContactUsPage()
    {
        return view('contact');
    }

    function index()
    {
        $products = Product::paginate(4);
        return view('products.index', ['products' => $products]);
    }

    function show($id)
    {
        $product = Product::findOrFail($id);

        return view(
            'products.show',
            ['product' => $product]
        );
    }

    function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return to_route('products.index');
    }

    function create()
    {
        $categories = Category::all();
        return view('products.create', ["categories" => $categories]);
    }

    function store(Request $request)
    {
        ## validating form input
        $request->validate(
            [
                "name" => "required",
                "image" => "required",
                "price" => "required|numeric",
            ],
            [
                "name" => "product name is required",
                "image" => "product image is required",
                "price.required" => "product price is required",
                "price.numeric" => "only numbers are allowed",
            ]
        );

        $request_data = $request->all();
        $request_data['creator_id'] = Auth::id();

        Product::create($request_data);
        return to_route('products.index');
    }

    function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view(
            'products.edit',
            [
                'product' => $product,
                'categories' => $categories
            ]
        );
    }

    function update($id)
    {
        $product = Product::find($id);

        $product->name = request()->input('name');
        $product->description = request()->input('description');
        $product->image = request()->input('image');
        $product->price = request()->input('price');
        $product->category_id = request()->input('category_id');
        $product->save();

        return to_route('products.show', $product->id);
    }
}
