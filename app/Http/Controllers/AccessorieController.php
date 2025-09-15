<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessorieController extends Controller
{
    protected $accsories = [
        [
            'id' => 1,
            'name' => 'AX6600 Tri-Band Wi-Fi 6 Router',
            'brand' => 'Tri-Band',
            'image' => '2f9d773aa675a10884cc129aaa514363.jpg',
            'price' => 100,

        ],
        [
            'id' => 2,
            'name' => 'TP-Link Wifi 6 AX1500 Smart WiFi Router',
            'brand' => 'Cisco',
            'image' => '42bfa8a3cbcfb41070d4fd44bc96fce6.jpg',
            'price' => 600,

        ],
        [
            'id' => 3,
            'name' => 'TP-Link TL-SF1016D 16-Port',
            'brand' => 'Cisco',
            'image' => '63ad9ee2d959e7e04f379e4e37d99435.jpg',
            'price' => 40,

        ],
        [
            'id' => 4,
            'name' => 'TP-Link TL-SF1005D 5-Port 10',
            'brand' => 'Cisco',
            'image' => 'bc9734ff21e72a590e7cb4ba2dd4e1d4.jpg',
            'price' => 100,
            'specs' => [
                'processor' => 'Intel i3',
                'ram' => '4GB',
                'storage' => '1TB HDD'
            ]
        ],
        [
            'id' => 5,
            'name' => 'Gigabyte WB1733D-I 1733Mbps',
            'brand' => 'Cisco',
            'image' => 'efefbd92a174ba4a876d10ffd8de4a53.jpg',
            'price' => 600,

        ],

    ];
    public function acessories()
    {
        $computers = $this->accsories;
        return view('accesories', compact('computers'));

    }

    // show
    public function show(string $id)
    {
        $computer = collect($this->accsories)->firstWhere('id', $id);
        return view('accesories-detail', compact('computer'));
    }
}
