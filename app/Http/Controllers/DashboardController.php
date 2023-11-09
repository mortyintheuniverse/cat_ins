<?php

namespace App\Http\Controllers;

use App\Models\catins;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(){
        $cat_posts = Catins::orderBy('created_at','DESC');
        if(request()->has('search'))
        {
            $cat_posts = $cat_posts->where('content','like','%'.request()->get('search','').'%');
        }
        return view('dashboard', [
            'catins' => $cat_posts->paginate(4)
        ]);
    }

    public function terms(){
        return view('terms');
    }

}
