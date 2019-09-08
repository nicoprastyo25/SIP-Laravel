<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Categories;
use App\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products'] = Products::join('categories', 'products.category_id', '=', 'categories.category_id')->get();
        return view('products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Categories::pluck('category_name', 'category_id');
        return view('products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi
        $rules = [
            'product_name' => 'required',
            'product_price' => 'required',
            'product_sku' => 'required',
            'product_status' => 'required',
            'product_category' => 'required',
            'product_description' => 'required'
        ];

        $message = [
            'product_name.required' => 'Nama Produk wajib diisi!',
            'product_price.required' => 'Harga Produk wajib diisi!',
            'product_sku.required' => 'Kode Produk wajib diisi!',
            'product_status.required' => 'Status Produk wajib diisi!',
            'product_category.required' => 'Kategori Produk wajib diisi!',
            'product_description.required' => 'Deskripsi Produk wajib diisi!'
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()){
            return redirect(url('product/create'))
                    ->withErrors($validator)
                    ->withInput($request->all());
        } else {

            $image = $request->file('product_image')
                    ->store('products', 'public');

            $product = new Products;
            $product->category_id = $request->input('product_category');
            $product->product_name = $request->input('product_name');
            $product->product_price = $request->input('product_price');
            $product->product_sku = $request->input('product_sku');
            $product->product_status = $request->input('product_status');
            $product->product_description = $request->input('product_description');
            $product->product_image = $image;
            $simpan = $product->save();

            if($simpan){
                return redirect(url('products'))->with('success', 'Berhasil menambah data product.');
            }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['product'] = Products::join('categories', 'products.category_id', '=', 'categories.category_id')
                ->where('products.product_id', $id)
                ->first();
        return view('products.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['categories'] = Categories::pluck('category_name', 'category_id');
        $data['product'] = Products::join('categories', 'products.category_id', '=', 'categories.category_id')
                ->where('products.product_id', $id)
                ->first();
        return view('products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $rules = [
            'product_name' => 'required',
            'product_price' => 'required',
            'product_sku' => 'required',
            'product_status' => 'required',
            'product_category' => 'required',
            'product_description' => 'required'
        ];

        $message = [
            'product_name.required' => 'Nama Produk wajib diisi!',
            'product_price.required' => 'Harga Produk wajib diisi!',
            'product_sku.required' => 'Kode Produk wajib diisi!',
            'product_status.required' => 'Status Produk wajib diisi!',
            'product_category.required' => 'Kategori Produk wajib diisi!',
            'product_description.required' => 'Deskripsi Produk wajib diisi!'
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()){
            return redirect(url('product/edit/'.$id))
                    ->withErrors($validator)
                    ->withInput($request->all());
        } else {

            $image = $request->file('product_image')
                    ->store('products', 'public');

            $product = Products::where('product_id',$id)->first();
            $product->category_id = $request->input('product_category');
            $product->product_name = $request->input('product_name');
            $product->product_price = $request->input('product_price');
            $product->product_sku = $request->input('product_sku');
            $product->product_status = $request->input('product_status');
            $product->product_description = $request->input('product_description');
            $product->product_image = $image;
            $ubah = $product->save();

            if($ubah){
                return redirect(url('products'))->with('info', 'Berhasil mengubah data produk.');
            }

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id);
        $nama_produk = $product->product_name;
        $hapus = $product->delete();
        if($hapus){
            return redirect(url('Products'))->with('warning', 'Berhasil menghapus data produk '.$nama_produk);
        }
    }
}