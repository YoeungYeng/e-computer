<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeripheralsController extends Controller
{
    protected $computers = [
        [
            'id' => 1,
            'name' => 'Razer Death Adder Essential White Edition',
            'brand' => 'Razer',
            'image' => '1cbb2586678c84113d25f1beda04d548.jpg',
            'price' => 20,

        ],
        [
            'id' => 2,
            'name' => 'Razer Death Adder Essential Black',
            'brand' => 'Razer',
            'image' => '21facb81d64c80126834f91cf213af03.jpg',
            'price' => 20,

        ],
        [
            'id' => 3,
            'name' => 'Razer DeathAdder V2 X HyperSpeed',
            'brand' => 'Razer',
            'image' => '84f5e9c00b44c42fd4cb85a43180bada.jpg',
            'price' => 19,

        ],
        [
            'id' => 4,
            'name' => 'Razer Cobra ',
            'brand' => 'Razer',
            'image' => '431d345bf73f10106b9e1213b2801ec7.jpg',
            'price' => 30,

        ],
        [
            'id' => 5,
            'name' => 'Razer Ornata V3 X Low Profile Keys',
            'brand' => 'Razer',
            'image' => '709365e672fc02bb2e9a01ecb8e95313.jpg',
            'price' => 60,

        ],
        [
            'id' => 6,
            'name' => 'Razer Gigantus v2 Cloth Gaming',
            'brand' => 'Razer',
            'image' => 'f8594eeb4cf67e67f7a36154f976d511.jpg',
            'price' => 30,

        ],

    ];
    public function index()
    {
        $computers = $this->computers;
        return view('peripherals', compact('computers'));

    }

    // show
    public function show(string $id)
    {
        $computer = collect($this->computers)->firstWhere('id', $id);
        return view('peripherals-detail', compact('computer'));
    }
}
