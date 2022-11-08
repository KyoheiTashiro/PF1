<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            0 => 
            array (
                'course_id' => 8,
                'created_at' => '2022-05-30 22:52:02',
                'date' => '2022-01-09',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 282,
                'name' => '富士スピードウェイ走行会',
                'organizer' => 'ジャパンレーシングサービス',
                'session_time' => NULL,
                'source_url' => 'http://japan-racing.jp/moto/22/fujispeedw.html',
                'updated_at' => '2022-05-30 22:52:02',
            ),
            1 => 
            array (
                'course_id' => 8,
                'created_at' => '2022-05-30 22:52:02',
                'date' => '2022-03-10',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 283,
                'name' => '富士スピードウェイ走行会',
                'organizer' => 'ジャパンレーシングサービス',
                'session_time' => NULL,
                'source_url' => 'http://japan-racing.jp/moto/22/fujispeedw.html',
                'updated_at' => '2022-05-30 22:52:02',
            ),
            2 => 
            array (
                'course_id' => 8,
                'created_at' => '2022-05-30 22:52:02',
                'date' => '2022-08-13',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 284,
                'name' => '富士スピードウェイ走行会',
                'organizer' => 'ジャパンレーシングサービス',
                'session_time' => NULL,
                'source_url' => 'http://japan-racing.jp/moto/22/fujispeedw.html',
                'updated_at' => '2022-05-30 22:52:02',
            ),
            3 => 
            array (
                'course_id' => 8,
                'created_at' => '2022-05-30 22:52:02',
                'date' => '2022-08-14',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 285,
                'name' => '富士スピードウェイ走行会',
                'organizer' => 'ジャパンレーシングサービス',
                'session_time' => NULL,
                'source_url' => 'http://japan-racing.jp/moto/22/fujispeedw.html',
                'updated_at' => '2022-05-30 22:52:02',
            ),
            4 => 
            array (
                'course_id' => 8,
                'created_at' => '2022-05-30 22:52:02',
                'date' => '2022-10-06',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 286,
                'name' => '富士スピードウェイ走行会',
                'organizer' => 'ジャパンレーシングサービス',
                'session_time' => NULL,
                'source_url' => 'http://japan-racing.jp/moto/22/fujispeedw.html',
                'updated_at' => '2022-05-30 22:52:02',
            ),
            5 => 
            array (
                'course_id' => 8,
                'created_at' => '2022-05-30 22:52:02',
                'date' => '2023-01-08',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 287,
                'name' => '富士スピードウェイ走行会',
                'organizer' => 'ジャパンレーシングサービス',
                'session_time' => NULL,
                'source_url' => 'http://japan-racing.jp/moto/22/fujispeedw.html',
                'updated_at' => '2022-05-30 22:52:02',
            ),
            6 => 
            array (
                'course_id' => 2,
                'created_at' => '2022-05-30 22:52:02',
                'date' => '2022-05-29',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 288,
                'name' => 'D sport cup　Rd.1 in 美浜サーキット',
                'organizer' => 'プロクルーズ',
                'session_time' => NULL,
                'source_url' => 'https://www.procrews.co.jp/d-sport/',
                'updated_at' => '2022-05-30 22:52:02',
            ),
            7 => 
            array (
                'course_id' => 3,
                'created_at' => '2022-05-30 22:52:02',
                'date' => '2022-06-04',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 289,
                'name' => 'プロクルーズ走行会　Rd.5 in 筑波1000',
                'organizer' => 'プロクルーズ',
                'session_time' => NULL,
                'source_url' => 'https://www.procrews.co.jp/soukoukai/index.html',
                'updated_at' => '2022-05-30 22:52:02',
            ),
            8 => 
            array (
                'course_id' => 5,
                'created_at' => '2022-05-30 22:52:02',
                'date' => '2022-06-22',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 290,
                'name' => 'ワークスチューニングサーキットデイ Rd.1 in 鈴鹿サーキット　南コース',
                'organizer' => 'プロクルーズ',
                'session_time' => NULL,
                'source_url' => 'https://www.procrews.co.jp/workstuning/',
                'updated_at' => '2022-05-30 22:52:02',
            ),
            9 => 
            array (
                'course_id' => 3,
                'created_at' => '2022-05-30 22:52:02',
                'date' => '2022-06-25',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 291,
                'name' => 'POTENZA CIRCUIT MEETING！2022　 Rd.2 in 筑波サーキット　コース1000',
                'organizer' => 'プロクルーズ',
                'session_time' => NULL,
                'source_url' => 'https://www.procrews.co.jp/pcm/index.html',
                'updated_at' => '2022-05-30 22:52:02',
            ),
            10 => 
            array (
                'course_id' => 12,
                'created_at' => '2022-05-30 22:52:02',
                'date' => '2022-07-23',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 292,
                'name' => 'POTENZA CIRCUIT MEETING！2022　 Rd.3 in TSタカタサーキット',
                'organizer' => 'プロクルーズ',
                'session_time' => NULL,
                'source_url' => 'https://www.procrews.co.jp/pcm/index.html',
                'updated_at' => '2022-05-30 22:52:02',
            ),
            11 => 
            array (
                'course_id' => 13,
                'created_at' => '2022-05-30 22:52:02',
                'date' => '2022-07-31',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 293,
                'name' => 'チームプロクルーズ　ジムカーナ練習会　 Rd.1 in 宝台樹スキー場駐車場',
                'organizer' => 'プロクルーズ',
                'session_time' => NULL,
                'source_url' => 'https://www.procrews.co.jp/t-procrews/',
                'updated_at' => '2022-05-30 22:52:02',
            ),
            12 => 
            array (
                'course_id' => 3,
                'created_at' => '2022-06-20 08:30:23',
                'date' => '2022-06-28',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 302,
                'name' => '筑波ジムカーナ場 広場レッスン',
                'organizer' => 'ないじぇる',
                'session_time' => NULL,
                'source_url' => 'https://n-igeta.jp/content.aspx?pg=s2_s6',
                'updated_at' => '2022-06-20 08:30:23',
            ),
            13 => 
            array (
                'course_id' => 3,
                'created_at' => '2022-06-20 08:30:23',
                'date' => '2022-07-28',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 303,
                'name' => '筑波ジムカーナ場 広場レッスン',
                'organizer' => 'ないじぇる',
                'session_time' => NULL,
                'source_url' => 'https://n-igeta.jp/content.aspx?pg=s2_s6',
                'updated_at' => '2022-06-20 08:30:23',
            ),
            14 => 
            array (
                'course_id' => 3,
                'created_at' => '2022-06-20 08:30:23',
                'date' => '2022-08-30',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 304,
                'name' => '筑波ジムカーナ場 広場レッスン',
                'organizer' => 'ないじぇる',
                'session_time' => NULL,
                'source_url' => 'https://n-igeta.jp/content.aspx?pg=s2_s6',
                'updated_at' => '2022-06-20 08:30:23',
            ),
            15 => 
            array (
                'course_id' => 3,
                'created_at' => '2022-06-20 08:30:23',
                'date' => '2022-09-28',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 305,
                'name' => '筑波ジムカーナ場 広場レッスン',
                'organizer' => 'ないじぇる',
                'session_time' => NULL,
                'source_url' => 'https://n-igeta.jp/content.aspx?pg=s2_s6',
                'updated_at' => '2022-06-20 08:30:23',
            ),
            16 => 
            array (
                'course_id' => 3,
                'created_at' => '2022-06-20 08:30:23',
                'date' => '2022-10-02',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 306,
                'name' => '筑波ジムカーナ場 広場レッスン',
                'organizer' => 'ないじぇる',
                'session_time' => NULL,
                'source_url' => 'https://n-igeta.jp/content.aspx?pg=s2_s6',
                'updated_at' => '2022-06-20 08:30:23',
            ),
            17 => 
            array (
                'course_id' => 3,
                'created_at' => '2022-06-20 08:30:23',
                'date' => '2022-10-27',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 307,
                'name' => '筑波ジムカーナ場 広場レッスン',
                'organizer' => 'ないじぇる',
                'session_time' => NULL,
                'source_url' => 'https://n-igeta.jp/content.aspx?pg=s2_s6',
                'updated_at' => '2022-06-20 08:30:23',
            ),
            18 => 
            array (
                'course_id' => 3,
                'created_at' => '2022-06-20 08:30:23',
                'date' => '2022-11-29',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 308,
                'name' => '筑波ジムカーナ場 広場レッスン',
                'organizer' => 'ないじぇる',
                'session_time' => NULL,
                'source_url' => 'https://n-igeta.jp/content.aspx?pg=s2_s6',
                'updated_at' => '2022-06-20 08:30:23',
            ),
            19 => 
            array (
                'course_id' => 3,
                'created_at' => '2022-06-20 08:30:23',
                'date' => '2022-12-22',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 309,
                'name' => '筑波ジムカーナ場 広場レッスン',
                'organizer' => 'ないじぇる',
                'session_time' => NULL,
                'source_url' => 'https://n-igeta.jp/content.aspx?pg=s2_s6',
                'updated_at' => '2022-06-20 08:30:23',
            ),
            20 => 
            array (
                'course_id' => 1,
                'created_at' => '2022-07-18 10:54:49',
                'date' => '2022-09-03',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 310,
                'name' => 'ワークスチューニングサーキットデイ Rd.2 in 袖ヶ浦フォレストレースウェイ',
                'organizer' => 'プロクルーズ',
                'session_time' => NULL,
                'source_url' => 'https://www.procrews.co.jp/workstuning/',
                'updated_at' => '2022-07-18 10:54:49',
            ),
            21 => 
            array (
                'course_id' => 3,
                'created_at' => '2022-07-18 10:54:49',
                'date' => '2022-09-17',
                'deleted_at' => NULL,
                'entry_fee' => NULL,
                'id' => 311,
                'name' => 'Procrews走行会 Rd.6 in 筑波1000',
                'organizer' => 'プロクルーズ',
                'session_time' => NULL,
                'source_url' => 'https://www.procrews.co.jp/soukoukai/',
                'updated_at' => '2022-07-18 10:54:49',
            ),
        ));
        
        
    }
}