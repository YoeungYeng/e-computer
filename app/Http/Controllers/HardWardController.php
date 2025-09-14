<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HardWardController extends Controller
{
    protected $computers = [
        [
            'id' => 1,
            'name' => 'Laptop',
            'brand' => 'Dell',
            'image' => '1.jpeg',
            'price' => 800,
            'specs' => [
                'processor' => 'Intel i5',
                'ram' => '8GB',
                'storage' => '256GB SSD'
            ]
        ],
        [
            'id' => 2,
            'name' => 'Mouse',
            'brand' => 'HP',
            'image' => '2.jpeg',
            'price' => 600,
            'specs' => [
                'processor' => 'Intel i3',
                'ram' => '4GB',
                'storage' => '1TB HDD'
            ]
        ],
        [
            'id' => 3,
            'name' => 'Laptop',
            'brand' => 'HP',
            'image' => '3.jpeg',
            'price' => 600,
            'specs' => [
                'processor' => 'Intel i3',
                'ram' => '4GB',
                'storage' => '1TB HDD'
            ]
        ],
        [
            'id' => 4,
            'name' => 'Desktop',
            'brand' => 'HP',
            'image' => '10.jpeg',
            'price' => 600,
            'specs' => [
                'processor' => 'Intel i3',
                'ram' => '4GB',
                'storage' => '1TB HDD'
            ]
        ],
        [
            'id' => 5,
            'name' => 'Desktop',
            'brand' => 'HP',
            'image' => '5.jpeg',
            'price' => 600,
            'specs' => [
                'processor' => 'Intel i3',
                'ram' => '4GB',
                'storage' => '1TB HDD'
            ]
        ],
        [
            'id' => 6,
            'name' => 'Desktop',
            'brand' => 'HP',
            'image' => '6.jpeg',
            'price' => 600,
            'specs' => [
                'processor' => 'Intel i3',
                'ram' => '4GB',
                'storage' => '1TB HDD'
            ]
        ],
        [
            'id' => 7,
            'name' => 'Desktop',
            'brand' => 'HP',
            'image' => '7.jpeg',
            'price' => 600,
            'specs' => [
                'processor' => 'Intel i3',
                'ram' => '4GB',
                'storage' => '1TB HDD'
            ]
        ],
        [
            'id' => 8,
            'name' => 'Desktop',
            'brand' => 'HP',
            'image' => '8.jpeg',
            'price' => 600,
            'specs' => [
                'processor' => 'Intel i3',
                'ram' => '4GB',
                'storage' => '1TB HDD'
            ]
        ]
    ];
    public function hardware()
    {
        $computers = $this->computers;
        return view('hardware', compact('computers'));
    }
}
