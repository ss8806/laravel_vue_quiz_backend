<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Quiz;

class QuizController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->input('categories'); // categoriesをリクエストから取得する
        if ($category) {
            $category = explode(',', $category); // stringで受け取るので arrayに変換する
        } else {
            return []; // categoriesが何もなければ 空の配列を返却
        }

        $quiz = Quiz::with(['answer', 'category']) // withを用いて、関連するテーブルも取得可能です
            ->wherein('quizzes.categories_id', $category)
            ->inRandomOrder()
            ->limit(10)
            ->get();

        return $quiz;
    }
}
