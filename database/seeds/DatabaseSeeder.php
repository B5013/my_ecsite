<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $now = Carbon::now();


    $PS4 = [
            "name" => "PS4",
            "co" => "SONY",
            "img" => "images/ps4.jpg",
            "comment" => "高いパフォーマンスがもたらす刺激的なゲームプレイ",
            "price" => 28000,
            "postage" =>"送料無料",
            "lncludeditems" => "プレイステーション 4 × 1, ワイヤレスコントローラー(DUALSHOCK4) ジェット・ブラック (CUH-ZCT2J) × 1, モノラルヘッドセット× 1, 電源コード× 1, HDMIケーブル× 1, USBケーブル× 1",
            "created_at" => $now,
            "updated_at" => $now
        ];

    $Wiiu = [
            "name" => "WiiU",
            "co" => "任天堂",
            "img" => "images/wiiu.jpg",
            "comment" => "自由な場所、自由な姿勢で。GamePadだけでゲームを遊ぶ。",
            "price" => 18000,
            "postage" =>"送料無料",
            "lncludeditems" => "Wii U GamePad（shiro） 1台 ※タッチペン含む,
Wii U GamePad 充電スタンド 1個,
Wii U GamePad プレイスタンド 1個,
Wii U 本体縦置きスタンド,
（shiro） 1セット,
HDMIケーブル 1本,
Wii U本体 ACアダプター 1個,
Wii U GamePad ACアダプター 1個",
            "created_at" => $now,
            "updated_at" => $now
        ];

    $PS3 = [
            "name" => "PS3",
            "co" => "SONY",
            "img" => "images/ps3.jpg",
            "comment" => "ハイビジョン・高精細で圧倒的なリアリティ",
            "price" => 24000,
            "postage" =>"送料無料",
              "lncludeditems" => "PlayStation3本体に「ワイヤレスコントローラ(DUALSHOCK3)」1点、電源コード1点、AVケーブル1点、USBケーブル1点が付属します",
            "created_at" => $now,
            "updated_at" => $now
        ];

    $DS = [
            "name" => "3DS",
            "co" => "任天堂",
            "img" => "images/3DS.jpg",
            "comment" => "3Dで広がるゲーム体験。",
            "price" => 20000,
            "postage" =>"送料無料",
            "lncludeditems" => "Newニンテンドー3DS LL本体1台,専用タッチペン1本,microＳＤＨＣメモリーカード（4ＧＢ）1個,ARカード6枚,かんたんスタートガイド,取扱説明書,保証書《注意》 ACアダプターは別売です。",
            "created_at" => $now,
            "updated_at" => $now
        ];




        DB::table('product')->insert([$PS4,$Wiiu,$PS3,$DS]);



        // $this->call(UsersTableSeeder::class);
    }
}
