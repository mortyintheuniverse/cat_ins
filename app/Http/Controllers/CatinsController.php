<?php

namespace App\Http\Controllers;

use App\Models\catins;
use Illuminate\Http\Request;

class CatinsController extends Controller
{
    public function store(){
        request()->validate([
                'content' => 'required|min:3|max:120'
            ]);

        $catins = Catins::create([
            'content' => request()->get('content',''),
        ]);
        return redirect()->route('dashboard')->with('success','Your cat was posted!!');
    }
    public function destroy(Catins $id){
        $id->delete();
        return redirect()->route('dashboard')->with('success','Your post was removed successfully');
    }
    public function show(Catins $id){

        return view('cat.cat_post',['catinsInfo' => $id ]);
    }
    public function edit(Catins $id){
        return view('cat.cat_post',['catinsInfo' => $id,'editing'=>true ]);
    }
    public function update(Catins $id){
        request()->validate([
            'content' => 'required|min:3|max:120'
        ]);

        $id -> content = request()->get('content','');
        $id -> save();
        return redirect()->route('catins.show',$id->id)->with('success','Your post has been updated. :)');
    }
}
