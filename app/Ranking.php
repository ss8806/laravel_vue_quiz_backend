<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    protected $table = 'rankings';
    // モデルのプロパティ(ここではpercentage_correct_answerとuser_id)に値を代入してモデルのsaveメソッドで値をInsertします。
    public function insertScore(int $correctRatio, int $userId)
    {
        $ranking = new Ranking();
        $ranking->percentage_correct_answer = $correctRatio;
        $ranking->user_id = $userId;
        $ranking->save();
    }
    // RankingモデルがUserモデルに対して属しているリレーションの設定
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
