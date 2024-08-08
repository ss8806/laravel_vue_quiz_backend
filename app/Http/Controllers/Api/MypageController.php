<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ranking;

class MypageController extends Controller
{

    /**
     *
     * マイページ画面初期処理アクション
     * @return
     */
    public function index()
    {
        // ログインユーザーの最新の正解率を取得する。
        $myScore = Ranking::select('percentage_correct_answer', 'created_at')
            ->where('user_id', '=', auth('api')->user()->id)
            ->orderby('created_at', 'asc')
            ->limit(100)
            ->get();

        $myScoreGraphData = [
            'percentage_correct_answer' => $myScore->pluck('percentage_correct_answer')->all(),
            'created_at' => $myScore->pluck('created_at')->all()
        ];

        return $myScoreGraphData;
    }
}
