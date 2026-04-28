<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
public function insert()
    {
        $product = new Product();
        $product->category_id = 8;
        $product->name = 'Iphone 17 Pro Max';
        $product->price = 25000000;
        $product->stock = 2;
        $product->description = 'Smartphone terbaru dari Apple dengan performa tinggi';
        $product->status = 'tersedia';
        $product->save();

        dd($product);
    }

    public function update()
    {
        $product = Product::findOrFail(4);
        $product->name = 'Baru Diperbarui: Iphone 17 Pro Max';
        $product->price = 22000000;
        $product->stock = 2;
        $product->description = 'Deskripsi produk yang di update';
        $product->status = 'tersedia';
        $product->save();

        dd($product);
    }

    public function delete()
    {
        $product = Product::findOrFail(2);
        $product->delete();

        dd('Produk Telah Dihapus');
    }

    public function index()
    {
        // Mengambil produk beserta kategori terkait
        $products = \App\Models\Product::with('category')->latest()->paginate(10);
        return view('products.index', compact('products'));
    }
}