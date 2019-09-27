<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            0 => [
                'id' => 1,
                'name' => 'Hoang Quoc Viet',
                'email' => 'viet@gmail.com',
                'address' => 'Ha Noi'
            ],
            1 => [
                'id' => 2,
                'name' => 'Nguyen Binh Khiem',
                'email' => 'khiem@gmail.com',
                'address' => 'Ha Noi'
            ],
            2 => [
                'id' => 3,
                'name' => 'Hoang Dieu',
                'email' => 'dieu@gmail.com',
                'address' => 'Ha Noi'
            ],
            3 => [
                'id' => 4,
                'name' => 'Tran Quoc Tuan',
                'email' => 'tuan@gmail.com',
                'address' => 'Ha Noi'
            ]
        ];
        return view('index', compact('customers'));
    }
}
