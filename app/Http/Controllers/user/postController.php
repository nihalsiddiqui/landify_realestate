<?php

namespace App\Http\Controllers\user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\post;
use App\Models\tag;
use App\Models\category;

class postController extends Controller
{
    public function index(post $post){
        $categories = category::all();
        $tags = tag::all();
        return view('user.post',compact('post','tags','categories'));
    }

}
