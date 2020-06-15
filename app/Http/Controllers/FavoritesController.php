<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    // $micropostsIdとweb.phpの/posts/{id}/favoriteの{id}は対応している
    public function store($micropostsId)
    {
        // dd($micropostsId);
        // favoritesテーブルにお気に入りしたことを保存
        \Auth::user()->favorite($micropostsId);
        return back();
       
    }
    
    public function destroy($micropostsId)
    {
        \Auth::user()->unfavorite($micropostsId);
        return back();
    }
}