<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static $products = [
        [
            'id' => 1,
            'name' => 'Product 1',
            'description' => 'Description of product 1',
            'img' => 'image1.jpg',
            'price' => 19.99
        ],
        [
            'id' => 2,
            'name' => 'Product 2',
            'description' => 'Description of product 2',
            'img' => 'image2.jpg',
            'price' => 29.99
        ],
        [
            'id' => 3,
            'name' => 'Product 3',
            'description' => 'Description of product 3',
            'img' => 'image3.jpg',
            'price' => 39.99
        ]
    ];

    public function index(){
        $viewData = [];
        $viewData['title'] = "Página de Produtos";
        $viewData['products'] = ProductController::$products;
        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id){
        $viewData = [];
        $product = ProductController::$products[$id];
        $viewData["title"] = $product["name"];
        $viewData['product'] = ProductController::$products[$id];
        return view('product.show')->with("viewData", $viewData);
    }

}