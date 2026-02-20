<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // 30pts: Array in controller with Pink Porsche Theme
        $products = [
            [
                'name' => 'Porsche 911 - Rose Quartz',
                'price' => 115000.00,
                'image' => 'https://placehold.co/600x400/FFB6C1/white?text=911+Rose'
            ],
            [
                'name' => 'Porsche Taycan - Pink Berry',
                'price' => 90000.00,
                'image' => 'https://placehold.co/600x400/FF69B4/white?text=Taycan+Pink'
            ],
            [
                'name' => 'Porsche 718 - Blush Pink',
                'price' => 75000.00,
                'image' => 'https://placehold.co/600x400/DB7093/white?text=718+Blush'
            ],
            [
                'name' => 'Porsche Cayenne - Hot Pink',
                'price' => 85000.00,
                'image' => 'https://placehold.co/600x400/C71585/white?text=Cayenne+Hot'
            ]
        ];

        return view('products.index', compact('products'));
    }
}