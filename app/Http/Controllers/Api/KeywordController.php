<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Keyword;

class KeywordController extends Controller
{
    /**
     *
     * キーワードコントローラー初期処理アクション
     *
     * @return
     */
    public function index(Request $request)
    {
        $initial = $request->input('initial');
        $keyword = Keyword::with('category')
            ->where('keywords.initial', '=',  $initial)
            ->orderby('keywords.keyword')
            ->get();

        return $keyword;
    }
}
