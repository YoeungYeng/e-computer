<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PCsetController extends Controller
{
    protected $computers = [
        [
            'id' => 1,
            'name' => 'ThinkCentre Neo 50T -  Intel® Core i3-12100 Processor',
            'brand' => 'ThinkCentre',
            'image' => '6d3119eb3c603ccf6defe2a07976524f.jpg',
            'price' => 800,
            'specs' => [
                'processor' => 'Intel i5',
                'ram' => '8GB',
                'storage' => '256GB SSD'
            ]
        ],
        [
            'id' => 2,
            'name' => 'IdeaCentre AIO 3 22IAP7 -  Intel® Core™ i3-1220P Processor',
            'brand' => 'IdeaCentre',
            'image' => '29e259eac3a8ac7ea92485c2713d0102.png',
            'price' => 600,
            'specs' => [
                'processor' => 'Intel i3',
                'ram' => '4GB',
                'storage' => '1TB HDD'
            ]
        ],
        [
            'id' => 3,
            'name' => 'ThinkCentre Neo 30A 24" (AIO) -  Intel® Core™ i3-1220P Processor',
            'brand' => 'ThinkCentre',
            'image' => '006383cbcb6d2eb929ddc39eefba686b.jpg',
            'price' => 600,
            'specs' => [
                'processor' => 'Intel i3',
                'ram' => '4GB',
                'storage' => '1TB HDD'
            ]
        ],
        [
            'id' => 4,
            'name' => 'IdeaCentre AIO 24IRH9 - Intel® Core™ i5-13420H',
            'brand' => 'IdeaCentre',
            'image' => '84816a4329f66df7b22e6bc116625ae2.png',
            'price' => 200,
            'specs' => [
                'processor' => 'Intel i3',
                'ram' => '4GB',
                'storage' => '1TB HDD'
            ]
        ],
        [
            'id' => 5,
            'name' => 'ThinkCentre Neo 30A 24" (AIO) - Intel® Core™ i5-1240P Processor',
            'brand' => 'ThinkCentre',
            'image' => 'bc1077bd54ad6b44ade5fe9dac85b0df.jpg',
            'price' => 700,
            'specs' => [
                'processor' => 'Intel i3',
                'ram' => '4GB',
                'storage' => '1TB HDD'
            ]
        ],
        
    ];
    public function index()
    {
        $computers = $this->computers;
        return view('pcset', compact('computers'));
    }

    public function show(string $id)
    {
        $computer = collect($this->computers)->firstWhere('id', $id);
        return view('pcset-detail', compact('computer'));
    }
}
