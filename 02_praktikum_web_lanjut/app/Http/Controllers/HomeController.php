<?php

namespace App\Http\Controllers;


use App\Models\About;
use App\Models\Blog;
use App\Models\Picture;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function index(){
        return view('index');
    }
    public static function about(){
        return view('about', ['abouts' => About::about(), 'pictures' => Picture::picture()]);
}
public function contact(){
    return view('contact');
}
public function blog(){
    return view('blog', ['blogs' => Blog::blog()]);
}
public function product(){
    return view('product');
}
public function product_detail3(){
    return view('product_detail3');
}

}