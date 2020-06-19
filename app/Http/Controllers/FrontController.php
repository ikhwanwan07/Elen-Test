<?php

namespace App\Http\Controllers;

use App\Orders;
use App\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class FrontController extends Controller
{
    public function welcome()
    {
        $products = Product::all();
        return view('front', compact('products'));
    }
    public function invoice()
    {
        $order = Orders::all();
        return view('pages.invoice', compact('order'));
    }

    public function product()
    {
        $product = Product::orderBy('nama', 'ASC');
        return datatables()->of($product)
            ->addColumn('action', 'pages.actionProduct')
            ->addIndexColumn()
            ->toJson();
    }
    public function order()
    {
        $order = Orders::orderBy('id', 'ASC');
        return datatables()->of($order)
            ->addColumn('Nama', function (Orders $model) {
                return $model->product->nama;
            })
            ->addColumn('action', 'pages.actionOrder')
            ->addIndexColumn()
            ->toJson();
    }
}
