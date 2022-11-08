<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'created_at' => '2022-05-25 15:59:50',
                'deleted_at' => NULL,
                'email' => 'jirojiro72716900@gmai.com',
                'email_verified_at' => NULL,
                'id' => 2,
                'name' => 'jiro',
                'password' => '$2y$10$lgcobqVPciWKF8Wqklybfu.iPO2lgM9Rly5j83Uz0qYAVURasCUR.',
                'remember_token' => 'oJ0PYHm6UApKmuWxuIpEwbCFspzhdULtYsuRnD7xZv2i1gTQjtiK5qG1NAJn',
                'updated_at' => '2022-05-25 15:59:50',
            ),
            1 => 
            array (
                'created_at' => '2022-06-01 21:59:21',
                'deleted_at' => NULL,
                'email' => 'gerhold.justice@example.com',
                'email_verified_at' => '2022-06-01 21:59:21',
                'id' => 3,
                'name' => 'Ms. Skyla Kassulke',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'sHp0Y3jGxD',
                'updated_at' => '2022-06-01 21:59:21',
            ),
            2 => 
            array (
                'created_at' => '2022-06-01 22:00:11',
                'deleted_at' => NULL,
                'email' => 'ivy.greenfelder@example.com',
                'email_verified_at' => '2022-06-01 22:00:11',
                'id' => 4,
                'name' => 'Pascale Jaskolski',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '8j2KyQagra',
                'updated_at' => '2022-06-01 22:00:11',
            ),
            3 => 
            array (
                'created_at' => '2022-06-01 22:02:29',
                'deleted_at' => NULL,
                'email' => 'liliana37@example.org',
                'email_verified_at' => '2022-06-01 22:02:29',
                'id' => 5,
                'name' => 'Hiram Windler',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'zEHiaqXdO2',
                'updated_at' => '2022-06-01 22:02:29',
            ),
            4 => 
            array (
                'created_at' => '2022-06-01 22:04:18',
                'deleted_at' => NULL,
                'email' => 'katheryn.larson@example.com',
                'email_verified_at' => '2022-06-01 22:04:18',
                'id' => 6,
                'name' => 'Lewis Legros',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'avkVMvyDnN',
                'updated_at' => '2022-06-01 22:04:18',
            ),
            5 => 
            array (
                'created_at' => '2022-06-01 22:06:38',
                'deleted_at' => NULL,
                'email' => 'crist.carter@example.net',
                'email_verified_at' => '2022-06-01 22:06:38',
                'id' => 7,
                'name' => 'Glenna Waters',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'RyPJOmcex0',
                'updated_at' => '2022-06-01 22:06:38',
            ),
            6 => 
            array (
                'created_at' => '2022-06-01 22:08:13',
                'deleted_at' => NULL,
                'email' => 'lisa85@example.net',
                'email_verified_at' => '2022-06-01 22:08:13',
                'id' => 8,
                'name' => 'Asha Sipes I',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'sqASTD3YTI',
                'updated_at' => '2022-06-01 22:08:13',
            ),
            7 => 
            array (
                'created_at' => '2022-06-01 22:08:30',
                'deleted_at' => NULL,
                'email' => 'russel.alvina@example.com',
                'email_verified_at' => '2022-06-01 22:08:30',
                'id' => 9,
                'name' => 'Dr. Myrtle Senger',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'GQI4Zxy530',
                'updated_at' => '2022-06-01 22:08:30',
            ),
            8 => 
            array (
                'created_at' => '2022-06-01 22:09:21',
                'deleted_at' => NULL,
                'email' => 'wilfred.shields@example.com',
                'email_verified_at' => '2022-06-01 22:09:21',
                'id' => 10,
                'name' => 'Miss Lilla Gaylord Jr.',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'I4g3DHnE5p',
                'updated_at' => '2022-06-01 22:09:21',
            ),
            9 => 
            array (
                'created_at' => '2022-06-01 22:10:08',
                'deleted_at' => NULL,
                'email' => 'bobbie.smitham@example.com',
                'email_verified_at' => '2022-06-01 22:10:08',
                'id' => 11,
                'name' => 'Dr. Santina McKenzie II',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'HCZD6u3DAv',
                'updated_at' => '2022-06-01 22:10:08',
            ),
            10 => 
            array (
                'created_at' => '2022-06-01 22:10:24',
                'deleted_at' => NULL,
                'email' => 'sawayn.jeffry@example.org',
                'email_verified_at' => '2022-06-01 22:10:24',
                'id' => 12,
                'name' => 'Mr. Efren O\'Kon',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '7higLtsoj7',
                'updated_at' => '2022-06-01 22:10:24',
            ),
            11 => 
            array (
                'created_at' => '2022-06-01 22:10:31',
                'deleted_at' => NULL,
                'email' => 'carleton74@example.net',
                'email_verified_at' => '2022-06-01 22:10:31',
                'id' => 13,
                'name' => 'Macie Hahn',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'U5AGVK2OL4',
                'updated_at' => '2022-06-01 22:10:31',
            ),
            12 => 
            array (
                'created_at' => '2022-06-01 22:12:44',
                'deleted_at' => NULL,
                'email' => 'hbalistreri@example.net',
                'email_verified_at' => '2022-06-01 22:12:44',
                'id' => 14,
                'name' => 'Ms. Ashlee Connelly I',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'MuBq5zFGtz',
                'updated_at' => '2022-06-01 22:12:44',
            ),
            13 => 
            array (
                'created_at' => '2022-06-01 22:14:41',
                'deleted_at' => NULL,
                'email' => 'sgaylord@example.net',
                'email_verified_at' => '2022-06-01 22:14:41',
                'id' => 15,
                'name' => 'Bernardo Pfeffer DVM',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'Yj8MkiwJjH',
                'updated_at' => '2022-06-01 22:14:41',
            ),
            14 => 
            array (
                'created_at' => '2022-06-01 22:16:01',
                'deleted_at' => NULL,
                'email' => 'neal98@example.net',
                'email_verified_at' => '2022-06-01 22:16:01',
                'id' => 16,
                'name' => 'Miss Marie Kozey',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'Lv6UXsh901',
                'updated_at' => '2022-06-01 22:16:01',
            ),
            15 => 
            array (
                'created_at' => '2022-06-01 22:17:04',
                'deleted_at' => NULL,
                'email' => 'devin62@example.com',
                'email_verified_at' => '2022-06-01 22:17:04',
                'id' => 17,
                'name' => 'Hellen Ruecker',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '9owIB3k2jN',
                'updated_at' => '2022-06-01 22:17:04',
            ),
            16 => 
            array (
                'created_at' => '2022-06-01 22:17:42',
                'deleted_at' => NULL,
                'email' => 'wluettgen@example.org',
                'email_verified_at' => '2022-06-01 22:17:42',
                'id' => 18,
                'name' => 'Dr. Mathilde Kuhlman',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'IRdG3oxV1A',
                'updated_at' => '2022-06-01 22:17:42',
            ),
            17 => 
            array (
                'created_at' => '2022-06-01 22:18:16',
                'deleted_at' => NULL,
                'email' => 'gisselle29@example.net',
                'email_verified_at' => '2022-06-01 22:18:16',
                'id' => 19,
                'name' => 'Terence Bauch',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '5apS9XKYLD',
                'updated_at' => '2022-06-01 22:18:16',
            ),
            18 => 
            array (
                'created_at' => '2022-06-01 22:19:12',
                'deleted_at' => NULL,
                'email' => 'idella.cummings@example.com',
                'email_verified_at' => '2022-06-01 22:19:12',
                'id' => 20,
                'name' => 'Tanya Hudson',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'XGTdNoUwrj',
                'updated_at' => '2022-06-01 22:19:12',
            ),
            19 => 
            array (
                'created_at' => '2022-06-01 22:21:40',
                'deleted_at' => NULL,
                'email' => 'hank.swaniawski@example.org',
                'email_verified_at' => '2022-06-01 22:21:40',
                'id' => 21,
                'name' => 'Alberta Weber MD',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'HxjNQREt1v',
                'updated_at' => '2022-06-01 22:21:40',
            ),
            20 => 
            array (
                'created_at' => '2022-11-08 23:02:37',
                'deleted_at' => NULL,
                'email' => 'walton.nikolaus@example.com',
                'email_verified_at' => '2022-11-08 23:02:37',
                'id' => 22,
                'name' => 'Shirley Marquardt',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'aGJiIVtRnL',
                'updated_at' => '2022-11-08 23:02:37',
            ),
            21 => 
            array (
                'created_at' => '2022-11-08 23:03:22',
                'deleted_at' => NULL,
                'email' => 'terrence.herzog@example.com',
                'email_verified_at' => '2022-11-08 23:03:22',
                'id' => 23,
                'name' => 'Darius Schmeler Jr.',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '8F5Uae828w',
                'updated_at' => '2022-11-08 23:03:22',
            ),
            22 => 
            array (
                'created_at' => '2022-11-08 23:03:22',
                'deleted_at' => NULL,
                'email' => 'reinger.michael@example.com',
                'email_verified_at' => '2022-11-08 23:03:22',
                'id' => 24,
                'name' => 'Delilah Wiegand II',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '1GdsVdJMqH',
                'updated_at' => '2022-11-08 23:03:22',
            ),
            23 => 
            array (
                'created_at' => '2022-11-08 23:06:31',
                'deleted_at' => NULL,
                'email' => 'lacy.keeling@example.net',
                'email_verified_at' => '2022-11-08 23:06:31',
                'id' => 25,
                'name' => 'Roel Grant',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'ROxQRJtN4k',
                'updated_at' => '2022-11-08 23:06:31',
            ),
            24 => 
            array (
                'created_at' => '2022-11-08 23:06:31',
                'deleted_at' => NULL,
                'email' => 'fledner@example.org',
                'email_verified_at' => '2022-11-08 23:06:31',
                'id' => 26,
                'name' => 'Mrs. Florence Franecki DDS',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'HVgREMKO1u',
                'updated_at' => '2022-11-08 23:06:31',
            ),
            25 => 
            array (
                'created_at' => '2022-11-08 23:07:37',
                'deleted_at' => NULL,
                'email' => 'paucek.domenico@example.net',
                'email_verified_at' => '2022-11-08 23:07:37',
                'id' => 27,
                'name' => 'Sabina Schiller',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'xEPpQKW8UR',
                'updated_at' => '2022-11-08 23:07:37',
            ),
            26 => 
            array (
                'created_at' => '2022-11-08 23:08:30',
                'deleted_at' => NULL,
                'email' => 'helen87@example.org',
                'email_verified_at' => '2022-11-08 23:08:30',
                'id' => 28,
                'name' => 'Sarai Dickens',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'QQx54x2HmG',
                'updated_at' => '2022-11-08 23:08:30',
            ),
            27 => 
            array (
                'created_at' => '2022-11-08 23:08:30',
                'deleted_at' => NULL,
                'email' => 'shana90@example.org',
                'email_verified_at' => '2022-11-08 23:08:30',
                'id' => 29,
                'name' => 'Eleanore Ratke DDS',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'vbblysYn4h',
                'updated_at' => '2022-11-08 23:08:30',
            ),
        ));
        
        
    }
}