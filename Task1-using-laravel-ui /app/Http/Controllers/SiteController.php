<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    private $products = [
        ['id' => 1, 'name' => 'Dell laptop', 'price' => 2000, 'image' => '/images/dell-laptop.jpg'],
        ['id' => 2, 'name' => 'Iphone 15 pro max', 'price' => 1300, 'image' => '/images/iPhone-15.jpg'],
        ['id' => 3, 'name' => 'Xiaomi Mi 15', 'price' => 800, 'image' => '/images/Xiaomi-mi-15.jpg'],
        ['id' => 4, 'name' => 'Microwave', 'price' => 200, 'image' => '/images/microwave.jpg'],
        ['id' => 5, 'name' => 'Table', 'price' => 10, 'image' => '/images/table.jpg'],
    ];

    function showProducts()
    {
        return view('home', ['products' => $this->products]);
    }

    function showProductDetails($id)
    {
        foreach ($this->products as $product) {
            if ($product['id'] == $id) {
                return view('product', ['product' => $product]);
            }
        }
        return abort(404);
    }


    function showAboutUsPage()
    {
        return view('about');
    }
    function showContactUsPage()
    {
        return view('contact');
    }
}
