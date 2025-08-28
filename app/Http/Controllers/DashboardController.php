<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();


        $data = [
            'totalProducts' => $totalProducts,
        ];
        return view('admin.dashboard', $data);
    }
}
