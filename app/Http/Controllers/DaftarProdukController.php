<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DaftarProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(5);
        return view('products.daftarproduk', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.tambahproduk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|string|max:12|unique:products,id',
            'product_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'retail_price' => 'required|numeric|min:0',
            'wholesale_price' => 'required|numeric|min:0',
            'origin' => 'required|string|max:2',
            'quantity' => 'required|int|min:0',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,jpeg|max:2048',
        ]);

        $product = Product::create($validated);

        if($request->hasFile('product_image')){
            $this->storeImage($product, $request->file('product_image'));
        }

        return redirect()->route('daftar-produk.index')->with('success', 'Data Produk Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.detailproduk', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.editproduk', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'id' => 'required|string|max:12|unique:products,id',
            'product_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'retail_price' => 'required|numeric|min:0',
            'wholesale_price' => 'required|numeric|min:0',
            'origin' => 'required|string|max:2',
            'quantity' => 'required|int|min:0',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,jpeg|max:2048',
        ]);

        $product->update($validated);

        if($request->hasFile('product_image')) {
            if($product->product_image) {
                Storage::delete($product->product_image);
            }
            $this->storeImage($product, $request->file('product_image'));
        }
        return redirect()->route('daftar-produk.index')->with('success', 'Data Produk Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if($product->product_image) {
            Storage::delete($product->product_image);
        }
        $product->delete();
        return redirect()->route('daftar-produk.index')->with('success', 'Data Produk Berhasil Dihapus!');
    }

    private function storeImage(Product $product, $file)
    {
        $filePath = $file->store('public/images');
        $product->update(['product_image' => $filePath]);
    }
}
