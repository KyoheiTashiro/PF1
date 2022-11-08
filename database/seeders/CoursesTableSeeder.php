<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courses')->delete();
        
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'api_keyword' => 'sodegaura',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 1,
                'keyword' => '袖ヶ浦',
                'location' => '千葉県',
                'name' => '袖ヶ浦フォレストレースウェイ',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'api_keyword' => 'mihama',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 2,
                'keyword' => '美浜',
                'location' => '愛知県',
                'name' => '美浜サーキット',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'api_keyword' => 'tsukuba',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 3,
                'keyword' => '筑波',
                'location' => '茨城県',
                'name' => '筑波サーキット',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'api_keyword' => 'nikko',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 4,
                'keyword' => '日光',
                'location' => '栃木県',
                'name' => '日光サーキット',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'api_keyword' => 'suzuka',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 5,
                'keyword' => '鈴鹿',
                'location' => '三重県',
                'name' => '鈴鹿サーキット フルコース',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'api_keyword' => 'suzuka_south',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 6,
                'keyword' => '鈴鹿サーキット南コース',
                'location' => '三重県',
                'name' => '鈴鹿サーキット 南コース',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'api_keyword' => 'motegi',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 7,
                'keyword' => 'もてぎ',
                'location' => '栃木県',
                'name' => 'モビリティリゾートもてぎ',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'api_keyword' => 'fsw',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 8,
                'keyword' => '富士',
                'location' => '静岡県',
                'name' => '富士スピードウェイ',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'api_keyword' => 'okayama',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 9,
                'keyword' => '岡山',
                'location' => '岡山県',
                'name' => '岡山国際サーキット',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'api_keyword' => 'sugo',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 10,
                'keyword' => 'SUGO',
                'location' => '宮城県',
                'name' => 'スポーツランドSUGO',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'api_keyword' => 'autopolis',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 11,
                'keyword' => 'オートポリス',
                'location' => '大分県',
                'name' => 'オートポリス',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'api_keyword' => 'takata',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 12,
                'keyword' => 'タカタ',
                'location' => '広島県',
                'name' => 'TSタカタサーキット',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'api_keyword' => 'houdaigi',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 13,
                'keyword' => '宝台樹',
                'location' => '群馬県',
                'name' => '宝台樹スキー場 駐車場',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}