<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
        $products = Product::all();
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
        return view('products.create');
    }

    function store()
    {
        $product = new Product;

        $product->name = request()->input('name');
        $product->description = request()->input('description');
        $product->image = request()->input('image');
        $product->price = request()->input('price');
        $product->save();

        return to_route('products.show', $product->id);
    }
}
