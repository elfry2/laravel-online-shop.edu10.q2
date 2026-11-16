<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(Request $request) {
        return view('products.create');
    }

    public function store(Request $request) {
        $input = $request->all();

        $imagePath = $request->file('image')->store('images', 'public');

        Product::create([
            'name' => $input['name'],
            'description' => $input['description'],
            'price' => $input['price'],
            'stock' => $input['stock'],
            'image' => $imagePath,
        ]);

        return redirect()->to(route('products.create'));
    }

    public function index() {
        $products = Product::paginate(2);

        return view('products.index', [
            'products' => $products,
        ]);
    }

    public function destroy(Request $request, $id) {
        Product::find($id)->delete();

        return redirect()->to(route('products.index'));
    }
}
