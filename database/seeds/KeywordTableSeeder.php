<?php

use Illuminate\Database\Seeder;

class KeywordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keywords')->truncate();

        DB::table('keywords')->insert([

            [
                'initial' => 'こ',
                'keyword' => 'ご清栄（せいえい）',
                'description' => '相手の繁栄などを祝う挨拶の言葉。',
                'categories_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'こ',
                'keyword' => 'ご隆昌（りゅうしょう）',
                'description' => '非常に栄えること。勢いの盛んなこと。（＝隆盛）',
                'categories_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'こ',
                'keyword' => 'ご清祥（せいしょう）',
                'description' => '相手が幸福に暮らしていることを祝う意で用いる語。',
                'categories_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'こ',
                'keyword' => 'ご健勝（けんしょう）',
                'description' => '体が丈夫で元気なさま。すこやか。（個人宛てに用いる）',
                'categories_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'こ',
                'keyword' => 'ご厚情（こうじょう）',
                'description' => 'あついなさけ。思いやりのある心。（＝厚志・厚意）',
                'categories_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'こ',
                'keyword' => 'ご懇情（こんじょう）',
                'description' => '真心のこもった心遣い。親切な心。',
                'categories_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'こ',
                'keyword' => 'ご高配（こうはい）',
                'description' => '相手を敬ってその心配りをいう語。',
                'categories_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'こ',
                'keyword' => 'ご高承（こうしょう）',
                'description' => '相手の承知・承認を敬っていう語。',
                'categories_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'こ',
                'keyword' => 'ご愛顧（あいこ）',
                'description' => 'ひいきにすること。目をかけること。「ご愛顧」の形で、目をかけられる側が用いる。',
                'categories_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'こ',
                'keyword' => 'ご芳情（ほうじょう）',
                'description' => '他人の親切な心遣いや気持ちを敬っていう語（＝芳志）',
                'categories_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'S',
                'keyword' => 'SEO',
                'description' => 'SEO（Search Engine Optimization）は、サーチエンジン最適化と訳され、検索エンジンで特定のキーワードで検索されたときに、対象のサイトが検索結果上位に表示されるようにWEBサイトの記述や設計を工夫する手法。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'S',
                'keyword' => 'SQLインジェクション',
                'description' => 'アプリケーションのセキュリティ上の不備を意図的に利用し、アプリケーションが想定しないSQL文を実行させることにより、データベースシステムを不正に操作する攻撃方法のこと。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'S',
                'keyword' => 'SSL',
                'description' => 'インターネット上で情報を暗号化して安全に送受信するための仕組み。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'S',
                'keyword' => 'SNS',
                'description' => 'ネットワークを通じて人と人のコミュニケーションを促進するWebサイトサービス。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'P',
                'keyword' => 'Paas',
                'description' => 'アプリケーションを稼働させるために必要なハードウェア、開発環境、ミドルウェア、OS、データベースなどの基盤（プラットフォーム）を提供するクラウドサービスのこと。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'P',
                'keyword' => 'POSシステム',
                'description' => 'スーパー、コンビニなどで在庫管理や、それに伴ってマーケティングツールとして用いられている。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'S',
                'keyword' => 'SSD',
                'description' => 'SSDとは、高速ストレージの事。高速のストレージといえばHDDがあるが、SSDはHDDのようにディスクを持たない。そのため、データの読み書きの際に読み取り装置をディスク上で移動させる時間や、ディスク上の目的のデータがヘッド位置まで回転してくる時間が存在しないので、HDDと比較しても更に高速のストレージとなっている',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'G',
                'keyword' => 'GUI',
                'description' => 'グラフィカルユーザインターフェース(Graphical User Interface)の略語。コンピュータへ出す命令や指示等を、ユーザが画面上で視覚的に捉えて行動を指定できるもので、それまで主流であった命令文を入力して実行する方式(CUI)に比べ、直感的に操作できるのが特長。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'O',
                'keyword' => 'OS',
                'description' => 'オペレーティング・システム (Operating System) の略で、コンピューターの根幹部分で動作して各アプリケーションに共通インターフェースを提供するソフトウェアのことである。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'L',
                'keyword' => 'Linux',
                'description' => '誰もが利用・複製・改変・再配できるUNIX互換のOS(オペレーションシステム)。1991年に、当時フィンランドのヘルシンキ大学に通う学生のリーナス・トーバルズ氏が既存のソースを使うことなく開発され、無償でソースコードが公開されているオープンソースとなっている。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'L',
                'keyword' => 'LAN',
                'description' => 'ローカルネットワークの略語。家庭内や社内などのプライベートネットワークのこと。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'H',
                'keyword' => 'HTTPS',
                'description' => 'HTTPがSSLやTLSで暗号化されている状態のプロトコルを指す。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'F',
                'keyword' => 'Firefox',
                'description' => 'Mozilla Foundationが開発したオープンソースのWebブラウザで、2004年に登場して以来、世界で最もよく使われているWebブラウザのひとつである。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'G',
                'keyword' => 'Google Chrome',
                'description' => 'Googleが開発しているウェブブラウザである。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'I',
                'keyword' => 'Internet Explorer',
                'description' => 'マイクロソフトが開発するウェブブラウザである。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'あ',
                'keyword' => 'アフィリエイト',
                'description' => 'ホームページやブログなどに広告を掲載して報酬をもらう仕組み。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'E',
                'keyword' => 'Eコマース',
                'description' => 'インターネットなどのネットワークを利用して、契約や決済などを行う取引形態のこと。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'C',
                'keyword' => 'CUI',
                'description' => 'キーボードに入力されるコマンドによって、オペレーティング・システム上の操作を行う、ユーザーインターフェースの事を言う。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'A',
                'keyword' => 'android',
                'description' => 'グーグル社が提供するオペレーティング・システム(OS)の一つであり、主にスマートフォンやタブレットで使用されている。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'I',
                'keyword' => 'iOS',
                'description' => '主にアップル社製のスマートフォン「iPhone」シリーズに搭載されているオペレーティング・システム(OS)のこと。他にもiPod touchやiPadなど、アップル社製の製品に搭載されている。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'く',
                'keyword' => 'クロスサイトスクリプティング',
                'description' => 'Webサイトでキーワードを入力する欄にスクリプト 含んだタグを打ち込むと、そのサーバの脆弱性の度合いによって、 cookieを取得できたり、第三者に意図しないデータを取得される など情報を他人に引き抜かれること。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'く',
                'keyword' => 'クラッカー',
                'description' => '他人のシステムを不正に使用したり、それを破壊する目的でネットワークに侵入し、データやプログラムを改変したり、盗み見したり、破壊するなど 犯罪行為をするひとのこと。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'B',
                'keyword' => 'BIOS(ばいおす)',
                'description' => 'Basic Input/Output Systemの頭文字をとった略語。パソコンに接続された機器の入出力(インプット・アウトプット)を管理・制御するソフトウェアのことを言う。マザーボードに取り付けられたCPUやメモリ、HDDなどのドライブ類等、色々な機器とOSの間を橋渡しする役割を果たす。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'D',
                'keyword' => 'DoS攻撃',
                'description' => '「サービス妨害攻撃」「サービス不能攻撃」「サービス拒否攻撃」と訳され、Webサイトやシステムに大量のリクエストや巨大なデータを送ることでトラフィックを増大させ、システムダウン、サービス停止に陥らせることを目的とする不正アクセス攻撃のひとつである。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'J',
                'keyword' => 'jpeg',
                'description' => '静止画像データの圧縮方式の一つ。 圧縮するときに、ある程度の画像劣化を許容する方式と全く劣化のない方式を選ぶことができる。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'K',
                'keyword' => 'KVMスイッチ',
                'description' => '複数のコンピュータを一組のキーボード、ディスプレイ、マウスから操作できるようにするための接続機器のこと。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'M',
                'keyword' => 'MySQL',
                'description' => 'Oracle社が提供しているオープンソースのデータベースシステムの一つ。Microsoft社のAccessと同じデータベースソフトではあるが、MySQLはphpとの相性が良く、大容量かつ高速で動作するため、使いやすいという点が大きな特徴である。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'N',
                'keyword' => 'NAS',
                'description' => 'ネットワークを使うストレージのこと。ＮＡＳを導入することにより各々のＰＣデータを一括で管理することが可能。そのためメリットとしては運用管理の容易化、接続性のリスト回避、コスト削減等が挙げられる。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'Q',
                'keyword' => 'QoS',
                'description' => 'クオリティーオブサービスの略語。ネットワーク上での「サービス品質」、具体的には、通信帯域の予約と通信速度の保証をする技術の事を指す。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'R',
                'keyword' => 'RAM',
                'description' => 'コンピュータの記憶装置に使われる、半導体素子利用の記憶装置のこと。 RAMはデータの読み書きを電気的に行なうため非常に高速だが、容量あたりの価格が高い為、大量には使用できない。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'T',
                'keyword' => 'TCP/IP',
                'description' => 'インターネットで世界共通に使われている通信規約（プロトコル）の事。（トランスミッション・コントロール・プロトコル/インターネット・プロトコル）の略で「ティーシーピーアイピー」と呼ぶ。 TCPはトランスポート層のプロトコル（送信するデータをパケットにし目的地でくっつけもとに戻す方法の規約）、 IPはネットワーク層のプロトコル（ルーティングの方法の規約）を指し示す。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'U',
                'keyword' => 'UNIX',
                'description' => 'マルチタスク、マルチユーザを実現したオペレーティングシステム（OS）の1種。UNIXをベースにした多くの派生OS含む総称として使われることもある。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'V',
                'keyword' => 'VPS',
                'description' => '物理的なサーバを提供する「レンタルサーバ」や「ホスティング」に対して、仮想サーバを提供する「仮想専用サーバサービス」のこと。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'W',
                'keyword' => 'Windows',
                'description' => 'マイクロソフトが開発・販売しているOS(オペレーティング・システム)。主にPC用のOSとして普及している。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'W',
                'keyword' => 'WordPress',
                'description' => 'オープンソース(誰でも使うことができる)で提供しているCMSの一種。トップページ・カテゴリーページ・記事ページといった基本的なブログのサイト構造を初めから持っているため、Web制作の知識がなくてもブログサイトを簡単につくることができる。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'X',
                'keyword' => 'XML',
                'description' => 'データの記述言語における規格。Webで公開するページを作成する際に扱う。HTMLと違って、XMLはあらゆるコンピュータシステムへ適応でき、ユーザーがデータの構造を自由に定義できるので、あらゆるデータの自由処理が可能。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'Y',
                'keyword' => 'YouTube',
                'description' => '米YouTube社が運営している、無料動画共有サイトのこと。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'あ',
                'keyword' => 'アイスブレイク',
                'description' => '研修用語として用いられる言葉。研修のスタート時などにおいて、受講者の緊張を解き、リラックスしてもらうことをいう。互いに自己紹介を行ったり、簡単なゲームを行ったりするのもアイスブレイクのひとつ。',
                'categories_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'あ',
                'keyword' => 'アポイントメント',
                'description' => '相手先との会合・面談の約束。アポと略されることも多い。テレアポ（テレホンアポイントメント）は電話で商談や面談の約束を取りつける行為に使われている。',
                'categories_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'い',
                'keyword' => 'インフレーション',
                'description' => '物価水準が長い期間にわたって持続的に上昇することをいう。市場において、貨幣の発行量が必要以上に増加した時に起こる。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'い',
                'keyword' => 'イノベーション',
                'description' => '一般に技術革新、または革新のこと。オーストリアの経済学者シュンペーターは、イノベーションを「新結合の遂行」と定義し、資本主義経済における経済発展の主要因であるとした。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'い',
                'keyword' => 'インセンティブ',
                'description' => '意欲向上や目標達成のための刺激策。個人が行動を起こすときの内的欲求（動因：ドライブ）に対して、その欲求を刺激し、引きだす誘因（インセンティブ）を指している。企業は、自社の従業員を動機づけるためだけでなく、販売店の販売意欲や消費者の購買意欲を駆り立てる目的でも用いられる。具体的には、報奨金、表彰、景品などの形をとる。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'E',
                'keyword' => 'eラーニング',
                'description' => '一般に、インターネットを使った遠隔地教育のことを指す。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'い',
                'keyword' => 'インターンシップ',
                'description' => '在学中の学生が、一定期間、自分の専攻やキャリアプランに基づいて、企業で実際に職場体験を積む制度。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'え',
                'keyword' => '演繹法(えんえきほう)',
                'description' => '前提となる事柄をもとに、そこから確実に言える結論を導き出す推論法のこと。帰納法の対義語で、演繹的推論ともよばれる。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'か',
                'keyword' => 'カルテル',
                'description' => '企業連合といわれる。同業種またはそれに近い企業同士が、互いに競争を避け利益を確保するために、協定や合意を行うこと。何について競争を制限するかによって、価格カルテル、生産カルテル、販売カルテル、入札談合などに区別される。わが国では、カルテルは消費者利益を損なうことから独占禁止法によって禁止されている。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'か',
                'keyword' => '環境アセスメント',
                'description' => '環境影響評価。地域開発や公共事業など、環境に大きな影響を及ぼす可能性がある計画については、事前に自然への影響度の調査・予測・評価を行い、自然環境の破壊を未然に防ごうというもの。科学的な調査を行うと同時に、地域住民の意見も反映させる。日本においては、1997年に環境影響評価法（環境アセスメント法）が制定された。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'き',
                'keyword' => '帰納法(きのうほう)',
                'description' => '類似の事例をもとにして、一般的法則や原理を導き出す推論法のこと。演繹法の対義語で、帰納的推論ともよばれる。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'く',
                'keyword' => 'クーリング・オフ制度',
                'description' => '消費者が、ある商品やサービスの購入契約を行った場合、一定期間以内ならば、無条件で契約の取消・撤回が認められる制度。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'け',
                'keyword' => '謙譲語',
                'description' => '敬語の分類の1つで、自分の行為や持ち物を低めて表現することで、相手に対する敬いの感情や姿勢を表す方法。主には、自分自身、自分の側にいる人、自分が所属する組織の行為や持ち物などに用いるが、話の相手に対する第三者の行為に用いて相手を高めたり、話の中のある登場人物に対する第三者の行為に用いてその関係を表現したりもする。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'そ',
                'keyword' => '尊敬語',
                'description' => '敬語の分類の1つで、相手の行為、持ち物、状態などを高めて表現することで、相手に対する敬いの感情や姿勢を表す方法。話の聞き手や読み手に対してだけでなく、話の中に出てくる人物に対しても用いる。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'け',
                'keyword' => '敬語',
                'description' => '相手に対して「敬い」や「へりくだり」などを含む感情や姿勢を表す表現方法。また、「敬い」や「へりくだり」の表現を用いて、話の中に出てくる人物と相手や自分の上下関係や登場人物同士の上下関係を表現する際にも用いる。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'て',
                'keyword' => '丁寧語',
                'description' => '敬語の分類の1つで、ものや行為などを丁寧に表現することで、相手に対する敬いの感情や姿勢を表す方法。「お」「ご」などの接頭語をつけたり、語尾に「です」「ます」「ございます」などをつける表現。丁寧語は尊敬語や謙譲語とは違い、相手のことか自分や自分の側のことかなどを意識することなく、幅広くいろいろな人やものに使うことができる。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'さ',
                'keyword' => '三六協定(さんろくきょうてい/さぶろくきょうてい)',
                'description' => '時間外休日労働について、使用者が労働組合（または労働者の過半数を代表する者）との間で締結する労使協定をいう。これを締結し所轄労働基準監督署長に届け出ない限り、使用者は労働者に時間外労働や休日労働を命じることはできない。労働基準法36条にその定めがあることから、三六協定といわれる。',
                'categories_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'し',
                'keyword' => '時間外手当',
                'description' => '会社の所定労働時間を超える時間外の勤務に対して支給される手当。月給制の場合、毎月の給与から時間単価を求め、超過した時間に応じた金額が支給される。法令では、1日8時間または1週40時間を超える勤務については、時間単価に加えて0.25の割増が義務づけられている。また、22時から翌朝5時までの深夜に勤務した場合は0.25、休日の勤務については0.35の割増賃金が支給される。',
                'categories_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'し',
                'keyword' => '時間外労働',
                'description' => '決められた労働時間を超えて働くこと。労働基準法では、1日8時間、1週40時間の法定労働時間を超えた勤務をさす。企業が法定労働時間を超えた勤務を命じるためには、従業員の代表と三六協定を締結し、労働基準監督署に届け出ておく必要がある。それにより、企業はその協定の範囲で時間外労働を命じることができるが、届け出なく時間外労働を命じたり、協定の範囲を超えた労働を命じると刑事罰の対象となる。',
                'categories_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'し',
                'keyword' => '社会保険',
                'description' => '健康保険・厚生年金保険・雇用保険・労災保険のように、国が法律である一定の条件に当てはまる職域・地域の人々に強制的に適用する。不慮の事態の際の労働者とその家族の生活安定が目的で、費用は政府・使用者・労働者の三者が負担する。',
                'categories_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'し',
                'keyword' => '就業規則',
                'description' => '賃金や労働時間、休暇などの労働条件や、働くうえでのルールを取り決めたもの。常時10人以上の労働者を使用する場合、使用者は必ず作成し、労働基準監督署長に届け出なければならない。また、変更に際しては労働者に意見を聴取すること、就業規則を周知させることも義務づけられている。 なお、労働基準法や労働協約に反する就業規則は無効となる。',
                'categories_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'し',
                'keyword' => '紹介予定派遣',
                'description' => '就職を希望する人材と、採用を予定している企業とを引き合わせ、社員雇用を前提として人材派遣を行うこと。一定の契約期間を派遣労働者として働いた後、労使双方の合意の上で採用が決定される。この紹介予定派遣は、労働者派遣事業と職業紹介事業の両方の許可を受けた派遣会社のみが行える。また、労働者派遣法で禁止されている職種については行うことができない。',
                'categories_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'す',
                'keyword' => 'スタグフレーション',
                'description' => 'スタグネーション（停滞）とインフレーションを合わせた言葉。景気が停滞している状況下で、同時にインフレーション（物価上昇）が起こる現象をいう。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'す',
                'keyword' => 'スパム',
                'description' => 'ある個人や企業が受信者の意思とは無関係に入手したメールアドレスにあてて、無差別に大量送信する電子メッセージのこと。メールで送られることが多く、「迷惑メール」とも呼ばれる。スパムの目的は主に広告であり、受信者に何らかの商品を買わせようとしたり、何らかの契約にサインを求めるものである。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'せ',
                'keyword' => '正社員',
                'description' => '正社員とは、従業員のうち雇用契約上で特別の取り決めなく雇用された社員をさす。ただし、法律上の用語でないため、特別な定義があるわけではなく、一般的には雇用期間の定めがないこと、よって解雇が厳しく制限されていること、原則としてフルタイムで勤務し三六協定の範囲で残業も義務づけられていることなどがその特徴としてあげられる。',
                'categories_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'せ',
                'keyword' => 'セクシャル・ハラスメント',
                'description' => '性的な言動による嫌がらせ行為。略してセクハラという。相手の意に反して、性的な言動によって相手に不利益を与えたり、相手が不快に感じる行為を行うとセクハラに該当する。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'そ',
                'keyword' => 'ソフトウェア',
                'description' => 'コンピュータが動作するために必要な電子上の指示や命令の集まり。物理的な機器や設備であるハードウェアに対して、その利用技術のことを指す。それ自体は触れることができないものであり、CDやDVDなどのメディアに記録されて流通する。ソフトと略されることが多く、プログラムの別名として用いられることもある。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'た',
                'keyword' => 'ダイバーシティ',
                'description' => '多様な人材を積極的に活用しようという考え方のこと。もとは、社会的マイノリティの就業機会拡大を意図して使われることが多かったが、現在は性別や人種の違いに限らず、年齢、性格、学歴、価値観などの多様性を受け入れ、広く人材を活用することで生産性を高めようとするマネジメントについていう。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'た',
                'keyword' => 'ダンピング',
                'description' => '採算を度外視し、適正な仕入原価を大きく下回る価格で販売することにより、公正な市場競争を破壊する活動のこと。独占禁止法により禁じられている。',
                'categories_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'ち',
                'keyword' => '著作権',
                'description' => '著作者が、その著作物を自分の財産として独占的に利用できる権利。著作者は、著作物を複製・頒布することで利益を得ることができる。また、他者による無断複製や利用を制約できる。対象となる著作物とは、思想や感情を創作的に表現したもので、出版物や音楽、映像、美術品、建築、プログラムなど多岐にわたる。著作権は著作物を創作した時点で発生し、死後50年間有効となる。',
                'categories_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'て',
                'keyword' => 'データマイニング',
                'description' => 'マイニングとは、もともとは鉱山の採掘の意味。膨大な取引データの中から、有用な傾向や規則性を見いだすことをいう。この成果は、マーケティング政策や与信管理などに応用される。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'て',
                'keyword' => 'デジタル・デバイド',
                'description' => '直訳すると情報格差。インターネットやパソコン等の情報技術を使える人と使えない人との間に、情報の格差が生じている状態をいう。この情報格差は経済的・社会的な格差をもたらしている。また年齢、性別、教育などによる個人間の問題だけでなく、企業間や都市間、国家間においても情報格差が広がりつつあり、社会問題となっている。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'て',
                'keyword' => 'デファクト・スタンダード',
                'description' => '「事実上の標準」と訳される。 JISやISOのように、公的機関によって公式に定められた標準ではなく、民間企業における独自の製品や規格が、事実上その業界の標準として通用していることをいう。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'て',
                'keyword' => 'デフレーション',
                'description' => '物価水準が継続的に下降する現象のこと。市場における総需要に対し総供給が過剰な状態となり、一般に不況を伴う。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'と',
                'keyword' => '独占禁止法',
                'description' => '「私的独占の禁止及び公正取引の確保に関する法律」の略称。通称、独禁法。企業間の自由競争を維持することで、市場の健全な発展と消費者利益の保護をめざす法律。私的独占、不当な取引制限、不公正な取引方法などを禁止し、不正行為があった場合は公正取引委員会によって審査される。',
                'categories_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'な',
                'keyword' => 'ナショナルブランド',
                'description' => '全国的に販売され認知されている商品のブランドのこと。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'ふ',
                'keyword' => 'プライベートブランド',
                'description' => 'スーパーや百貨店などの流通業者が、メーカーに拠らず自主的に設定した商標のこと。消費者にとっては比較的割安で、店にとっては利ざやが大きい。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'に',
                'keyword' => 'ニート',
                'description' => 'Not in Employment, Education or Trainingの略で、「職に就いていず、学校機関に所属もしていず、そして就労に向けた具体的な動きをしていない」人のこと。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'の',
                'keyword' => 'ノウハウ',
                'description' => '企業の活動に必要な生産・経営・管理・技術などに関する知識・経験の情報。新しい(独自の)技術やマーケティングテクニックなどもノウハウである。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'ね',
                'keyword' => '年末調整',
                'description' => '給与の支払者は、従業員である給与所得者について、毎月の給与から所得税分を徴収（源泉徴収）し、個人に代わって所得税を申告している。 しかし、月々の源泉徴収額の総額と、年収に対する所得税額は必ずしも一致しない。年末の給与支払い時に、この所得税の過不足分を精算する手続きが年末調整である。',
                'categories_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'は',
                'keyword' => 'ハードウェア',
                'description' => 'コンピュータシステムを構成している物理的要素。hardwareは英語で「金物、固い品物」の意味ももつが、パソコンに関しては触れることができる部分のこと。キーボード・マウス・プリンタ・スキャナ・ディスプレイ・ハードディスクなど個々の装置や機器を指す場合と、それらを総称して呼ぶ場合とがある。入力や出力、演算処理や記録などの機能をもつ。コンピュータシステム以外でも、テレビやDVDプレーヤー、iPodなどもハードウェアと呼ばれる。より広い文脈では、社会的活動が行われる構造物を意味し、道路や空港・港湾施設や公共建造物、室内設備などを指す場合もある。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'は',
                'keyword' => '派遣社員',
                'description' => '派遣会社と雇用契約を結び、派遣先企業の指揮命令下で働く労働者のこと。1999年12月より施行された『改正労働者派遣法』によって派遣対象業務が原則自由化され、2003年の改正によってさらに対象業務が拡大、派遣の期間制限も緩和された。',
                'categories_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'は',
                'keyword' => 'ハッカー',
                'description' => 'コンピューターへの造詣が深く、操作技術に精通した人のこと。本来ハッカーという言葉はそうした人への尊称であったが、その優れた技術を悪用し、他人のコンピューターに侵入して違法行為をはたらく人をハッカーと呼んでいるケースも見られる',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'は',
                'keyword' => 'パネルディスカッション',
                'description' => '公開討論会の１つ。あるテーマについて、まず数人の専門家が代表者（パネル、パネラー）として選出され、司会者のコーディネートのもとに、聴衆の前で討議を行う。その後、聴衆も参加して、意見交換や質疑応答が行われる、という方式。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'は',
                'keyword' => 'ハラスメント',
                'description' => '一般にいろいろな場面での「嫌がらせ」や「いじめ」などの行為をさす。その行為を行う人が意図したかどうかにかかわらず、相手に対し不快にさせたり、不利益や損害を与えたり、尊厳を傷つけたりした場合、ハラスメントとみなされる。企業内での代表的なハラスメントとしては、セクシャル・ハラスメント、モラル・ハラスメント（パワー・ハラスメント）、アルコール・ハラスメントなどがある。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'は',
                'keyword' => 'パワー・ハラスメント',
                'description' => '職務上の立場や権限を背景にした、いじめや嫌がらせ行為を指す。略してパワハラ、あるいはボスハラ（ボス・ハラスメント）と呼ばれる。岡田康子氏による造語で、欧米ではモラル・ハラスメントという。パワハラには、退職強要や不当な評価のほか、言葉や態度による暴力や嫌がらせ、叱責、無視、冷遇、残業の執拗な強要や強制的な飲み会への誘いなども含まれる。通常の指示や命令との境界は、その指示や命令に業務上の正当性があるかどうかが判断基準となる。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'ひ',
                'keyword' => '非正規社員・非正規雇用',
                'description' => '非正規社員とは、一般的には正規雇用ではない人をいう。また、非正規雇用とは正社員としての雇用形態以外で働く形態をさす。具体的には、契約社員、嘱託社員、準社員、臨時社員、季節社員、パートタイマー、アルバイト、派遣社員、請負社員などが非正規社員にあたる。',
                'categories_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'ふ',
                'keyword' => 'ファイアウォール',
                'description' => '防火壁のこと。ネットワーク上のファイアウォールとは、セキュリティを確保するためのしくみのこと。外部への安全なアクセスを実現し、また外部からの不正なアクセスを防ぐ役目を果たす。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'ふ',
                'keyword' => 'フィランソロピー',
                'description' => '慈善活動の訳。最近では企業の社会的な貢献活動、福祉活動のことをいう。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'ふ',
                'keyword' => 'ブルートゥース',
                'description' => '携帯電話やノートパソコンなどのデジタル機器を、近距離内において無線接続するための通信技術で、ブルートゥースはそのコードネーム。',
                'categories_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'ふ',
                'keyword' => 'ブレーンストーミング',
                'description' => 'アイデアを創造する技法の１つ。集団（グループ）で行うもので、あるテーマに対し、各人が思いつくままにアイデアを出し合っていき、後でアイデアを整理しまとめあげるというもの。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'は',
                'keyword' => 'バリアフリー',
                'description' => '障害物（バリア）を取り除く（フリー）という意味。住宅内や地域社会において、障害者や高齢者にとっての障害を取り除き、暮らしやすい環境を実現していこうという考え方。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'ひ',
                'keyword' => 'ビルトイン・スタビライザー',
                'description' => '景気の変動を自動的に安定化させるしくみのこと。「ビルトイン」とは、国の財政構造にあらかじめ組み込まれているという意味であり、「スタビライザー」とは安定装置を意味する。そのため自動安定化装置とも訳される。たとえば、所得税などの累進課税制度や雇用保険による失業等給付などの社会保障制度がこれに当てはまる。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'へ',
                'keyword' => '平均賃金',
                'description' => '労災の休業給付や解雇手当などを計算する際に、算定基準として用いる賃金額をいう。労働基準法第12条で「平均賃金を算定すべき事由の発生した日以前3カ月間（算定期間）にその労働者に対し支払われた賃金の総額を、その期間の総日数で除した金額をいう」と規定されている。',
                'categories_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'ほ',
                'keyword' => '法人',
                'description' => '財産を保有し、契約を結ぶことができる主体は人であるが、実際の人である自然人に対し、法律上の便宜的な概念としての人。法律上の権利能力・行為能力・財産の保有が認められた組織体。',
                'categories_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'み',
                'keyword' => 'みなし労働時間制',
                'description' => '実際に働いた時間にかかわらず、一定時間を働いたものとみなす労働時間管理の方法。営業職などの事業場外労働をしている場合や裁量労働制の社員に適用される。また、出張や外勤後に直帰する場合など、正確な時間管理がしづらい場合も終業時刻まで働いたものとみなして管理する場合がある。',
                'categories_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'も',
                'keyword' => 'モラル・ハラスメント',
                'description' => '言葉や態度による精神的な嫌がらせ行為。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'ろ',
                'keyword' => '労災保険',
                'description' => '正しくは労働者災害補償保険。労働者が、業務上または通勤途上に災害にあい、負傷、疾病、障害または死亡に至った場合、給付等の支援を行う制度。原則として、労働者を使用するすべての事業が加入しなければならない。労災保険に加入している事業所に勤務する労働者は、正社員やパートなどの雇用勤務に関係なく、すべて適用対象となる。ただし、業務執行権を持つ役員には適用されない。',
                'categories_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'ろ',
                'keyword' => '労働基準法',
                'description' => '賃金、労働時間、その他の労働条件に関して最低基準を定めた法律。',
                'categories_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'れ',
                'keyword' => 'レッド・オーシャン',
                'description' => 'レッド・オーシャンとは、競争のない新しい市場を表す「ブルー・オーシャン」に対して、競争の激しい既存の市場を指す。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'ふ',
                'keyword' => 'ブルー・オーシャン',
                'description' => '文字通りには英語で「青い海」を意味するが、経営学では「競争のない新しい市場」を指す。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'ふ',
                'keyword' => 'ブルーカラー',
                'description' => '広く技能・作業系職種一般、およびそれに従事する労働者のこと。技能工や生産工程作業、建築・土木作業、採鉱・採石作業、農林・漁業作業などの職種がこれに当てはまる。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'ほ',
                'keyword' => 'ホワイトカラー',
                'description' => '広く事務系職種一般、およびそれに従事する労働者のこと。高等教育を受けている場合が多く、経営企画・管理・営業・事務職や、技術・専門職などがこれに当てはまる。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'あ',
                'keyword' => 'アソシエーション',
                'description' => '共通の関心や目的などで集まった機能的集団。会社や非営利組織など。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'initial' => 'と',
                'keyword' => 'トラスト',
                'description' => '企業合同と訳される。複数企業が、市場競争を排除し、市場での利益を独占する目的で資本結合を行うこと。資本による支配が行われる点で、カルテルより強固な結合形態といえる。同業種間にわたる水平的合同、異業種間にわたる垂直的合同などがある。',
                'categories_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
