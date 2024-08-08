<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Ranking;
use DB;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    protected $ranking;
    /**
     *
     *
     * @return void
     */
    public function __construct(Ranking $ranking)
    {
        $this->ranking = $ranking;
    }

    /**
     *
     *
     * @return
     */
    public function index()
    {
        $weekRanking = Ranking::with('user')
            ->select(DB::raw('MAX(rankings.percentage_correct_answer) as percentage_correct_answer, rankings.user_id'))
            ->whereBetween('rankings.created_at', [now()->startOfWeek()->format('Y-m-d'), now()->endOfWeek()->format('Y-m-d')])
            ->limit(5)
            ->orderby('percentage_correct_answer', 'desc')
            ->groupBy('rankings.user_id')
            ->get();

        $weekRankingData = [
            'percentage_correct_answer' => $weekRanking->pluck('percentage_correct_answer')->all(),
            'name' => $weekRanking->pluck('user.name')->all(),
        ];

        $monthRanking = Ranking::with('user')
            ->select(DB::raw('MAX(rankings.percentage_correct_answer) as percentage_correct_answer, rankings.user_id'))
            ->whereBetween('rankings.created_at', [now()->startOfMonth()->format('Y-m-d'), now()->endOfMonth()->format('Y-m-d')])
            ->limit(5)
            ->orderby('percentage_correct_answer', 'desc')
            ->groupBy('rankings.user_id')
            ->get();

        $monthRankingData = [
            'percentage_correct_answer' => $monthRanking->pluck('percentage_correct_answer')->all(),
            'name' => $monthRanking->pluck('user.name')->all(),
        ];

        $totalRanking = Ranking::with('user')
            ->select(DB::raw('MAX(rankings.percentage_correct_answer) as percentage_correct_answer, rankings.user_id'))
            ->limit(5)
            ->orderby('percentage_correct_answer', 'desc')
            ->groupBy('rankings.user_id')
            ->get();

        $totalRankingData = [
            'percentage_correct_answer' => $totalRanking->pluck('percentage_correct_answer')->all(),
            'name' => $totalRanking->pluck('user.name')->all(),
        ];

        return ['weekRankingData' => $weekRankingData, 'monthRankingData' => $monthRankingData, 'totalRankingData' => $totalRankingData];
    }

    /**
     *
     * クイズ終了ボタンクリック時アクション
     * @return
     */
    public function insertRanking(Request $request)
    {
        if (auth('api')->user()) {
            // ユーザーがログイン中であればスコアをInsert
            $correctRatio = $request->input('correctRatio');
            $this->ranking->insertScore((int) $correctRatio * 10, auth('api')->user()->id);
        }
    }
}
