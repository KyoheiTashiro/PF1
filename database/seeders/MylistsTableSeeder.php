<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MylistsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mylists')->delete();
        
        \DB::table('mylists')->insert(array (
            0 => 
            array (
                'created_at' => '2022-06-07 11:37:49',
                'deleted_at' => NULL,
                'event_id' => 291,
                'id' => 28,
                'updated_at' => '2022-06-07 11:37:49',
                'user_id' => 2,
            ),
            1 => 
            array (
                'created_at' => '2022-06-13 19:04:53',
                'deleted_at' => NULL,
                'event_id' => 51,
                'id' => 31,
                'updated_at' => '2022-06-13 19:04:53',
                'user_id' => 2,
            ),
            2 => 
            array (
                'created_at' => '2022-06-13 19:07:05',
                'deleted_at' => NULL,
                'event_id' => 51,
                'id' => 32,
                'updated_at' => '2022-06-13 19:07:05',
                'user_id' => 2,
            ),
            3 => 
            array (
                'created_at' => '2022-06-13 19:24:27',
                'deleted_at' => NULL,
                'event_id' => 51,
                'id' => 33,
                'updated_at' => '2022-06-13 19:24:27',
                'user_id' => 2,
            ),
            4 => 
            array (
                'created_at' => '2022-06-13 19:24:48',
                'deleted_at' => NULL,
                'event_id' => 51,
                'id' => 34,
                'updated_at' => '2022-06-13 19:24:48',
                'user_id' => 2,
            ),
            5 => 
            array (
                'created_at' => '2022-06-13 19:27:49',
                'deleted_at' => NULL,
                'event_id' => 51,
                'id' => 35,
                'updated_at' => '2022-06-13 19:27:49',
                'user_id' => 2,
            ),
            6 => 
            array (
                'created_at' => '2022-06-13 19:28:32',
                'deleted_at' => NULL,
                'event_id' => 51,
                'id' => 36,
                'updated_at' => '2022-06-13 19:28:32',
                'user_id' => 2,
            ),
            7 => 
            array (
                'created_at' => '2022-06-13 19:36:04',
                'deleted_at' => NULL,
                'event_id' => 51,
                'id' => 37,
                'updated_at' => '2022-06-13 19:36:04',
                'user_id' => 2,
            ),
            8 => 
            array (
                'created_at' => '2022-06-13 19:39:36',
                'deleted_at' => NULL,
                'event_id' => 51,
                'id' => 38,
                'updated_at' => '2022-06-13 19:39:36',
                'user_id' => 2,
            ),
            9 => 
            array (
                'created_at' => '2022-06-13 19:39:56',
                'deleted_at' => NULL,
                'event_id' => 51,
                'id' => 39,
                'updated_at' => '2022-06-13 19:39:56',
                'user_id' => 2,
            ),
            10 => 
            array (
                'created_at' => '2022-06-13 20:47:48',
                'deleted_at' => NULL,
                'event_id' => 51,
                'id' => 40,
                'updated_at' => '2022-06-13 20:47:48',
                'user_id' => 2,
            ),
            11 => 
            array (
                'created_at' => '2022-06-14 21:28:57',
                'deleted_at' => NULL,
                'event_id' => 51,
                'id' => 41,
                'updated_at' => '2022-06-14 21:28:57',
                'user_id' => 2,
            ),
            12 => 
            array (
                'created_at' => '2022-06-20 08:32:30',
                'deleted_at' => NULL,
                'event_id' => 308,
                'id' => 42,
                'updated_at' => '2022-06-20 08:32:30',
                'user_id' => 2,
            ),
            13 => 
            array (
                'created_at' => '2022-07-17 23:20:30',
                'deleted_at' => NULL,
                'event_id' => 285,
                'id' => 188,
                'updated_at' => '2022-07-17 23:20:30',
                'user_id' => 2,
            ),
            14 => 
            array (
                'created_at' => '2022-07-17 23:20:32',
                'deleted_at' => NULL,
                'event_id' => 293,
                'id' => 189,
                'updated_at' => '2022-07-17 23:20:32',
                'user_id' => 2,
            ),
            15 => 
            array (
                'created_at' => '2022-07-18 02:41:34',
                'deleted_at' => NULL,
                'event_id' => 303,
                'id' => 199,
                'updated_at' => '2022-07-18 02:41:34',
                'user_id' => 2,
            ),
            16 => 
            array (
                'created_at' => '2022-08-20 19:13:06',
                'deleted_at' => NULL,
                'event_id' => 310,
                'id' => 204,
                'updated_at' => '2022-08-20 19:13:06',
                'user_id' => 2,
            ),
        ));
        
        
    }
}