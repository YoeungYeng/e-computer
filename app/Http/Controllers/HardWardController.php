<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HardWardController extends Controller
{
    protected $hardwares = [
        [
            'id' => 1,
            'name' => 'Intel® Core™ Ultra',
            'brand' => 'Inel®',
            'image' => '0e1f0893a164631a158040c6d414ca2b.jpg',
            'price' => 800,
            'specs' => [
                'processor' => 'Intel i5',
                'ram' => '8GB',
                'storage' => '256GB SSD'
            ]
        ],
        [
            'id' => 2,
            'name' => '14th Intel® Core™ i3',
            'brand' => 'Intel® ',
            'image' => '4e806f02a9b31e60197734b3f667acd1.jpg',
            'price' => 600,
            'specs' => [
                'processor' => 'Intel i3',
                'ram' => '4GB',
                'storage' => '1TB HDD'
            ]
        ],
        [
            'id' => 3,
            'name' => 'Intel® Core™ i5-12400',
            'brand' => 'Intel® ',
            'image' => '8c9be2c7b8dd4af4553c5f05d11168f8.jpg',
            'price' => 600,
            'specs' => [
                'processor' => 'Intel i3',
                'ram' => '4GB',
                'storage' => '1TB HDD'
            ]
        ],
        [
            'id' => 4,
            'name' => 'AMD Ryzen™ 7 9700X Tray',
            'brand' => 'AMD',
            'image' => '7688aa13dcb6ff774d0cf779995c8e1b.jpg',
            'price' => 600,
            'specs' => [
                'processor' => 'Intel i3',
                'ram' => '4GB',
                'storage' => '1TB HDD'
            ]
        ],
        [
            'id' => 5,
            'name' => 'Ryzen 7000 Series',
            'brand' => 'AMD',
            'image' => 'ec23f44b4deae7a6402e228190d8993b.jpg',
            'price' => 600,
            'specs' => [
                'processor' => 'Intel i3',
                'ram' => '4GB',
                'storage' => '1TB HDD'
            ]
        ],
        [
            'id' => 6,
            'name' => 'DeepCool LS720 SE Digital',
            'brand' => 'DeepCool',
            'image' => 'a58012cbcaa69b511192fbbb075dd818.png',
            'price' => 600,
            'specs' => [
                'processor' => 'Intel i3',
                'ram' => '4GB',
                'storage' => '1TB HDD'
            ]
        ],
        
    ];
    public function hardware()
    {
        $hardwares = $this->hardwares;
        return view('hardware', compact('hardwares'));
    }

// show details of a single computer
    public function show(string $id)
    {
        $hardward = collect($this->hardwares)->firstWhere('id', $id);
        return view('page-detail-hardware', compact('hardward'));
    }
}
