<?php

use Illuminate\Database\Seeder;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->truncate();

        DB::table('answers')->insert([
            [
                'answer_1' => 'Personal Computer',
                'answer_2' => 'Pocket Computer',
                'answer_3' => 'Programmable Controller',
                'answer_4' => 'Programmable Counter',
                'correct_answer_no' => 1,
                'commentary' => 'PCはPersonal Computer(パーソナルコンピュータ)の略称である。

Pocket Computer(ポケットコンピュータ)は1980年代に広く使われた携帯用の小型コンピュータである。

Programmable Controller(プログラマブル・コントローラ)はリレー回路の代替装置として開発された制御装置である。

Programmable Counter(プログラムカウンタ)はアドレスレジスタの一種で、実行する命令のアドレスを指し示すレジスタ。命令の読み込みを行なう際にはその内容がアドレスバス上に出力され、また命令を読み込む度に読み取った命令の分だけ値が増加するようになっている。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => 'アップデート',
                'answer_2' => 'アップロード',
                'answer_3' => 'インストール',
                'answer_4' => 'ダウンロード',
                'correct_answer_no' => 3,
                'commentary' => 'アプリケーションをコンピュータで使用可能にするための作業のことをインストールと言う。

アップデートはアプリケーションをコンピュータで使用可能にするための作業のこと。

アップロードはファイルをネットに上げる(アップする)こと。

ダウンロードはファイルをネットから落とすこと。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => 'PCU',
                'answer_2' => 'PCQ',
                'answer_3' => 'GPU',
                'answer_4' => 'CPU',
                'correct_answer_no' => 4,
                'commentary' => '中央処理装置とも訳されるコンピュータの情報処理の性能に影響する部分の略称はCPU(Central Processing Unit)である。

PCU・PCQは造語である。

GPU(Graphics Processing Unit)はリアルタイム画像処理に特化した演算装置ないしプロセッサである。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => 'カウンタ',
                'answer_2' => 'フロッピーディスク',
                'answer_3' => 'メモリカード',
                'answer_4' => 'ハードディスクドライブ',
                'correct_answer_no' => 4,
                'commentary' => 'ハードディスクドライブはPCに内蔵されている円盤状の磁気ディスクで情報を記録し読み出す代表的な記憶装置の一つである。

カウンタはアドレスレジスタの一種で、実行する命令のアドレスを指し示すレジスタ。

フロッピーディスク は、磁気ディスクの一種で、磁性体を塗布・蒸着した樹脂製小円盤を樹脂製の保護ケースに入れたものである。

メモリーカードとは薄型でカードのような外見の補助記憶装置である。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => 'Facebook(フェイスブック)',
                'answer_2' => 'Twitter(ツイッター)',
                'answer_3' => 'LINE(ライン)',
                'answer_4' => 'mixi(ミクシィ)',
                'correct_answer_no' => 1,
                'commentary' => 'アメリカのマーク・ザッカーバーグらによって開設された国際的なSNSはFacebook(フェイスブック)である。

Twitter(ツイッター)は140文字以内のつぶやきを投稿できるサービスである。

LINE(ライン)は韓国のIT企業ネイバーの日本法人が運営しているスマートフォン向けのSNSである。

mixi(ミクシィ).2004年にサービスが開始された日本で最初に大ヒットしたSNSである。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => 'ハンドルネーム',
                'answer_2' => 'コードネーム',
                'answer_3' => 'マイネーム',
                'answer_4' => 'ラジオネーム',
                'correct_answer_no' => 1,
                'commentary' => 'インターネット上で自分の名前の代わりに表示するニックネームはハンドルネームである。

コードネームはある事物や人物などを指す、一般にごく短い別名であるが、関係者だけなどといった特に限定された範囲でのみ、そのことを知っているような運用を目的としたものを特に指すこともある。それを明示して暗号名（あんごうめい）、秘匿名（ひとくめい）などとも言う。

マイネームは自分の名前である。

ラジオネームはニックネームの類義語である。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => 'Opera',
                'answer_2' => 'Internet Explorer',
                'answer_3' => 'Google Chrome',
                'answer_4' => 'Firefox',
                'correct_answer_no' => 2,
                'commentary' => 'Internet Explorerはマイクロソフト社製のWEBブラウザである。

Operaはノルウェーのソフトウェア開発会社、オペラ・ソフトウェア (Opera Software ASA) によって製作されているウェブブラウザである。

Google ChromeはGoogleが開発しているウェブブラウザである。

FirefoxはMozilla Foundationおよびその傘下のMozilla Corporationによって開発されているフリーかつオープンソースのウェブブラウザである。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => 'スティーブ・ジョブズ',
                'answer_2' => 'ビル・ゲイツ',
                'answer_3' => 'ポール・アレン',
                'answer_4' => 'ジョン・カーマック',
                'correct_answer_no' => 1,
                'commentary' => 'アップルの創業者はスティーブ・ジョブズである。

ビル・ゲイツ、ポール・アレンはマイクロソフトの創始者2名である。

ジョン・カーマックは伝説的なプログラマーでFPSの生みの親として知られている。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => 'ASE',
                'answer_2' => 'SEO',
                'answer_3' => 'PPC',
                'answer_4' => 'MSS',
                'correct_answer_no' => 2,
                'commentary' => '検索エンジン最適化のことをSEO対策と言う。

ASE、PPC、MSSはいずれも造語である。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => 'コピー',
                'answer_2' => '貼り付ける',
                'answer_3' => '切り取り',
                'answer_4' => 'データを上書き保存',
                'correct_answer_no' => 1,
                'commentary' => '「Ctrl＋C」はコピーである。

貼り付けるは「Ctrl＋V」。切り取りは「Ctrl＋X」。データを上書き保存は「Ctrl＋S」である。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => 'ダイオキシン',
                'answer_2' => 'VXガス',
                'answer_3' => '青酸カリ',
                'answer_4' => 'サリン',
                'correct_answer_no' => 1,
                'commentary' => '発がん性や催奇形性を有し、人類が作った最悪と呼ばれる毒物はダイオキシンである。

VXガスは強い毒性を持つ神経ガスである。1952年にイギリスで発明された。

青酸カリは最も有名な毒物のひとつであるが、発がん性や催奇形性はない。

サリンは有機リン化合物で神経ガスの一種。1995年に起きた地下鉄サリン事件で一躍有名になった。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => 'ミリテクノロジー',
                'answer_2' => 'ミクロテクノロジー',
                'answer_3' => 'マイクロテクノロジー',
                'answer_4' => 'ナノテクノロジー',
                'correct_answer_no' => 4,
                'commentary' => 'ナノテクノロジーが正解です。

ミリテクノロジー、ミクロテクノロジー、マイクロテクノロジーは造語である。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => 'イザナミ',
                'answer_2' => 'イトカワ',
                'answer_3' => 'スサノオ',
                'answer_4' => 'ニニギ',
                'correct_answer_no' => 2,
                'commentary' => 'イトカワ正解である。

イザナミ、スサノオ、ニニギはいずれも日本神話に関する名を持つ小惑星である。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => 'HST',
                'answer_2' => 'NACA',
                'answer_3' => 'NASA',
                'answer_4' => 'ISS',
                'correct_answer_no' => 3,
                'commentary' => 'NASAが正解である。

HSTはハッブル宇宙望遠鏡のことである。

NACAはNASAの母体となった組織である。

ISSは国際宇宙ステーションのことである。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => 'デフレーション',
                'answer_2' => 'インフレーション',
                'answer_3' => 'スタグフレーション',
                'answer_4' => 'スラグレーション',
                'correct_answer_no' => 1,
                'commentary' => 'デフレーションが正解である。

インフレーションは物価上昇のことを示す。

スタグフレーションは経済活動の停滞（不況）と物価の持続的な上昇が併存する状態を指す。

スラグレーションは造語である。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => '国内純生産',
                'answer_2' => '国民純生産',
                'answer_3' => '国内総生産',
                'answer_4' => '国民総生産',
                'correct_answer_no' => 3,
                'commentary' => '国内総生産が正解である。国内総生産はは、一定期間内に国内で産み出された付加価値の総額のことである。

国民純生産はNNPである。国内純生産は国民総生産から資本減耗分を差し引いたもの

国内純生産はNDPである。国内総生産から固定資本減耗を差し引いたものをいいます。

国民総生産はGNPである。国民総生産はある一定期間にある国民によって新しく生産された財（商品）やサービスの付加価値の総計である。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => 'BtoC',
                'answer_2' => 'M&A',
                'answer_3' => 'BtoB',
                'answer_4' => 'CtoC',
                'correct_answer_no' => 2,
                'commentary' => 'M&Aが正解である。M&Aとは、企業の合併や買収の総称である。

BtoCは個人顧客相手のビジネス、BtoBは法人顧客相手のビジネス、CtoC一般消費者間の取引ビジネスのことを指す。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => '相対取引',
                'answer_2' => '安定操作取引',
                'answer_3' => 'アウトサイダー取引',
                'answer_4' => 'インサイダー取引',
                'correct_answer_no' => 4,
                'commentary' => 'インサイダー取引が正解である。

安定操作取引は株式等の募集や売出しを容易にするために、主幹事証券会社等が当該銘柄について一定期間に行う市場での売買等のこと。

相対取引は証券取引所などの市場を通さずに、売り手と買い手が当事者同士で価格や売買数量などを決めて行う取引のこと。

アウトサイダー取引は外部との取引なので問題はない。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => '保護貿易主義',
                'answer_2' => 'ブロック経済',
                'answer_3' => 'マクロ経済',
                'answer_4' => 'ミクロ経済',
                'correct_answer_no' => 1,
                'commentary' => '保護貿易主義が正解である。

ブロック経済とはお金や物資の流通を自国および植民地間に限定する政策を指す。

マクロ経済とは経済学の一種で、個別の経済活動を集計した一国経済全体を扱うものである。

ミクロ経済とは個々の経済主体，たとえば家計や企業の行動原理に基づいてさまざまな財をどのくらい生産し、個々の経済主体にどのように配分するかという、資源の最適配分メカニズムを分析するものである。マクロ経済学と対をなす。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => 'フィランサス',
                'answer_2' => 'フィラメント',
                'answer_3' => 'フィランソロピー',
                'answer_4' => 'フィルバインド',
                'correct_answer_no' => 3,
                'commentary' => 'フィランソロピーが正解である。

フィランサスは塊根植物を指す。

フィラメントは電球・真空管などの内部にあり、電流を流して熱電子を放出する、細い線。

フィルバインドは造語である。

',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'answer_1' => '部屋に入ったら、お盆をサイドテーブルに置きます。',
                'answer_2' => 'お茶を両手で持って「失礼します」と一言添えながら差出します。',
                'answer_3' => '上座に座っているお客様から順に、左側からお茶を出します。',
                'answer_4' => 'お茶を出すタイミングは、お客様と担当者の挨拶が終わった頃。',
                'correct_answer_no' => 3,
                'commentary' => '「左側」が間違いです。お茶は「右側」から出すのが正解です。ただし、どうしても右側から出せない場合は左側からでも大丈夫です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
