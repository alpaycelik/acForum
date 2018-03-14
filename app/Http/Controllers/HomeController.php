<?php

namespace App\Http\Controllers;

use App\Category;
use App\Topic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void

    public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response

    public function index()
    {
        return view('home');
    } */

    public function __construct(){
        Carbon::setLocale('tr');
        setlocale(LC_TIME, "tr_TR.utf8");
    }

    public function get_index() {
        $categories = Category::where('parent_id', '=', 0)->orderBy('order','ASC')->get();
        return view('frontend.index', ['categories' => $categories]);
    }

    public function get_forum($slug) {
        $category = Category::where('slug', $slug)->first();
        $topics = Topic::where('category_id', $category->id)->select()->get();
        // dd($topics->topics());
        return view('frontend.category-list', ['topics' => $topics, 'id' => $category->id]);
    }

    public function get_topic_add($id){
        return view('frontend.topic-add', ['id' => $id]);
    }

    public function post_topic_add(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'post' => 'required'
        ]);
        if($validator->fails()) {
            return response(['durum' => 'error', 'baslik' => 'Hatalı!', 'icerik' => 'Tüm alanları doldurunuz']);
        }
        try{
            $request->merge(['slug' => str_slug($request->title)]);
            $request->merge(['user_id' => Auth::id()]);
            $request->merge(['last_post_user' => Auth::id()]);
            Topic::create($request->all());
            $last_id = DB::getPdo()->lastInsertId();
            Category::find($request->category_id)->update([
                'last_topic_id' => $last_id,
                'last_user_id' => Auth::id(),
                'topics' => DB::raw('topics + 1')
            ]);
            return response(['durum' => 'success', 'baslik' => 'Başarılı!', 'icerik' => 'Konu ekleme işlemi başarılı']);
        }
        catch (\Exception $e){
            return response(['durum' => 'error', 'baslik' => 'Hatalı!', 'icerik' => 'Konu ekleme işlemi hatalı..!', 'hata' => $e]);
        }
    }
}
