<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    function showForm()
    {
        return view("form");
    }

    function submitHandler(Request $request)
    {



        $product_name = $request->input("product_name");
        $product_description = $request->input("product_description");
        $product_category = $request->input("product_category");
        $product_price = $request->input("product_price");
        $product_stock = $request->input("product_stock");




        $product = new Product();
        $product->product_name = $product_name;
        $product->product_description = $product_description;
        $product->product_category = $product_category;
        $product->product_price = $product_price;
        $product->product_stock = $product_stock;

        $product->save();

        return view("confirm");
    }


    function fetchData()
    {

        $productsData = Product::all();

        return view("products", compact("productsData"));
    }
}
