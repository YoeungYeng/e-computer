<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use App\Http\Requests\StoreComputerRequest;
use App\Http\Requests\UpdateComputerRequest;

class ComputerController extends Controller
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
            'id' => 2,
            'name' => 'Laptop',
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
            'id' => 2,
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
            'id' => 2,
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
            'id' => 2,
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
            'id' => 2,
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
            'id' => 2,
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
    public function index()
    {
        $computers = $this->computers;
        return view('index', compact('computers'));

    }

    // show
    public function show(string $id)
    {
        $computer = collect($this->computers)->firstWhere('id', $id);
        return view('page-detail', compact('computer'));
    }
   
}
