<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class recipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){
    $faker= Faker::create();
    $limit= 100;
    for ($i=0; $i<= 100;$i++){
        DB::table('user')-> insert([
                'username' => $faker -> name,
                'email' => $faker -> unique()->email,
                'contact_number'=> $faker -> phoneNumber,
            ]);
        }
    }
}
// vd1:
        // $obtainers = [
        //     [
        //         'username' => 'kimtra',
        //         'email' => 'tra123@gmail.com',
        //         'password' => bcrypt('1311'),
        //         'full_name' => 'Y Kim Tra',
        //         'date_of_birth' => '2003-05-12',
        //         'bio' => 'My name is kim tra',
        //         'profile_image_url' => 'https://vn.blog.kkday.com/wp-content/uploads/chup-anh-dep-bang-dien-thoai-25.jpg',
        //     ],
        //     [
        //         'username' => 'Tira',
        //         'email' => 'tira2206@gmail.com',
        //         'password' => bcrypt('tira'),
        //         'full_name' => 'Kim Tira',
        //         'date_of_birth' => '2001-06-22',
        //         'bio' => 'My name is Tira',
        //         'profile_image_url' => 'https://place.cdnxbvn.com/wp-content/uploads/2019/12/check-in-tai-deo-prenn.jpg',
        //     ],
        // ];

