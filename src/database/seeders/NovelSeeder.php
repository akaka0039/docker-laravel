<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NovelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('novels')->insert([
            [
                'novel_id' => 1,
                'user_id' => 1,
                'novel_title' => "ワンピース",
                'novel_information' => "一つの秘宝を求める物語",
                'good_point' => 56,
            ],
            [
                'novel_id' => 2,
                'user_id' => 2,
                'novel_title' => "大きな栗の木下",
                'novel_information' => "ここに説明文が入ります",
                'good_point' => 0,
            ],
            [
                'novel_id' => 3,
                'user_id' => 1,
                'novel_title' => "何度でも何度でも",
                'novel_information' => "何度でも頑張る",
                'good_point' => 10000,
            ],

            [
                'novel_id' => 4,
                'user_id' => 1,
                'novel_title' => "テストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよ",
                'novel_information' => "テストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよテストだよ",
                'good_point' => 10000000,
            ],

            [
                'novel_id' => 5,
                'user_id' => 1,
                'novel_title' => "テスト小説 English",
                'novel_information' => "small size literally",
                'good_point' => 10,
            ],

            [
                'novel_id' => 6,
                'user_id' => 1,
                'novel_title' => "テスト小説",
                'novel_information' => "レイアウト確認
                改行等確認
                しっかり改行されているか確認すること",
                'good_point' => 10000,
            ],



        ]);
    }
}
