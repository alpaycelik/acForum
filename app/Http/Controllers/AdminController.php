<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function get_index(){
        return view('backend.index');
    }

    public function get_category_list(){
        $categories = Category::all();
        return view('backend.category-list', ['categories' => $categories]);
    }

    public function get_category_add(){
        return view('backend.category-add');
    }

    public function post_category_add(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:categories',
        ]);
        if($validator->fails()) {
            return response(['durum' => 'error', 'baslik' => 'Hatalı!', 'icerik' => 'Başlık değeri ya boştur ya da sistemde zaten kayıtlıdır']);
        }

        // $tarih = str_slug(Carbon::now());
        $slug = str_slug($request->title);
        try {
            $request->merge(['slug' => $slug]);
            Category::create($request->all());
            return response(['durum' => 'success', 'baslik' => 'Başarılı!', 'icerik' => 'Kategori kaydetme işlemi başarılı']);
        }
        catch (\Exception $e){
            return response(['durum' => 'error', 'baslik' => 'Hatalı!', 'icerik' => 'Kategori kaydedilemedi..!', 'hata' => $e]);
        }
    }

    public function get_category_edit($slug){
        $category = Category::where('slug', $slug)->first();
        return view('backend.category-edit', ['category' => $category]);
    }

    public function post_category_edit($slug, Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:categories',
        ]);
        if($validator->fails()) {
            return response(['durum' => 'error', 'baslik' => 'Hatalı!', 'icerik' => 'Başlık değeri ya boştur ya da sistemde zaten kayıtlıdır']);
        }
        try{
            Category::where('slug', $slug)->update([
                'title' => $request->title,
                'description' => $request->description
            ]);
            return response(['durum' => 'success', 'baslik' => 'Başarılı!', 'icerik' => 'Kategori düzenleme işlemi başarılı']);
        }
        catch (\Exception $e){
            return response(['durum' => 'error', 'baslik' => 'Hatalı!', 'icerik' => 'Kategori düzenlenemedi..!', 'hata' => $e]);
        }

    }
}
