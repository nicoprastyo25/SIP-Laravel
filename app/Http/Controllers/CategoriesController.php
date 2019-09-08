<?php

namespace App\Http\Controllers;
use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $data['categories'] = Categories::all();
        return view('categories.index', $data);
    }
    public function create()
    {
        return view('categories.create');
    }
    public function add(Request $request)
    {
        $nama_kategori = $request->input('category_name');
        $status = $request->input('category_status');
        $category = new Categories;
        $category -> category_name = $nama_kategori;
        $category -> category_status = $status;
        $insert = $category->save();
        if($insert){
            echo "<script>alert('data berhasil didimpan')</script>";
            return redirect(url('categories'))->with('success', 'Berhasil menambah data kategori '.$nama_kategori);
        }
    }

    public function edit($id){
        $category = Categories::find($id);
        if(empty($category)){
            return view('404_page');
        }else{
            $data['category_edit'] = $category;
            // find = select * from table where category_id = $id
            return view('categories.edit', $data);
        }
    }

    public function update(Request $request, $id){
        $nama_kategori = $request->input('category_name');
        $status = $request->input('category_status');
        $category = Categories::find($id);
        $category -> category_name = $nama_kategori;
        $category -> category_status = $status;
        $ubah = $category->save();
        if($ubah){
            echo "<script>alert('data berhasil diubah')</script>";
            return redirect(url('categories'))->with('info', 'Berhasil mengubah data kategori '.$nama_kategori);
        }
    }

    public function show($id){
        // $data['category_show'] = Categories::find($id);
        $category = Categories::find($id);
        if(empty($category)){
            return view('404_page');
        }else{
            $data['category_show'] = $category;
            // find = select * from table where category_id = $id
            return view('categories.show', $data);
        }
    }

    public function delete($id){
        $category = Categories::find($id);  
        $nama_kategori = $category->category_name;
        $hapus = $category->delete();
        if($hapus){
            return redirect(url('categories'))->with('warning', 'Berhasil menghapus data kategori '.$nama_kategori);
        }
    }    
}
